<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $products = cache()->remember('products.all', 3600, function () {
                return Product::latest()->paginate(10);
            });
            return view('products.index', compact('products'));
        } catch (\Exception $e) {
            Log::error('Error fetching products: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to load products. Please try again later.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        try {
            $validatedData = $request->validated();
            
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('products', 'public');
                $validatedData['image'] = $imagePath;
            }

            Product::create($validatedData);

            return redirect()->route('products.index')
                ->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            Log::error('Error creating product: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create product. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        try {
            return view('products.show', compact('product'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('products.index')
                ->with('error', 'Product not found.');
        } catch (\Exception $e) {
            Log::error('Error showing product: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Failed to load product details. Please try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        try {
            return view('products.edit', compact('product'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('products.index')
                ->with('error', 'Product not found.');
        } catch (\Exception $e) {
            Log::error('Error loading edit form: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Failed to load edit form. Please try again.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        try {
            $validatedData = $request->validated();

            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($product->image) {
                    Storage::disk('public')->delete($product->image);
                }
                $imagePath = $request->file('image')->store('products', 'public');
                $validatedData['image'] = $imagePath;
            }

            $product->update($validatedData);

            return redirect()->route('products.index')
                ->with('success', 'Product updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('products.index')
                ->with('error', 'Product not found.');
        } catch (\Exception $e) {
            Log::error('Error updating product: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update product. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            
            $product->delete();

            return redirect()->route('products.index')
                ->with('success', 'Product deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('products.index')
                ->with('error', 'Product not found.');
        } catch (\Exception $e) {
            Log::error('Error deleting product: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Failed to delete product. Please try again.');
        }
    }
}

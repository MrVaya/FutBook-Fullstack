<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Futsal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'thumbnail',
        'amenities',
        'pricing',
        'contact',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'amenities' => 'array',
        'pricing' => 'array',
        'contact' => 'array',
        'is_active' => 'boolean',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
} 
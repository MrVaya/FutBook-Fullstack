// Cart functionality
let cart = JSON.parse(localStorage.getItem('cart')) || [];
updateCartCount();

// Add to cart functionality
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.btn-outline-dark');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.card');
            const productName = card.querySelector('.card-title').textContent.split('Rs.')[0].trim();
            const productPrice = card.querySelector('.card-title').textContent.split('Rs.')[1].trim();
            const productImage = card.querySelector('.card-img-top').src;
            
            // Check if product already exists in cart
            const existingProduct = cart.find(item => item.name === productName);
            
            if (existingProduct) {
                existingProduct.quantity += 1;
            } else {
                cart.push({
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    quantity: 1
                });
            }
            
            // Save to localStorage
            localStorage.setItem('cart', JSON.stringify(cart));
            
            // Update cart count
            updateCartCount();
            
            // Show success message
            alert('Product added to cart!');
        });
    });
});

// Update cart count in navbar
function updateCartCount() {
    const cartCount = document.querySelector('.cart-count');
    const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
    cartCount.textContent = totalItems;
}

// Function to handle product image clicks
function handleProductClick(id) {
    const futsal = futsals.find(f => f.id === id);
    if (futsal) {
        window.location.href = `${FUTSAL_DETAILS_URL_BASE}/${id}`;
    }
}

// Function to render products
function renderProducts() {
    const futsalProductsContainer = document.querySelector('#futsal-products-container');
    if (!futsalProductsContainer) return;

    futsalProductsContainer.innerHTML = ''; // Clear existing content

    // Only show first 8 futsals on the index page
    const futsalsToShow = futsals.slice(0, 8);

    futsalsToShow.forEach(futsal => {
        const productCard = `
            <div class="col-6 col-md-3">
                <div class="card h-100">
                    <img src="${futsal.image}" 
                         class="card-img-top" 
                         alt="${futsal.name}"
                         onclick="handleProductClick(${futsal.id})"
                         style="cursor: pointer;">
                    <div class="card-body">
                        <h6 class="card-title mb-1">${futsal.name}</h6>
                        <p class="text-muted small mb-2">${futsal.description.substring(0, 100)}...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 mb-0">Rs. ${futsal.price}</span>
                            <span class="badge bg-primary">${futsal.category}</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <button class="btn btn-outline-dark w-100" onclick="handleBooking(${futsal.id})">Book Now</button>
                    </div>
                </div>
            </div>
        `;
        futsalProductsContainer.innerHTML += productCard;
    });
}

// Function to handle booking
function handleBooking(id) {
    const futsal = futsals.find(f => f.id === id);
    if (futsal) {
        // You can implement your booking logic here
        console.log('Redirecting to futsal details for booking:', futsal.name);
        // Redirect to the futsal details page
        window.location.href = `${FUTSAL_DETAILS_URL_BASE}/${id}`;
    }
}

// Call renderProducts when the page loads
document.addEventListener('DOMContentLoaded', () => {
    if (typeof futsals !== 'undefined') { // Ensure futsals is defined
        renderProducts();
    } else {
        console.error('futsals array is not defined. Ensure futsal-data.js is loaded before script.js.');
    }
});     
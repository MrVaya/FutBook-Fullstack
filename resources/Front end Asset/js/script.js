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
function handleProductClick(productId) {
    // Store the selected product ID in localStorage
    localStorage.setItem('selectedProductId', productId);
    // Navigate to futsal-details.html
    window.location.href = 'futsal-details.html';
}

// Function to render products
function renderProducts() {
    const productContainer = document.querySelector('.row'); // Adjust selector based on your container
    if (!productContainer) return;

    products.forEach(product => {
        const productCard = `
            <div class="col-6 col-md-3">
                <div class="card h-100">
                    <img src="${product.image}" 
                         class="card-img-top" 
                         alt="${product.name}"
                         onclick="handleProductClick(${product.id})"
                         style="cursor: pointer;">
                    <div class="card-body">
                        <h6 class="card-title mb-1">${product.name}<span class="float-end">${product.price}</span></h6>
                        <small class="text-muted">${product.variant}</small>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-dark w-100">Add to cart</button>
                    </div>
                </div>
            </div>
        `;
        productContainer.innerHTML += productCard;
    });
}

// Function to make boys section images clickable
function makeBoysSectionClickable() {
    const boysSectionImages = document.querySelectorAll('.row.g-4 .card-img-top');
    boysSectionImages.forEach((img, index) => {
        img.style.cursor = 'pointer';
        img.onclick = () => {
            // Use the same product IDs from the products array
            const productId = (index % 6) + 1; // This will cycle through IDs 1-6
            handleProductClick(productId);
        };
    });
}

// Call renderProducts and makeBoysSectionClickable when the page loads
document.addEventListener('DOMContentLoaded', () => {
    renderProducts();
    makeBoysSectionClickable();
}); 
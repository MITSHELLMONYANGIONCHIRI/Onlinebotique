let cartItems = {};  // Use an object to store cart items by product ID

function addToCart(productId, button) {
    const messageElement = document.getElementById(`add-to-cart-message-${productId}`);

    // Disable the button and show loading spinner
    button.disabled = true;
    button.innerHTML = '<i class="fa fa-spinner fa-spin"></i>';

    // Simulate a 2-second process (replace with your actual process)
    setTimeout(() => {
        // Enable the button and revert to the original icon
        button.disabled = false;
        button.innerHTML = '<i class="fi-rs-shopping-bag-add"></i>';

        if (!cartItems[productId]) {
            cartItems[productId] = 1;
            updateCartBadge();
            messageElement.innerText = 'Item added to cart';
            setTimeout(() => {
                messageElement.innerText = '';
            }, 2000);  // Clear the message after 2 seconds
        } else {
            cartItems[productId]++;
            messageElement.innerText = 'Item already added to cart';
            setTimeout(() => {
                messageElement.innerText = '';
            }, 2000);  // Clear the message after 2 seconds
        }
    }, 2000);  // Simulate a 2-second process (replace with your actual process)
}

function updateCartBadge() {
    const cartBadge = document.getElementById('cart-badge');
    let totalItems = Object.values(cartItems).reduce((total, count) => total + count, 0);
    cartBadge.innerText = totalItems.toString();
}

function proceedToPayment() {
    alert('Redirecting to the payment page...');
}
let wishlistItems = {};  // Use an object to store wishlist items by product ID

function addToWishlist(productId) {
    const messageElement = document.getElementById(`add-to-wishlist-message-${productId}`);
    const wishlistButton = document.getElementById(`wishlist-button-${productId}`);

    // Disable the button and show loading spinner
    wishlistButton.disabled = true;
    wishlistButton.innerHTML = '<i class="fa fa-spinner fa-spin"></i>';

    setTimeout(() => {
        if (!wishlistItems[productId]) {
            wishlistItems[productId] = 1;
            updateWishlistBadge();
            messageElement.innerText = 'Item added to wishlist';
            setTimeout(() => {
                messageElement.innerText = '';
            }, 2000);  // Clear the message after 2 seconds
        } else {
            // Product already in the wishlist
            // Add handling logic for this scenario if needed
            messageElement.innerText = 'Item already in wishlist';
            setTimeout(() => {
                messageElement.innerText = '';
            }, 2000);  // Clear the message after 2 seconds
        }

        // Enable the button and revert to the original icon
        wishlistButton.disabled = false;
        wishlistButton.innerHTML = '<i class="fi-rs-heart"></i>';
    }, 2000);  // Simulate a 2-second process (replace with your actual process)
}

function updateWishlistBadge() {
    const wishlistBadge = document.getElementById('wishlist-badge');
    let totalItems = Object.values(wishlistItems).reduce((total, count) => total + count, 0);
    wishlistBadge.innerText = totalItems.toString();
}

// Call this function to initialize the wishlist badge
updateWishlistBadge();

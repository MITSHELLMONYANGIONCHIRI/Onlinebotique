let favorite = {};  // Use an object to store cart items by product ID

function addToCart(productId) {
    const messageElement = document.getElementById(`add-to-cart-message-${productId}`);

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
}

function updateCartBadge() {
    const cartBadge = document.getElementById('cart-badge');
    let totalItems = Object.values(cartItems).reduce((total, count) => total + count, 0);
    cartBadge.innerText = totalItems.toString();
}

function proceedToPayment() {
    alert('Redirecting to payment page...');
}

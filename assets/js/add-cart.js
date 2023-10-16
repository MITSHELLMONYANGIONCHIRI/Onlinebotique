let cartItems = {}; // Use an object to store cart items by product ID

function addToCart(productId, button) {
    const messageElement = document.getElementById(`add-to-cart-message-${productId}`);

    // Disable the button and show loading spinner
    button.disabled = true;
    button.innerHTML = '<i class="fa fa-spinner fa-spin"></i>';

    if (!cartItems[productId]) {
        cartItems[productId] = 1;

        // Stop the spinner and revert to the original icon after 2 seconds
        setTimeout(() => {
            button.disabled = false;
            button.innerHTML = '<i class="fi-rs-shopping-bag-add"></i>';

            // Show the message immediately after stopping the spinner
            messageElement.innerText = 'Item added to cart';
            messageElement.style.display = 'block';

            // Update the cart badge after the message is displayed
            setTimeout(() => {
                updateCartBadge();
            }, 0);

            // Clear the message after 2 seconds
            setTimeout(() => {
                messageElement.innerText = '';
                messageElement.style.display = 'none';
            }, 2000);
        }, 2000);
    } else {
        messageElement.innerText = 'Item already added to cart';

        // Stop the spinner and revert to the original icon after 2 seconds
        setTimeout(() => {
            button.disabled = false;
            button.innerHTML = '<i class="fi-rs-shopping-bag-add"></i>';

            // Show the message immediately after stopping the spinner
            messageElement.innerText = 'Item already added to cart';
            messageElement.style.display = 'block';

            // Clear the message after 2 seconds
            setTimeout(() => {
                messageElement.innerText = '';
                messageElement.style.display = 'none';
            }, 2000);
        }, 2000);
    }

    updateCartModal(); // Update the cart modal with the latest cart items
}

        function updateCartModal() {
    const cartTableBody = document.getElementById('cartTableBody');
    const proceedToPaymentButton = document.querySelector('.modal-footer a[href="payment.php"]');

    // Check if the cart is empty
    if (Object.keys(cartItems).length === 0) {
        // Cart is empty, display a message
        cartTableBody.innerHTML = `
            <tr>
                <td colspan="5">
                    <div style="display: flex; align-items: center;">
                        <img src="assets/img/trendy logo.png" alt="Empty Cart" width="100">
                        <p style="margin-left: 20px;">Dear valued customer,<br>Your cart at Trendy Boutique is currently empty. Don't worry, we're here to assist you in finding the perfect match! <span style="color:green;">Mitshell</span>, the owner of Trendy Boutique, sends her best wishes for a delightful shopping experience. Feel free to browse our wide range of products and add them to your cart. If you have any questions or need assistance, please don't hesitate to contact us. Happy shopping!</p>
                    </div>
                </td>
            </tr>`;

        // Hide the "Proceed to Payment" button
        proceedToPaymentButton.style.display = 'none';
        return;
    }

    // Clear the previous content
    cartTableBody.innerHTML = '';

    // Populate the cart items in the table
    for (const productId in cartItems) {
        const productName = document.getElementById(`product-name-${productId}`).innerText;
        const productPrice = document.getElementById(`product-price-${productId}`).innerText;
        const productImage = document.getElementById(`product-image-${productId}`).src;
        const quantity = cartItems[productId];

        const row = document.createElement('tr');
        row.innerHTML = `
            <td><img src="${productImage}" alt="${productName}" width="50" height="50"></td>
            <td>${productName}</td>
            <td>
                <span id="product-price-${productId}-cart" class="product-price" data-original-price="${productPrice}">${productPrice}</span>
            </td>
            <td>
                <button class="btn btn-sm btn-outline-primary" onclick="decrementQuantity('${productId}')">-</button>
                <span id="quantity-${productId}">${quantity}</span>
                <button class="btn btn-sm btn-outline-primary" onclick="incrementQuantity('${productId}')">+</button>
            </td>
            <td>
                <button class="btn btn-danger" data-product-id="${productId}" onclick="removeItem('${productId}')">
                    Remove
                </button>
                <span id="removing-message-${productId}" style="display: none;">Removing...</span>
            </td>
        `;
        cartTableBody.appendChild(row);
    }

    // Show the "Proceed to Payment" button
    proceedToPaymentButton.style.display = 'block';
}


function updateProductPrice(productId) {
    const quantity = cartItems[productId];
    let updatedPrice;

    // Multiply the price by the quantity up to 4, after that keep it constant
    if (quantity <= 4) {
        const originalPrice = parseFloat(document.getElementById(`product-price-${productId}`).getAttribute('data-original-price'));
        updatedPrice = originalPrice * quantity;
    } else {
        // If quantity is greater than 4, use the price for 4 items
        const originalPrice = parseFloat(document.getElementById(`product-price-${productId}`).getAttribute('data-original-price'));
        updatedPrice = originalPrice * 4;
    }

    // Display the updated price with the currency symbol "Ksh"
    const priceElement = document.getElementById(`product-price-${productId}-cart`);
    priceElement.innerText = `Ksh${updatedPrice.toFixed(2)}`;
}


        function incrementQuantity(productId) {
            cartItems[productId]++;
            const quantityElement = document.getElementById(`quantity-${productId}`);
            quantityElement.innerText = cartItems[productId];

            // Update the product price based on the new quantity
            updateProductPrice(productId);
        }

        function decrementQuantity(productId) {
            if (cartItems[productId] > 1) {
                cartItems[productId]--;
                const quantityElement = document.getElementById(`quantity-${productId}`);
                quantityElement.innerText = cartItems[productId];

                // Update the product price based on the new quantity
                updateProductPrice(productId);
            }
        }

        function removeItem(productId) {
            // Display a toast notification with "Removing..." text
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                },
                willClose: () => {
                    if (cartItems[productId]) {
                        delete cartItems[productId]; // Remove the entire product
                        updateCartModal();
                    }
                    // Update the cart badge count
                    updateCartBadge();
                }
            });

            Toast.fire({
                icon: 'success',
                title: 'Removing...'
            });
        }

        function updateCartBadge() {
            const cartBadge = document.getElementById('cart-badge');
            let totalItems = Object.values(cartItems).reduce((total, count) => total + count, 0);
            cartBadge.innerText = totalItems.toString();
        }
        window.onload = function() {
    // Call the function to update the cart modal
    updateCartModal();
};

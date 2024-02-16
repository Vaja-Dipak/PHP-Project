<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy Now</title>
  <style>
    /* ... (previous styles remain unchanged) ... */

    /* Style for the "Add to Cart" button */
    .add-to-cart-btn {
      background-color: #3498db;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .add-to-cart-btn:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

  <div class="container">
    <form id="buy-now-form">
      <label for="product-name">Product Name:</label>
      <input type="text" id="product-name" name="product_name" required>

      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" name="quantity" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="card-number">Card Number:</label>
      <input type="text" id="card-number" name="card_number" required>

      <label for="expiry-date">Expiry Date:</label>
      <input type="text" id="expiry-date" name="expiry_date" placeholder="MM/YYYY" required>

      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" name="cvv" required>

      <input type="submit" value="Buy Now" class="add-to-cart-btn">
    </form>
  </div>

</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add to Wishlist</title>
  <style>
    /* Button styling */
    .add-to-wishlist-btn {
      background-color: #e74c3c;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .add-to-wishlist-btn:hover {
      background-color: #c0392b;
    }

    /* Wishlist display styling */
    #wishlist {
      margin-top: 20px;
    }

    #wishlist ul {
      list-style-type: none;
      padding: 0;
    }

    #wishlist li {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Product Details</h2>
    <p><strong>Product Name:</strong> Product A</p>

    <!-- "Add to Wishlist" button -->
    <button class="add-to-wishlist-btn" onclick="addToWishlist('Product A')">Add to Wishlist</button>

    <div id="wishlist">
      <h2>Wishlist</h2>
      <ul id="wishlist-items"></ul>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const wishlist = [];

      // Function to add items to the wishlist
      window.addToWishlist = function(productName) {
        wishlist.push({ productName });
        updateWishlistDisplay();
      };

      // Function to update the wishlist display
      function updateWishlistDisplay() {
        const wishlistItemsElement = document.getElementById('wishlist-items');
        const lastItem = wishlist[wishlist.length - 1];

        const li = document.createElement('li');
        li.textContent = `${lastItem.productName}`;
        wishlistItemsElement.appendChild(li);
      }
    });
  </script>

</body>
</html>
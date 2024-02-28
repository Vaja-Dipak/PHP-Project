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
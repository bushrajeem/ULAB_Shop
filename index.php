
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="index.css" />
  <title>Shop</title>
</head>

<body>
  <header>
    <div class="container">
      <div class="header-content">
        <div class="logo">
          <p>Shop</p>
        </div>
        <div class="menu-bar">
          <ul>
            <li>Home</li>
            <li>Products</li>
            <li>About</li>
            <li>Contact</li>
            <?php
            if (isset($_SESSION['uname'])) {
              echo '<li><a href="logout.php">Logout</a></li>';
            } else {
              echo '<li><a href="login.php">Login</a></li>';
              echo '<li><a href="signup.php">Sign Up</a></li>';
            }
            ?>
          </ul>

        </div>
      </div>
    </div>
  </header>

  <div class="body">
    <div class="container">
      <h2>Explore Our Products</h2>
      <?php
      if(isset($_SESSION['uname'])){
          echo "<h3 style='margin-bottom:20px; color:#f48535;'>Welcome, ".$_SESSION['uname']."!</h3>";
      }
      ?>
      <p class="sub-heading">
        Discover our latest collection at the best price
      </p>

      <!-- filter section -->
      <section class="filters">
        <div class="category">
          <label>Category:</label>
          <select>
            <option>All Categories</option>
            <option>Electronics</option>
            <option>Clothing</option>
            <option>Home & Garden</option>
            <option>Accessories</option>
          </select>
        </div>

        <div class="sort">
          <label>Sort by:</label>
          <select>
            <option>Featured</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
            <option>Newest</option>
          </select>
        </div>

        <input class="search" type="text" placeholder="Search products..." />
      </section>

      <!-- products section -->
      <div class="products">
        <div class="product-card">
          <span class="category-badge">Electronics</span>
          <img src="img/earbuds.jpeg" alt="earbuds" />
          <h3>Wireless Earbuds</h3>
          <div class="rating">
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star empty">☆</span>
          </div>
          <div class="price">$49.99</div>
          <button>Add to Cart</button>
        </div>

        <div class="product-card">
          <span class="category-badge">Fashion</span>
          <img src="img/tshirt.jpg" alt="tshirt" />
          <h3>Stylish T-shirt</h3>
          <div class="rating">
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">☆</span>
            <span class="star empty">☆</span>
          </div>
          <div class="price">$29.99</div>
          <button>Add to Cart</button>
        </div>

        <div class="product-card">
          <span class="category-badge">Home</span>
          <img src="img/lamp.jpg" alt="lamp" />
          <h3>Table Lamp</h3>
          <div class="rating">
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star empty">★</span>
          </div>
          <div class="price">$59.99</div>
          <button>Add to Cart</button>
        </div>

        <div class="product-card">
          <span class="category-badge">Electronics</span>
          <img src="img/watch.webp" alt="watch" />
          <h3>Smart Watch</h3>
          <div class="rating">
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star empty">★</span>
          </div>
          <div class="price">$99.99</div>
          <button>Add to Cart</button>
        </div>

        <div class="product-card">
          <span class="category-badge">Fashion</span>
          <img src="img/jeans.jpeg" alt="jeans" />
          <h3>Denim Jeans</h3>
          <div class="rating">
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star filled">★</span>
            <span class="star empty">☆</span>
          </div>
          <div class="price">$39.99</div>
          <button>Add to Cart</button>
        </div>
      </div>
    </div>
  </div>
  <footer>© 2025 ULAB Shop. All Rights Reserved</footer>
</body>

</html>
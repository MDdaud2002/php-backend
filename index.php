<?php
include "include/confige.php";
session_start();

// Check if the user is logged in
$loggedInEmail = isset($_SESSION['email']) ? $_SESSION['email'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Your Name | Home</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Display logged-in user email -->
  <?php if ($loggedInEmail): ?>
    <div class="user-banner">
      Logged in as: <strong><?php echo htmlspecialchars($loggedInEmail); ?></strong>
    </div>
  <?php endif; ?>

  <header class="hero">
    <nav class="navbar">
      <h1 class="logo">YourName</h1>
      <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>

        <!-- Conditionally show login/signup or logout -->
        <?php if (!$loggedInEmail): ?>
          <li><a href="login.php" class="nav-btn">Login</a></li>
          <li><a href="signup.php" class="nav-btn">Sign Up</a></li>
        <?php else: ?>
          <li><a href="server/logouth.php" class="nav-btn logout">Logout</a></li>
          <li><a href="product.php" class="nav-btn logout">Add Product</a></li>
        <?php endif; ?>
      </ul>
    </nav>
            <?php
            

            // Fetch products
            $stmt = $dbh->query("SELECT * FROM product");
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <section class="products-section">
            <h3 style="text-align:center;">Our Products</h3>
            <div class="products-wrapper">
                <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <h2><?php echo htmlspecialchars($product['pname']); ?></h2>
                    <p class="price">$<?php echo htmlspecialchars($product['pprice']); ?></p>
                    <p class="desc"><?php echo htmlspecialchars($product['pdescription']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            </section>

    <div class="hero-content">
      <h2>Hello, I'm <span>Your Name</span></h2>
      <p>A creative developer/designer blending code & design to build meaningful digital experiences.</p>
      <a href="#about" class="btn">Explore More ↓</a>
    </div>
  </header>

  <section id="about" class="section">
    <h3>About Me</h3>
    <p>This is a placeholder for your bio. Talk about your experience, passions, and current goals.</p>
  </section>

  <section id="projects" class="section">
    <h3>Projects</h3>
    <p>Showcase a few recent works with links, images, or GitHub repos here.</p>
  </section>

  <section id="contact" class="section">
    <h3>Contact</h3>
    <p>Want to get in touch? Feel free to reach out via email or connect on social media.</p>
  </section>

  <footer>
    <p>&copy; 2025 Your Name. All rights reserved.</p>
  </footer>
</body>
</html>

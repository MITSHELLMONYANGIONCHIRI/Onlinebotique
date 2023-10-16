<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trendy Botique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/trendy logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-cH+W9QJlqVvzSr85>  0QrCk+Qw7l3pXQ+1i5l2Zk5JZB7KZqKu5XQ 1QKBkZUJw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/shapes.css" rel="stylesheet">
  <link href="assets/css/index.css" rel="stylesheet">



  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <?php include 'shapes.php' ?>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com" style="text-decoration: none;">contact@trendybotique.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+254 713 541 965</span></i>
      </div>

      <div class="changing-text"></div> <!-- Changing text will be displayed here -->

      <div class="social-links d-none d-md-flex align-items-center">
        <!--login and register -->
        <a href="#" class="login"><i class="bi bi-person"></i> Login</a>
        <a href="login/signup.php" class="register"><i class="bi bi-person-plus"></i> Register</a>
      </div>
    </div>
  </section>

  <script>
    const changingTextElement = document.querySelector('.changing-text');
    const changingTexts = ['A Stylish Welcome Awaits You at Trendy Boutique!', 'Promotions Available! Fashion Finds, Just for You!', 'Get great devices up to 50% off View detail', 'New Arrivals - Shop Now!'];
    let index = 0;

    function changeText() {
      changingTextElement.textContent = changingTexts[index];
      index = (index + 1) % changingTexts.length;
    }

    // Change the text every 3 seconds (3000 milliseconds)
    setInterval(changeText, 3000);
  </script>

  <div id="above-header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a style="margin-left: -20px; padding: 5px 20px; " href="#" class="above-header-logo with-background">
        <span style="margin-left:25px">Explore Now</span></a>

      <div class="search-bar">
        <input type="text" placeholder="Search for trendy styles">
        <button type="submit">Search</button>
      </div>

      <nav id="above-header-navbar" class="above-header-navbar">
        <ul>
          <li><a href="#">Women's</a></li>
          <li><a href="#">Men's</a></li>
          <li><a href="#">Accessories</a></li>
          <li><a href="#">Footwear</a></li>
          <li><a href="#">Sale</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <style>
    /* Style for the badges */
.header-links .link-item {
    display: inline-block;
    margin-right: 15px;
    position: relative;
}

/* Style for the badges */
.header-links .link-item .badge {
    background-color: red;
    color: white;
    border-radius: 50%;
    padding: 3px 8px;
    position: absolute;
    top: -10px;
    right: -10px;
}

    /* Style for the element above the header */
    #above-header {
      background-color: #f8f9fa;
      /* Adjust the background color */
      padding: 10px 0;
      /* Adjust the padding */
    }

    /* Logo style for the element above the header */
    .above-header-logo {
      font-size: 24px;
      font-weight: bold;
      color: black;
      /* Adjust the color */
    }

    /* Navbar style for the element above the header */
    .above-header-navbar ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    .above-header-navbar li {
      margin-left: 20px;
    }

    .above-header-navbar a {
      text-decoration: none;
      color: black;
    }

    .above-header-navbar a:hover {
      color: red;
    }

    .with-background {
      background-image: url('assets/img/btn-brush-bg-2.png');
      background-size: cover;
      background-repeat: no-repeat;
      padding: 10px 15px;
      color: red;
      text-decoration: none;
    }

    .search-bar {
      display: flex;
      align-items: center;
    }

    .search-bar input[type="text"] {
      padding: 10px;
      border: 1px solid #09A59A;
      border-radius: 5px;
      font-size: 14px;
      width: 400px;
    }

    .search-bar input[type="text"]:focus {
      border-color: red;
      outline: 1px solid red;
    }

    .search-bar button {
      padding: 10px 20px;
      background-color: #f44336;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
    }

    .search-bar button:hover {
      background-color: #e53935;
    }

    .search-bar input[type="text"] {
      margin-right: 10px;
    }

    /* Add some spacing between the icons and text */
    .header-links .link-item {
      display: inline-block;
      margin-right: 15px;
      position: relative;
    }
  </style>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">

    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src="assets/img/trendy logo.png" alt="logo"><span> Trendy botique</span></a>

      <nav id="navbar" class="navbar">
        <!--category-->


        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Shop</a></li>
          <li><a class="nav-link scrollto" href="#services">About-Us</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>

          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

     <!-- Header with Wishlist and Cart links -->
<div style="font-size: 17px" class="header-links">
    <a style="color: #09A59A" href="wishlist.html" class="link-item" id="wishlist-link">
        <i class="bi bi-heart"></i><span class="link-text"></span>
        <span class="badge" id="wishlist-badge">0</span>
    </a>
    <a style="color: #09A59A" href="compare.html" class="link-item">
        <i class="fas fa-sync-alt"></i><span class="link-text">Compare</span>
    </a>
  
    <a style="color: #09A59A" href="#" class="link-item cart" id="cart-link" data-toggle="modal" data-target="#cartModal">
    <i class="fi-rs-shopping-bag-add"></i>
    <span class="badge" id="cart-badge">0</span>
</a>



</div>


    </div>
  </header><!-- End Header -->
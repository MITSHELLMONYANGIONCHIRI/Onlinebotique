<body id="section_1">
    <header style="background-color:#cf2e2e" class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <h1 style="color: white;font-size: 15px;">Welcome To Trendy Boutique!</h1>
                </div>
                <div class="col-lg-4 col-12 d-flex justify-content-end align-items-center">
                    <a href="#" class="me-2" style="color: white; text-decoration: none;">
                        <i class="bi bi-box-arrow-in-right"></i> Login
                    </a>
                    <span style="color: white;">/</span>
                    <a href="#" style="color: white; text-decoration: none;">
                        <i class="bi bi-person-plus"></i> Register
                    </a>
                </div>
            </div>
        </div>
    </header>

    <nav style="background-color:white" class="navbar navbar-expand-lg shadow-lg">
        <div class="container">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="tel:+254777955511">
                        <i class="bi bi-telephone"></i> +254 777 955 511

                    </a>
                </li>

                <li style="margin-left: 100px;" class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-heart"></i><span class="nav-text">Wishlist</span><span class="badge">2</span>
                    </a>
                </li>

                <li style="margin-left: 20px;" class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-bar-chart"></i><span class="nav-text">Compare</span><span class="badge">10</span>
                    </a>
                </li>

                <li style="margin-right: 30px;" class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-cart"></i><span class="nav-text">Items</span><span class="badge">5</span>
                    </a>
                </li>
                <style>
                    .nav-item .badge {
                        background-color: red;
                        color: white;
                        padding: 2px 5px;
                        border-radius: 50%;
                        margin-left: 5px;
                        /* Adjust the margin as needed */
                    }

                    .nav-item {
                        position: relative;
                    }

                    .nav-item .nav-text {
                        display: none;
                        position: absolute;
                        top: 100%;
                        left: 0;
                        padding: 10px;
                        background-color: #ffffff;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                    }

                    .nav-item:hover .nav-text {
                        display: inline-block;
                    }
                </style>
            </ul>
        </div>
        <div class="container">
            <a style="margin-right: 20px;" class="navbar-brand" href="index.php">
                <img src="assets/img/trendy logo.png" class="logo img-fluid" alt="Trendy Boutique">

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            $currentPage = basename($_SERVER['PHP_SELF']); // Get the current page filename

            // Check if the current page is 'about.php' and set the active class accordingly
            $aboutActive = ($currentPage == 'about.php') ? 'active' : '';
            ?>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">
                        <a class="nav-link custom-btn custom-border-btn btn" href="index.php">HOME</a>
                    </li>

                    <li class="nav-item <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">
                        <a class="nav-link custom-btn custom-border-btn btn" href="about.php">ABOUT</a>
                    </li>

                    <li class="nav-item <?php echo ($currentPage == 'shop.php') ? 'active' : ''; ?>">
                        <a class="nav-link custom-btn custom-border-btn btn" href="shop.php">SHOP</a>
                    </li>

                    <li class="nav-item <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">
                        <a class="nav-link custom-btn custom-border-btn btn" href="contact.php">CONTACT</a>
                    </li>

                    <li class="nav-item <?php echo ($currentPage == 'cart.php') ? 'active' : ''; ?>">
                        <a class="nav-link custom-btn custom-border-btn btn" href="cart.php">CART</a>
                    </li>
                    <!-- search icon -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>

                    <!-- Add other navigation items as needed -->
                </ul>
            </div>
        </div>

    </nav>
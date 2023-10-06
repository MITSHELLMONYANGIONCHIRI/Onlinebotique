<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="assets/img/trendy logo.png" rel="icon">
    <!-- CSS FILES -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="icons/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/css/house-hunt-header.css" rel="stylesheet">

    <link href="assets/css/homepage.css" rel="stylesheet">

    <link href="assets/css/belowheader.css" rel="stylesheet">

    <link href="assets/css/footer.css" rel="stylesheet">

    <link href="assets/css/shapes.css" rel="stylesheet">

</head>

<body>
    <?php include 'include/header.php'; ?>
    <?php include 'shapes.php'; ?>


    <style>
        /******* Bootstrap Theming ********/


        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }


        @media (max-width: 991.98px) {
            .navbar-light .navbar-nav .nav-link {
                padding: 5px 0px;
            }
        }

        .navbar-vertical.navbar-light .navbar-nav .nav-link {
            padding: 8px 30px;
            border-bottom: 1px solid #EDF1FF;
        }

        #header-carousel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-caption {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .section-title {
            position: relative;
            display: inline-block;
            letter-spacing: 1px;
            font-weight: bold;
            color: #1C1C1C;
        }

        .section-title span {
            position: relative;
            background: #ffffff;
            z-index: 1;
        }

        .section-title::before {
            position: absolute;
            content: "";
            top: 50%;
            left: 0;
            width: 100%;
            height: 2px;
            margin-top: -1px;
            background: #1C1C1C;
        }

        .offer img {
            position: absolute;
            max-width: 50%;
            max-height: 90%;
            bottom: 0;
        }

        .offer .text-md-right img {
            left: 0;
        }

        .offer .text-md-left img {
            right: 0;
        }

        .cat-item .cat-img img,
        .product-item .product-img img {
            transition: .5s;
        }

        .cat-item:hover .cat-img img,
        .product-item:hover .product-img img {
            transform: scale(1.2);
        }

        .product-item .btn:hover {
            color: #D19C97 !important;
        }

        .contact-form .help-block ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .back-to-top {
            position: fixed;
            display: none;
            right: 30px;
            bottom: 30px;
            z-index: 11;
            animation: action 1s infinite alternate;
        }

        @keyframes action {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-15px);
            }
        }
    </style>

    </section>
    <!-- Navbar Start -->
    <div style="margin-top: 20px;" class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <div class="collapse show navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <a href="#" class="nav-link" data-toggle="dropdown">Choose Your Design <i class="fas fa-shopping-cart"></i></a>
                        <a href="" class="nav-item nav-link">Shirts</a>
                        <a href="" class="nav-item nav-link">Jeans</a>
                        <a href="" class="nav-item nav-link">Swimwear</a>
                        <a href="" class="nav-item nav-link">Sleepwear</a>
                        <a href="" class="nav-item nav-link">Sportswear</a>
                        <a href="" class="nav-item nav-link">Jumpsuits</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;" class="col-lg-9">


                <div style="margin-top: 50px;" id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                       
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="assets/img/banner.jpeg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3 animate-fade-in">Discover Exclusive Deals!</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4 animate-fade-in">Fashionable Dresses at 10% Off</h3>
                                    <a href="#" class="btn btn-light py-2 px-3 animate-fade-in">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img style="object-fit: contain;" src="assets\img\header-smartphone.png" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3 animate-fade-in">Get the Latest Tech!</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4 animate-fade-in">Smartphones for the Modern Lifestyle</h3>
                                    <a href="#" class="btn btn-light py-2 px-3 animate-fade-in">Explore Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img style="object-fit: contain;" src="assets\img\tshirt-img.png" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3 animate-fade-in">Upgrade Your Style!</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4 animate-fade-in">Trendy T-Shirts and More</h3>
                                    <a href="#" class="btn btn-light py-2 px-3 animate-fade-in">Shop Fashion</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img style="object-fit: contain;" src="assets\img\women-clothes-img.png" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3 animate-fade-in">Elevate Your Wardrobe!</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4 animate-fade-in">Stylish Women's Clothing</h3>
                                    <a href="#" class="btn btn-light py-2 px-3 animate-fade-in">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add controls for navigation -->
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>


            <style>
                #header-carousel .carousel-item {
                    transition: opacity 1s ease-in-out;
                }

                #header-carousel .carousel-item.active {
                    opacity: 1;
                }

                #header-carousel .carousel-item-next.carousel-item-left,
                #header-carousel .carousel-item-prev.carousel-item-right,
                #header-carousel .carousel-item-next.carousel-item-prev,
                #header-carousel .carousel-item-prev.carousel-item-left {
                    opacity: 0;
                }

                #header-carousel .carousel-control-prev,
                #header-carousel .carousel-control-next {
                    z-index: 2;
                }

                @keyframes fade-in {
                    from {
                        opacity: 0;
                    }

                    to {
                        opacity: 1;
                    }
                }

                .animate-fade-in {
                    animation: fade-in 1s ease-in-out;
                }
            </style>
        </div>
    </div>

    <section id="featured-products">
    <div class="container">
        <h2 style="text-align: center;">Featured Products</h2>
        <div class="row">
            <!-- First featured product box -->
            <div class="col-md-6">
                <div class="product-box" style="background-image: url('assets/img/women-clothes-img.png');">
                    <div class="product-info">
                    <h3>Women's Clothing</h3>
                    <p>Discover the latest fashion trends for women.</p>
                        <p>Under 1M</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>

            <!-- Second featured product box -->
            <div class="col-md-6">
                <div class="product-box" style="background-image: url('assets/img/dress-shirt-img.png');">
                    <div class="product-info">
                    <h3>Trendy Shirts Collection</h3>
                    <p>Explore our collection of trendy shirts.</p>
                        <p>Under 1M</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="car-listings">
    <div class="container">
        <h2 style="text-align: center;">Boutique Sell</h2>
        <div class="row">
            <!-- Boutique clothing listing box 1 -->
            <div class="col-md-2 car-box">
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-12%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Stylish Shirt</h3>
                    <p>
                        <span class="original-price">KSh 1,500.00</span><br>
                        <span class="discounted-price">KSh 1,320.00</span>
                    </p>
                </div>
            </div>

            <!-- Boutique clothing listing box 2 -->
            <div class="col-md-2 car-box" style="margin-left: 20px;">
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-8%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Casual Jeans</h3>
                    <p>
                        <span class="original-price">KSh 1,800.00</span><br>
                        <span class="discounted-price">KSh 1,650.00</span>
                    </p>
                </div>
            </div>

            <!-- Boutique clothing listing box 3 -->
            <div class="col-md-2 car-box" style="margin-left: 20px;">
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-15%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Elegant Dress</h3>
                    <p>
                        <span class="original-price">KSh 2,200.00</span><br>
                        <span class="discounted-price">KSh 1,870.00</span>
                    </p>
                </div>
            </div>

            <!-- Boutique clothing listing box 4 -->
            <div class="col-md-2 car-box" style="margin-left: 20px;">
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-10%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Fashionable Skirt</h3>
                    <p>
                        <span class="original-price">KSh 1,800.00</span><br>
                        <span class="discounted-price">KSh 1,620.00</span>
                    </p>
                </div>
            </div>

            <!-- Boutique clothing listing box 5 -->
            <div class="col-md-2 car-box" style="margin-left: 20px;">
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-18%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Formal Blazer</h3>
                    <p>
                        <span class="original-price">KSh 2,500.00</span><br>
                        <span class="discounted-price">KSh 2,050.00</span>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="car-listings">
    <div class="container">
        <div class="row">
            <!-- Boutique clothing listing box 1 -->
            <div class="col-md-2 car-box">
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-12%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Stylish Shirt</h3>
                    <p>
                        <span class="original-price">KSh 1,500.00</span><br>
                        <span class="discounted-price">KSh 1,320.00</span>
                    </p>
                </div>
            </div>

            <!-- Boutique clothing listing box 2 -->
            <div class="col-md-2 car-box" style="margin-left: 20px;">
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-8%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Casual Jeans</h3>
                    <p>
                        <span class="original-price">KSh 1,800.00</span><br>
                        <span class="discounted-price">KSh 1,650.00</span>
                    </p>
                </div>
            </div>

            <!-- Boutique clothing listing box 3 -->
            <div class="col-md-2 car-box" style="margin-left: 20px;">
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-15%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Elegant Dress</h3>
                    <p>
                        <span class="original-price">KSh 2,200.00</span><br>
                        <span class="discounted-price">KSh 1,870.00</span>
                    </p>
                </div>
            </div>

            <!-- Boutique clothing listing box 4 -->
            <div class="col-md-2 car-box" style="margin-left: 20px;">
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-10%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Fashionable Skirt</h3>
                    <p>
                        <span class="original-price">KSh 1,800.00</span><br>
                        <span class="discounted-price">KSh 1,620.00</span>
                    </p>
                </div>
            </div>

            <!-- Boutique clothing listing box 5 -->
            <div class="col-md-2 car-box" style="margin-left: 20px;">
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-18%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Formal Blazer</h3>
                    <p>
                        <span class="original-price">KSh 2,500.00</span><br>
                        <span class="discounted-price">KSh 2,050.00</span>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<style>
    #load-more-button {
        background: none;
        border: none;
        color: #333; 
        font-size: 16px;
        cursor: pointer;
        padding: 0;
        position: relative;
        text-align: center; 
        margin-top: 20px; 
    }

    #load-more-button:before, #load-more-button:after {
        content: "";
        position: absolute;
        background-color: #333; 
        height: 2px;
        width: 70px; 
        top: -10px; 
    }

    #load-more-button:after {
        top: 100%; 
    }

    #load-more-button-wrapper {
        text-align: center; /* Center the button */
    }
</style>
<!-- Load more button -------------------------------- -->
<section id="car-listings">
    <div class="container">
        <div class="row">
            <!-- your existing clothing listing boxes with display: none -->
            <div class="col-md-2 car-box" style="margin-top: 20px; display: none;">
                <!-- ... rest of the content ... -->
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-18%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Formal Blazer</h3>
                    <p>
                        <span class="original-price">KSh 2,500.00</span><br>
                        <span class="discounted-price">KSh 2,050.00</span>
                    </p>
                </div>
                
            </div>
            <div class="col-md-2 car-box" style="margin-top: 20px; display: none;">
                <!-- ... rest of the content ... -->
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-18%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Formal Blazer</h3>
                    <p>
                        <span class="original-price">KSh 2,500.00</span><br>
                        <span class="discounted-price">KSh 2,050.00</span>
                    </p>
                </div>
                
            </div>
            <div class="col-md-2 car-box" style="margin-top: 20px; display: none;">
                <!-- ... rest of the content ... -->
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-18%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Formal Blazer</h3>
                    <p>
                        <span class="original-price">KSh 2,500.00</span><br>
                        <span class="discounted-price">KSh 2,050.00</span>
                    </p>
                </div>
                
            </div> <div class="col-md-2 car-box" style="margin-top: 20px; display: none;">
                <!-- ... rest of the content ... -->
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-18%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Formal Blazer</h3>
                    <p>
                        <span class="original-price">KSh 2,500.00</span><br>
                        <span class="discounted-price">KSh 2,050.00</span>
                    </p>
                </div>
                
            </div> <div class="col-md-2 car-box" style="margin-top: 20px; display: none;">
                <!-- ... rest of the content ... -->
                <div class="car-info">
                    <img src="assets\img\dress-shirt-img.png" alt="Clothing Image">
                    <span class="discount">-18%</span>
                    <div class="icons">
                        <i class="far fa-heart" data-tooltip="Wishlist"></i>
                        <i class="fas fa-shopping-cart" data-tooltip="Add to Cart"></i>
                        <i class="fas fa-exchange-alt" data-tooltip="Compare"></i>
                        <i class="far fa-eye" data-tooltip="View"></i>
                    </div>
                    <h3>Formal Blazer</h3>
                    <p>
                        <span class="original-price">KSh 2,500.00</span><br>
                        <span class="discounted-price">KSh 2,050.00</span>
                    </p>
                </div>
                
            </div>
            
            <!-- Add more clothing boxes as needed -->
        </div>
        
    </div>
</section>

<div id="load-more-button-wrapper">
    <button id="load-more-button" onclick="loadMore()">Load More...</button>
</div>
<script>
    //to show 5 by 5 when clicked
    function loadMore() {
        //get all the hidden clothing boxes
        var hiddenClothingBoxes = document.querySelectorAll('#car-listings .car-box[style*="display: none"]');
        //loop through the first 5 hidden clothing boxes
        for (var i = 0; i < 5; i++) {
            //if there are no more hidden clothing boxes, exit the loop
            if (!hiddenClothingBoxes[i]) {
                break;
            }
            //show the clothing box
            hiddenClothingBoxes[i].style.display = 'block';
        }
    }
</script>


<style>
    .original-price {
    text-decoration: line-through;
    color: red;
}

#car-listings .car-box:first-child {
    margin-left: 50px;
}

    .icons i[data-tooltip] {
    position: relative;
}

.icons i[data-tooltip]:hover::after {
    content: attr(data-tooltip);
    position: absolute;
    background: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 0.1em;
    border-radius: 0.2em;
    bottom: 125%;
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
}
    .car-box {
    position: relative;
    padding: 15px;
    margin-bottom: 20px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.car-box:hover {
    transform: translateY(-5px);
}

.car-box img {
    width: 100%;
    border-bottom: 1px solid #ccc;
}

.discount {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: #e74c3c;
    color: white;
    padding: 5px;
}

.car-info h3 {
    margin: 10px 0;
    font-size: 1.1em;
}

.car-info p {
    margin: 0;
}

.icons {
    position: absolute;
    top: 80%; /* Adjust the top position to position the icons lower */
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    background-color: rgba(0, 0, 0, 0.7);
    border-radius: 5px;
    padding: 10px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    box-sizing: border-box;
}

.car-box:hover .icons {
    opacity: 1;
    top: 61%; /* Adjust the top position on hover */
}


.car-box:hover .icons {
    opacity: 1;
}
.icons i {
    color: white;
    font-size: 1.2em;
}

.product-box {
    position: relative;
    height: 300px; /* Adjust the height as needed */
    background-size: cover;
    background-position: center;
    transition: transform 0.3s ease-in-out;
    background-size: contain;
    background-repeat: no-repeat;
    background-color: #f9f9f9;
}


.product-info {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.product-info h3 {
    margin-bottom: 10px;
}
.product-info h3 {
    margin-bottom: 10px;
    font-size: 24px; 
    color: red;
}

.product-info p {
    font-size: 16px; 
    margin-bottom: 10px;
    color: black;
font-weight: bold;
}

</style>
    

    <!-- Add this script at the end of your HTML file -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        // Automatically advance the carousel every 3 seconds
        $(document).ready(function() {
            $('#header-carousel').carousel({
                interval: 3000 // Adjust this interval as needed (in milliseconds)
            });
        });
    </script>


    <!-- Footer -->
    <?php include 'include/footer.php'; ?>

    <div class="back-to-top" id="backToTop">
        <i class="fa fa-arrow-up"></i>
    </div>
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script>
    const banner = document.getElementById('banner');
    const images = ['assets/img/Kenyan-House-2.webp', 'assets/img/hero.jpg', 'assets/img/maxresdefault.jpg'];
    let currentIndex = 1;

    function changeBackgroundImage() {
        banner.style.backgroundImage = `url('${images[currentIndex]}')`;
        currentIndex = (currentIndex + 1) % images.length;
    }

    setInterval(changeBackgroundImage, 5000);

    window.addEventListener('load', () => {
        banner.style.backgroundImage = `url('${images[0]}')`;
    });

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function toggleBackToTopButton() {
        const backToTopButton = document.getElementById('backToTop');
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    }

    // Attach the function to the scroll event
    window.addEventListener('scroll', toggleBackToTopButton);
    document.getElementById('backToTop').addEventListener('click', scrollToTop);
</script>

</html>
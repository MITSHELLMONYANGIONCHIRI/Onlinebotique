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


                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!--search icon for clothes --->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="width: 900px;" class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search for clothes" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                        <i class="fas fa-search"></i></i> <!-- Adjust the font-size as needed -->
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
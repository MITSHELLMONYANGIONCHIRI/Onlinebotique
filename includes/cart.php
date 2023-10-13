<!DOCTYPE html>
<html class="no-js" lang="en">


<link rel="stylesheet" href="assets/mitshell/css/main.css">
<link rel="stylesheet" href="assets/mitshell/css/custom.css">
</head>

<body>


    <main class="main">


        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab" data-bs-target="#tab-four" type="button" role="tab" aria-controls="tab-four" aria-selected="false">Coming soon</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-five" data-bs-toggle="tab" data-bs-target="#tab-five" type="button" role="tab" aria-controls="tab-five" aria-selected="false">Flash sales!</button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-1-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-1-2.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product1')" id="wishlist-button-product1"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <style>
                                            .product-action-1 {
                                                display: flex;
                                                justify-content: center;
                                            }

                                            .product-action-1 .action-btn {
                                                margin: 0 10px;
                                            }

                                            .product-action-1 .action-btn i {
                                                font-size: 24px;
                                            }
                                        </style>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                    <div style="color: green;" id="add-to-wishlist-message-product1"></div>

                                        <div style="color: red;" id="add-to-cart-message-product1"></div>

                                        <div class="product-category">
                                            <a href="shop.html">Clothing</a>
                                        </div>
                                        <h2><a href="product-details.html">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">

                                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product1', this)"><i class="fi-rs-shopping-bag-add"></i></a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-2-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-2-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product2')" id="wishlist-button-product2"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                    <div style="color: green;" id="add-to-wishlist-message-product2"></div>

                                        <div style="color: red;" id="add-to-cart-message-product2"></div>

                                        <div class="product-category">
                                            <a href="shop.html">Clothing</a>
                                        </div>
                                        <h2><a href="product-details.html">Plain Color Pocket Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh138.85 </span>
                                            <span class="old-price">Ksh255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product2', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <script src="assets/js/cart.js"></script>

                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-3-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-3-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product3')" id="wishlist-button-product3"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                    <div style="color: green;" id="add-to-wishlist-message-product3"></div>

                                        <div style="color: red;" id="add-to-cart-message-product3"></div>

                                        <div class="product-category">
                                            <a href="shop.html">Shirts</a>
                                        </div>
                                        <h2><a href="product-details.html">Vintage Floral Oil Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh338.85 </span>
                                            <span class="old-price">Ksh445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product3', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-4-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-4-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product4')" id="wishlist-button-product4"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                    <div style="color: green;" id="add-to-wishlist-message-product4"></div>

                                        <div style="color: red;" id="add-to-cart-message-product4"></div>

                                        <div class="product-category">
                                            <a href="shop.html">Clothing</a>
                                        </div>
                                        <h2><a href="product-details.html">Colorful Hawaiian Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh123.85 </span>
                                            <span class="old-price">Ksh235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product4', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-xs-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-5-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-5-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product5')" id="wishlist-button-product5"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                    <div style="color: green;" id="add-to-wishlist-message-product5"></div>

                                        <div style="color: red;" id="add-to-cart-message-product5"></div>

                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Flowers Sleeve Lapel Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh280 </span>
                                            <span class="old-price">Ksh450</span>
                                        </div>
                                        <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product5', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-xs-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-6-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-6-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product6')" id="wishlist-button-product6"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                    <div style="color: green;" id="add-to-wishlist-message-product6"></div>

                                        <div style="color: red;" id="add-to-cart-message-product6"></div>

                                        <div class="product-category">
                                            <a href="shop.html">Shirts</a>
                                        </div>
                                        <h2><a href="product-details.html">Ethnic Floral Casual Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product6', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-xs-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-7-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-7-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product7')" id="wishlist-button-product7"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                    <div style="color: green;" id="add-to-wishlist-message-product7"></div>

                                        <div style="color: red;" id="add-to-cart-message-product7"></div>

                                        <div class="product-category">
                                            <a href="shop.html">Shoes</a>
                                        </div>
                                        <h2><a href="product-details.html">Stitching Hole Sandals</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product7', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-8-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-8-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product8')" id="wishlist-button-product8"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span style="background-color: red;" class="new">New</span>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div style="color: red;" id="add-to-cart-message-product8"></div>
                                        <div style="color: green;" id="add-to-wishlist-message-product8"></div>


                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Mens Porcelain Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product8', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-9-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-9-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <!-- continue add to wish list  after new rrivals -->
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shoes </a>
                                        </div>
                                        <h2><a href="product-details.html">Casual Canvas Shoes</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh1538.85 </span>
                                            <span class="old-price">Ksh2045.8</span>
                                        </div>
                                        <div class="product-action-1 show"> <!---you added other add to cart in new.php continue the list after new arrivals -->
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-10-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-10-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Dress</a>
                                        </div>
                                        <h2><a href="product-details.html">Classic White Tee</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh1038.85 </span>
                                            <span class="old-price">Ksh2505.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-11-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-11-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Flowy Floral Blouse</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh338.85 </span>
                                            <span class="old-price">Ksh445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-12-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-12-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Trousers</a>
                                        </div>
                                        <h2><a href="product-details.html">Classic Leg Trousers</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh123.85 </span>
                                            <span class="old-price">Ksh235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-13-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-13-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirts</a>
                                        </div>
                                        <h2><a href="product-details.html">Classic White Tee</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh28.85 </span>
                                            <span class="old-price">Ksh45.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-14-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-14-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Bag</a>
                                        </div>
                                        <h2><a href="product-details.html">Crossbody Bag</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-15-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-15-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Heaad Cover</a>
                                        </div>
                                        <h2><a href="product-details.html">Headscarves</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-1-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-1-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span style="background-color: red;" class="new">Hot</span>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Accessories </a>
                                        </div>
                                        <h2><a href="product-details.html">Elegant Clutch</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (Popular)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-2-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-2-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Dapper Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-3-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-3-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html"> Chambray Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh138.85 </span>
                                            <span class="old-price">Ksh255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-4-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-4-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Floral Print Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh338.85 </span>
                                            <span class="old-price">Ksh445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-5-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-5-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Western Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh123.85 </span>
                                            <span class="old-price">Ksh235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-6-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-6-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Western Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh28.85 </span>
                                            <span class="old-price">Ksh45.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-7-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-7-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Footware</a>
                                        </div>
                                        <h2><a href="product-details.html">Sandals</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-8-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-8-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Sweater</a>
                                        </div>
                                        <h2><a href="product-details.html">Knit Sweater</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-9-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-9-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span style="background-color: blue;" class="new">Best</span>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shoes </a>
                                        </div>
                                        <h2><a href="product-details.html"> Shoes</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->

                    <!--En tab four (Popular)-->
                    <div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/coming soon/1.png" alt="">
                                                <img style="wid" class="hover-img" src="assets\mitshell\imgs\shop\coming soon\1a.png" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">coming-soon</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Jackets</a>
                                        </div>
                                        <h2><a href="product-details.html">Puffer Jackets</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh2038.85 </span>
                                            <span class="old-price">Ksh2545.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets\mitshell\imgs\shop\coming soon\2v.avif" alt="">
                                                <img class="default-img" src="assets\mitshell\imgs\shop\coming soon\2.avif" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">coming-soon</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Jackets</a>
                                        </div>
                                        <h2><a href="product-details.html">Summer Cloths</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh138.85 </span>
                                            <span class="old-price">Ksh255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-4-2.jpg" alt="">
                                                <img class="default-img" src="assets\mitshell\imgs\shop\coming soon\3.avif" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">coming-soon</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Sleak Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh338.85 </span>
                                            <span class="old-price">Ksh445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets\mitshell\imgs\shop\coming soon\4b.jpg" alt="">
                                                <img class="default-img" src="assets\mitshell\imgs\shop\coming soon\4.avif" alt="" width="100" height="230">

                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">coming-soon</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Ladies </a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh123.85 </span>
                                            <span class="old-price">Ksh235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-6-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-6-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">coming-soon</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Color Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh328.85 </span>
                                            <span class="old-price">Ksh405.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-7-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-7-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">coming-soon</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Sandal</a>
                                        </div>
                                        <h2><a href="product-details.html">FootWare</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-8-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-8-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">coming-soon</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Sweater</a>
                                        </div>
                                        <h2><a href="product-details.html">Sweater</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-9-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-9-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span style="background-color: red;" class="new">Coming-soon</span>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Accessories </a>
                                        </div>
                                        <h2><a href="product-details.html">Shoes</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->


                    </div>

                    <!--En tab five (Popular)-->
                    <div class="tab-pane fade" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-2-1.jpg" alt="">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-2-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-3-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-3-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Color Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh138.85 </span>
                                            <span class="old-price">Ksh255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-4-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-4-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Watch</a>
                                        </div>
                                        <h2><a href="product-details.html">Western Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh338.85 </span>
                                            <span class="old-price">Ksh445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-5-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-5-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Color Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh123.85 </span>
                                            <span class="old-price">Ksh235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-6-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-6-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shirt</a>
                                        </div>
                                        <h2><a href="product-details.html">Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh328.85 </span>
                                            <span class="old-price">Ksh405.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-7-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-7-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Shoes</a>
                                        </div>
                                        <h2><a href="product-details.html">Shoes</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-8-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-8-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Sweater</a>
                                        </div>
                                        <h2><a href="product-details.html">Top Sweater</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/mitshell/imgs/shop/product-9-1.jpg" alt="">
                                                <img class="default-img" src="assets/mitshell/imgs/shop/product-9-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Accessories </a>
                                        </div>
                                        <h2><a href="product-details.html"> Shoes</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Ksh238.85 </span>
                                            <span class="old-price">Ksh245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                        <!--End tab-content-->
                    </div>
        </section>
        <section style="margin-top: 50px;" class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/mitshell/imgs/banner/banner-1.png" alt="">
                            <div class="banner-text">
                                <span>Smart Offer</span>
                                <h4>Save 20% on <br>Woman Bag</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/mitshell/imgs/banner/banner-2.png" alt="">
                            <div class="banner-text">
                                <span>Sale off</span>
                                <h4>Great Summer <br>Collection</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="assets/mitshell/imgs/banner/banner-3.png" alt="">
                            <div class="banner-text">
                                <span>New Arrivals</span>
                                <h4>Shop Today’s <br>Deals & Offers</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize the carousel with Slick Carousel
        $('#carausel-6-columns-2').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false
        });

        // Stop the carousel movement when the mouse is over the carousel
        $('#carausel-6-columns-2').hover(function() {
            $('#carausel-6-columns-2').slick('slickPause');
        }, function() {
            // Restart the carousel movement when the mouse leaves the carousel
            $('#carausel-6-columns-2').slick('slickPlay');
        });
    });
</script>
<section class="section-padding">
    <div class="container wow fadeIn animated">
        <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
        <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
        <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
            <div class="product-cart-wrap small hover-up">
                <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/mitshell/imgs/shop/product-2-1.jpg" alt="">
                            <img class="hover-img" src="assets/mitshell/imgs/shop/product-2-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-action-1">
                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                        <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product9')" id="wishlist-button-product9"><i class="fi-rs-heart"></i></a>
                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-action-1 show">
                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product9', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>

                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="hot">Hot</span>
                    </div>
                </div>
                <div style="color: red;" id="add-to-cart-message-product9">
                <div style="color: green;" id="add-to-wishlist-message-product9"></div></div>

                <div class="product-content-wrap">
                    <h2><a href="product-details.html">Colorful shirt</a></h2>
                    <div class="rating-result" title="90%">
                        <span>90%</span>

                    </div>
                    <div class="product-price">
                        <span>Ksh 450 </span>
                        <span class="old-price">Ksh 500</span>
                    </div>

                </div>


            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
                <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/mitshell/imgs/shop/product-4-1.jpg" alt="">
                            <img class="hover-img" src="assets/mitshell/imgs/shop/product-4-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-action-1">
                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                        <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product10')" id="wishlist-button-product10"><i class="fi-rs-heart"></i></a>
                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-action-1 show">
                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product10', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="new">New</span>
                    </div>



                </div>
                <div style="color: red;" id="add-to-cart-message-product10"></div>
                <div style="color: green;" id="add-to-wishlist-message-product10"></div>
                <div class="product-content-wrap">
                    <h2><a href="product-details.html">Pattern Shirt</a></h2>
                    <div class="rating-result" title="93%">
                        <span>93%</span>
                    </div>
                    <div class="product-price">
                        <span>Ksh 700 </span>
                        <span class="old-price">Ksh 600</span>
                    </div>
                </div>
            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
                <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/mitshell/imgs/shop/product-15-1.jpg" alt="">
                            <img class="hover-img" src="assets/mitshell/imgs/shop/product-15-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-action-1">
                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                        <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product11')" id="wishlist-button-product11"><i class="fi-rs-heart"></i></a>
                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-action-1 show">
                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product11', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="sale">Sale</span>
                    </div>



                </div>
                <div style="color: red;" id="add-to-cart-message-product11"></div>
                <div style="color: green;" id="add-to-wishlist-message-product11"></div>
                <div class="product-content-wrap">
                    <h2><a href="product-details.html">Head cover</a></h2>
                    <div class="rating-result" title="90%">
                        <span>92%</span>
                    </div>
                    <div class="product-price">
                        <span>Ksh 400 </span>
                        <span class="old-price">Ksh 450</span>
                    </div>
                </div>
            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
                <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/mitshell/imgs/shop/product-3-1.jpg" alt="">
                            <img class="hover-img" src="assets/mitshell/imgs/shop/product-3-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-action-1">
                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                        <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product12')" id="wishlist-button-product12"><i class="fi-rs-heart"></i></a>
                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-action-1 show">
                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product12', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="hot">88%</span>
                    </div>



                </div>
                <div style="color: red;" id="add-to-cart-message-product12"></div>
                <div style="color: green;" id="add-to-wishlist-message-product12"></div>
                <div class="product-content-wrap">
                    <h2><a href="product-details.html">Western color</a></h2>
                    <div class="rating-result" title="80%">
                        <span>88%</span>
                    </div>
                    <div class="product-price">
                        <span>Ksh 350 </span>
                        <span class="old-price">Ksh 400</span>
                    </div>
                </div>
            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
                <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/mitshell/imgs/shop/product-9-1.jpg" alt="">
                            <img class="hover-img" src="assets/mitshell/imgs/shop/product-9-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-action-1">
                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                        <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product13')" id="wishlist-button-product13"><i class="fi-rs-heart"></i></a>
                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-action-1 show">
                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product13', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="hot">-25%</span>
                    </div>



                </div>
                <div style="color: red;" id="add-to-cart-message-product13"></div>
                <div style="color: green;" id="add-to-wishlist-message-product13"></div>
                <div class="product-content-wrap">
                    <h2><a href="product-details.html">Flex Shoes</a></h2>
                    <div class="rating-result" title="90%">
                        <span>98%</span>
                    </div>
                    <div class="product-price">
                        <span>Ksh 2500 </span>
                        <span class="old-price">Ksh 2700</span>
                    </div>
                </div>
            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
                <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/mitshell/imgs/shop/product-7-1.jpg" alt="">
                            <img class="hover-img" src="assets/mitshell/imgs/shop/product-7-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-action-1">
                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                        <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product14')" id="wishlist-button-product14"><i class="fi-rs-heart"></i></a>
                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-action-1 show">
                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product14', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="new">New</span>
                    </div>



                </div>
                <div style="color: red;" id="add-to-cart-message-product14"></div>
                <div style="color: green;" id="add-to-wishlist-message-product14"></div>
                <div class="product-content-wrap">
                    <h2><a href="product-details.html">Sandals</a></h2>
                    <div class="rating-result" title="90%">
                        <span>70%</span>
                    </div>
                    <div class="product-price">
                        <span>Ksh 300 </span>
                        <span class="old-price">Ksh 350</span>
                    </div>
                </div>
            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
                <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/mitshell/imgs/shop/product-1-1.jpg" alt="">
                            <img class="hover-img" src="assets/mitshell/imgs/shop/product-1-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-action-1">
                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                        <a aria-label="Add To Wishlist" class="action-btn hover-up" onclick="addToWishlist('product15')" id="wishlist-button-product15"><i class="fi-rs-heart"></i></a>
                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-action-1 show">
                        <a aria-label="Add To Cart" class="action-btn hover-up" onclick="addToCart('product15', this)"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                    <span style="background-color:red" class="new">Hot</span>
                </div>
                <div style="color: red;" id="add-to-cart-message-product15"></div>
                <div style="color: green;" id="add-to-wishlist-message-product15"></div>


                <div class="product-content-wrap">
                    <h2><a href="product-details.html"> Sleek Shirt</a></h2>
                    <div class="rating-result" title="90%">
                        <span>98%</span>
                    </div>
                    <div class="product-price">
                        <span>Ksh 400 </span>
                        <span class="old-price">Ksh 430</span>
                    </div>
                </div>
            </div>
            <!--End product-cart-wrap-2-->
        </div>
    </div>

    </div>

</section>

        <section class="section-padding">
            <section class="section-padding">
                <div class="container">
                    <h3 class="section-title mb-20 wow fadeIn animated"><span>Featured</span> Brands</h3>
                    <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                        <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                            <div class="brand-logo">
                                <img class="img-grey-hover" src="assets/mitshell/imgs/banner/naivas.png" alt="">
                            </div>
                            <div class="brand-logo">
                                <img class="img-grey-hover" src="assets/mitshell/imgs/banner/jimuia.png" alt="">
                            </div>
                            <div class="brand-logo">
                                <img class="img-grey-hover" src="assets/mitshell/imgs/banner/Shopify.png" alt="">
                            </div>
                            <div class="brand-logo">
                                <img class="img-grey-hover" src="assets/mitshell/imgs/banner/quickmart.png" alt="">
                            </div>
                            <div style="margin-top: 20px;" class="brand-logo">
                                <img class="img-grey-hover" src="assets/mitshell/imgs/banner/kilmall.png" alt="">
                            </div>
                            <div class="brand-logo">
                                <img class="img-grey-hover" src="assets/mitshell/imgs/banner/poshmark.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <style>
                .carausel-6-columns {
                    display: flex;
                    flex-wrap: nowrap;
                    overflow-x: auto;
                    scroll-behavior: smooth;
                    -webkit-overflow-scrolling: touch;
                }

                .brand-logo {
                    padding: 10px;
                }

                .brand-logo img {
                    max-width: 100%;
                }

                .carausel-6-columns-cover {
                    height: 100px;

                }
            </style>
    </main>
    <!--End page-content-->
</body>

</html>
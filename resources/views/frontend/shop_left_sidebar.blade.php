@extends('layouts.frontend_master')

@section('content')
     <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="{{asset('frontend')}}/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Women's Elizabeth Coat</a>
                            <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{asset('frontend')}}/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Long sleeve knee length</a>
                            <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{asset('frontend')}}/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Cool Man Wearing Leather</a>
                            <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="{{asset('frontend')}}/images/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Women's Elizabeth Coat</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{asset('frontend')}}/images/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Long sleeve knee length</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{asset('frontend')}}/images/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Cool Man Wearing Leather</a>
                            <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>

        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li class="title"><a href="#">Shop Page</a></li>
                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Product Single</a></li>
                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                    <li><a href="single-product-group.html">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                    </li>
                                    <li><a href="single-product-gallery-right.html">Product Gallery Right</a>
                                    </li>
                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->


    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Shop</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <p><span>12</span> Product Found of <span>30</span></p>
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </a>
                            <a href="#shop-list" data-bs-toggle="tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="shop-select">
                                <select class="shop-sort">
                                    <option data-display="Relevance">Relevance</option>
                                    <option value="1"> Name, A to Z</option>
                                    <option value="2"> Name, Z to A</option>
                                    <option value="3"> Price, low to high</option>
                                    <option value="4"> Price, high to low</option>
                                </select>

                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{asset('frontend')}}/images/product-image/1.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('frontend')}}/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-search"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="400">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{asset('frontend')}}/images/product-image/2.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('frontend')}}/images/product-image/2.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="sale">-10%</span>
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-search"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 80%"></span>
                                                            </span>
                                                            <span class="rating-num">( 4 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Ardene
                                                                Microfiber
                                                                Tights</a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                            <span class="old">$48.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="600">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{asset('frontend')}}/images/product-image/3.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('frontend')}}/images/product-image/3.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="sale">-7%</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-search"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 0%"></span>
                                                            </span>
                                                            <span class="rating-num">( 0 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Women's Long
                                                                Sleeve
                                                                Shirts</a></h5>
                                                        <span class="price">
                                                            <span class="new">$30.50</span>
                                                            <span class="old">$38.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{asset('frontend')}}/images/product-image/4.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('frontend')}}/images/product-image/4.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">Sale</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-search"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 70%"></span>
                                                            </span>
                                                            <span class="rating-num">( 3.5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Parrera
                                                                Sunglasses -
                                                                Lomashop</a></h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{asset('frontend')}}/images/product-image/5.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('frontend')}}/images/product-image/5.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="sale">-5%</span>
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-search"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Cool Man
                                                                Wearing
                                                                Leather</a></h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                            <span class="old">$40.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  mb-30px" data-aos="fade-up"
                                                data-aos-delay="400">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{asset('frontend')}}/images/product-image/6.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('frontend')}}/images/product-image/6.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-search"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Portrait Of A
                                                                Young
                                                                Stylish</a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="600">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{asset('frontend')}}/images/product-image/7.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('frontend')}}/images/product-image/7.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-search"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 80%"></span>
                                                            </span>
                                                            <span class="rating-num">( 4 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Men's Fashion
                                                                Leather
                                                                Bag</a></h5>
                                                        <span class="price">
                                                            <span class="new">$30.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{asset('frontend')}}/images/product-image/8.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('frontend')}}/images/product-image/8.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">Sale</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-search"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 60%"></span>
                                                            </span>
                                                            <span class="rating-num">( 3 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Long sleeve
                                                                knee
                                                                length</a></h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{asset('frontend')}}/images/product-image/9.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('frontend')}}/images/product-image/9.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">Sale</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-search"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 60%"></span>
                                                            </span>
                                                            <span class="rating-num">( 3 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Long sleeve
                                                                knee
                                                                length</a></h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="shop-list">
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="{{asset('frontend')}}/images/product-image/1.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('frontend')}}/images/product-image/1.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="new">New</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num">( 5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Women's
                                                                    Elizabeth Coat</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="{{asset('frontend')}}/images/product-image/2.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('frontend')}}/images/product-image/2.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                <span class="new">New</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 80%"></span>
                                                                </span>
                                                                <span class="rating-num">( 4 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Ardene
                                                                    Microfiber
                                                                    Tights</a>
                                                            </h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$48.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="{{asset('frontend')}}/images/product-image/3.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('frontend')}}/images/product-image/3.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="sale">-7%</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 0%"></span>
                                                                </span>
                                                                <span class="rating-num">( 0 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Women's
                                                                    Long
                                                                    Sleeve
                                                                    Shirts</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$45.00</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="{{asset('frontend')}}/images/product-image/4.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('frontend')}}/images/product-image/4.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="new">Sale</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 70%"></span>
                                                                </span>
                                                                <span class="rating-num">( 3.5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Parrera
                                                                    Sunglasses -
                                                                    Lomashop</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="{{asset('frontend')}}/images/product-image/5.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('frontend')}}/images/product-image/5.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="sale">-5%</span>
                                                                <span class="new">New</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num">( 5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Cool Man
                                                                    Wearing
                                                                    Leather</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$45.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="{{asset('frontend')}}/images/product-image/6.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('frontend')}}/images/product-image/6.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num">( 5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Portrait
                                                                    Of A
                                                                    Young
                                                                    Stylish</a>
                                                                <p>More room to move.With 80GB or 160GB of storage and
                                                                    up to
                                                                    40 hours of battery life, the new iPod classic lets
                                                                    you
                                                                    enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="{{asset('frontend')}}/images/product-image/7.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('frontend')}}/images/product-image/7.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 80%"></span>
                                                                </span>
                                                                <span class="rating-num">( 4 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Men's
                                                                    Fashion
                                                                    Leather
                                                                    Bag</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="{{asset('frontend')}}/images/product-image/8.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('frontend')}}/images/product-image/8.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="new">Sale</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 60%"></span>
                                                                </span>
                                                                <span class="rating-num">( 3 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Long
                                                                    sleeve
                                                                    knee
                                                                    length</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="{{asset('frontend')}}/images/product-image/9.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('frontend')}}/images/product-image/9.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="new">Sale</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 60%"></span>
                                                                </span>
                                                                <span class="rating-num">( 3 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Ardene
                                                                    Microfiber
                                                                    Tights</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->

                        <!--  Pagination Area Start -->
                        <div class="load-more-items text-center mb-md-60px mb-lm-60px mt-30px0px" data-aos="fade-up">
                            <a href="#" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Load More <i
                                    class="fa fa-refresh ml-15px" aria-hidden="true"></i></a>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget-search">
                            <form id="widgets-searchbox" action="#">
                                <input class="input-field" type="text" placeholder="Search">
                                <button class="widgets-searchbox-btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-8">
                            <h4 class="sidebar-title">Price Filter</h4>
                            <div class="price-filter">
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" class="p-0 h-auto lh-1" name="price"
                                        placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Category</h4>
                            <div class="sidebar-widget-category">
                                <ul>
                                    <li><a href="#" class="selected m-0">Accesasories <span>(6)</span> </a></li>
                                    <li><a href="#" class="">Computer <span>(4)</span> </a></li>
                                    <li><a href="#" class="">Covid-19 <span>(2)</span> </a></li>
                                    <li><a href="#" class="">Electronics <span>(6)</span> </a></li>
                                    <li><a href="#" class="">Frame Sunglasses <span>(12)</span> </a></li>
                                    <li><a href="#" class="">Furniture <span>(7)</span> </a></li>
                                    <li><a href="#" class="">Genuine Leather <span>(9)</span> </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Color</h4>
                            <div class="sidebar-widget-list color">
                                <ul>
                                    <li><a class="active yellow" href="#"></a></li>
                                    <li><a class="black" href="#"></a></li>
                                    <li><a class="red" href="#"></a></li>
                                    <li><a class="pink" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Size</h4>
                            <div class="sidebar-widget-list size">
                                <ul>
                                    <li><a class="active-2 gray" href="#">S</a></li>
                                    <li><a class="gray" href="#">M</a></li>
                                    <li><a class="gray" href="#">L</a></li>
                                    <li><a class="gray" href="#">XL</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget tag">
                            <h4 class="sidebar-title">Tags</h4>
                            <div class="sidebar-widget-tag">
                                <ul>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Organic</a></li>
                                    <li><a href="#">Old Fashion</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Dress</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget-image">
                            <div class="single-banner">
                                <img src="{{asset('frontend')}}/images/banner/2.jpg" alt="">
                                <div class="item-disc">
                                    <h2 class="title">#bestsellers</h2>
                                    <a href="single-product-variable.html" class="shop-link">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->
@endsection

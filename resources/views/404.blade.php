@extends('frontend.layout')
@section('content')
<!-- Start Side Vav -->
<div class="rbt-cart-side-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="title">
                    <h4 class="title mb--0">Your shopping cart</h4>
                </div>
                <div class="rbt-btn-close" id="btn_sideNavClose">
                    <button class="minicart-close-button rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
        </div>
        <nav class="side-nav w-100">
            <ul class="rbt-minicart-wrapper">
                <li class="minicart-item">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="assets/images/product/1.jpg" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <h6 class="title"><a href="single-product.html">Miracle Morning</a></h6>

                        <span class="quantity">1 * <span class="price">$22</span></span>
                    </div>
                    <div class="close-btn">
                        <button class="rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </li>

                <li class="minicart-item">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="assets/images/product/7.jpg" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <h6 class="title"><a href="single-product.html">Happy Strong</a></h6>

                        <span class="quantity">1 * <span class="price">$30</span></span>
                    </div>
                    <div class="close-btn">
                        <button class="rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </li>

                <li class="minicart-item">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="assets/images/product/3.jpg" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <h6 class="title"><a href="single-product.html">Rich Dad Poor Dad</a></h6>

                        <span class="quantity">1 * <span class="price">$50</span></span>
                    </div>
                    <div class="close-btn">
                        <button class="rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </li>

                <li class="minicart-item">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="assets/images/product/4.jpg" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <h6 class="title"><a href="single-product.html">Momentum Theorem</a></h6>

                        <span class="quantity">1 * <span class="price">$50</span></span>
                    </div>
                    <div class="close-btn">
                        <button class="rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="rbt-minicart-footer">
            <hr class="mb--0">
            <div class="rbt-cart-subttotal">
                <p class="subtotal"><strong>Subtotal:</strong></p>
                <p class="price">$121</p>
            </div>
            <hr class="mb--0">
            <div class="rbt-minicart-bottom mt--20">
                <div class="view-cart-btn">
                    <a class="rbt-btn btn-border icon-hover w-100 text-center" href="#">
                        <span class="btn-text">View Cart</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                </div>
                <div class="checkout-btn mt--20">
                    <a class="rbt-btn btn-gradient icon-hover w-100 text-center" href="#">
                        <span class="btn-text">Checkout</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Side Vav -->
<a class="close_side_menu" href="javascript:void(0);"></a>

<div class="rbt-error-area bg-gradient-11 rbt-section-gap">
    <div class="error-area">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-10">
                    <h1 class="title">404!</h1>
                    <h3 class="sub-title">Page not found</h3>
                    <p>The page you were looking for could not be found.</p>
                    <a class="rbt-btn btn-gradient icon-hover" href="index.html">
                        <span class="btn-text">Back To Home</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
@endsection
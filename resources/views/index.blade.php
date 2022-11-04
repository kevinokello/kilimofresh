@extends('layouts.front')
@section('content')
    <main>
        <br>
        <div class="banner">
            <div class="container">
                <div class="slider-container has-scrollbar">
                    <div class="slider-item">
                        <img src="front/assets/images/banner.avif" alt="new fashion summer sale" class="banner-img">
                        <div class="banner-content">
                            <h2 class="banner-title">Stay home & get your daily need's
                            </h2>
                            <p class="banner-text">
                                Start You'r Daily Sopping with
                                <b>Kilimofresh</b>
                            </p>
                            <a href="#" class="banner-btn">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="category">
            <div class="container">
            <div class="blog">

            <div class="container">

                <div class="blog-container has-scrollbar">

                    <div class="blog-card">

                        <a href="#">
                            <img src="front/assets/images/blog-1.jpg"
                                alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300"
                                class="blog-banner">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Fashion</a>
                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="front/assets/images/blog-2.jpg"
                                alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner"
                                width="300">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Clothes</a>
                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="front/assets/images/blog-3.jpg"
                                alt="EBT vendors: Claim Your Share of SNAP Online Revenue." class="blog-banner"
                                width="300">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Shoes</a>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="front/assets/images/blog-4.jpg"
                                alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner"
                                width="300">
                        </a>

                        <div class="blog-content">
                            <a href="#" class="blog-category">Electronics</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
            </div>
        </div>
        <div class="product-container">
            <div class="container">
                <!--
                          - SIDEBAR
                        -->

                <div class="product-box">
                    <!--
                            - PRODUCT MINIMAL
                          -->
                    <div class="product-minimal">
                        <div class="product-showcase">
                            <h2 class="title">New Arrivals</h2>

                            <div class="showcase-wrapper has-scrollbar">
                                <div class="showcase-container">
                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img src="front/assets/images/products/clothes-1.jpg"
                                                alt="relaxed short full sleeve t-shirt" width="70"
                                                class="showcase-img" />
                                        </a>

                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">
                                                    Relaxed Short full Sleeve T-Shirt
                                                </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Clothes</a>

                                            <div class="price-box">
                                                <p class="price">$45.00</p>
                                                <del>$12.00</del>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="product-showcase">
                            <h2 class="title">Trending</h2>

                            <div class="showcase-wrapper has-scrollbar">
                                <div class="showcase-container">
                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img src="front/assets/images/products/sports-1.jpg"
                                                alt="running & trekking shoes - white" class="showcase-img"
                                                width="70" />
                                        </a>

                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">
                                                    Running & Trekking Shoes - White
                                                </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Sports</a>

                                            <div class="price-box">
                                                <p class="price">$49.00</p>
                                                <del>$15.00</del>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="product-showcase">
                            <h2 class="title">Top Rated</h2>

                            <div class="showcase-wrapper has-scrollbar">
                                <div class="showcase-container">
                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img src="front/assets/images/products/watch-3.jpg"
                                                alt="pocket watch leather pouch" class="showcase-img" width="70" />
                                        </a>

                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">
                                                    Pocket Watch Leather Pouch
                                                </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Watches</a>

                                            <div class="price-box">
                                                <p class="price">$50.00</p>
                                                <del>$34.00</del>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                            - PRODUCT FEATURED
                          -->
                </div>
            </div>
        </div>
    @endsection

@extends('layouts.front')
@section('content')
    <main>
    <div class="product-container">
        <div class="container">
          <div class="sidebar has-scrollbar" data-mobile-menu>
            <br />
            <div class="sidebar-category">
              <div class="sidebar-top">
                <h2 class="sidebar-title">Filter by Location</h2>
                <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                  <ion-icon name="close-outline"></ion-icon>
                </button>
              </div>
              <ul class="sidebar-menu-category-list">
                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <img
                        src="front/assets/images/icons/dress.svg"
                        alt="clothes"
                        width="20"
                        height="20"
                        class="menu-title-img"
                      />

                      <p class="menu-title">Clothes</p>
                    </div>

                    <div>
                      <ion-icon name="add-outline" class="add-icon"></ion-icon>
                      <ion-icon
                        name="remove-outline"
                        class="remove-icon"
                      ></ion-icon>
                    </div>
                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Shirt</p>
                        <data value="300" class="stock" title="Available Stock"
                          >300</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">shorts & jeans</p>
                        <data value="60" class="stock" title="Available Stock"
                          >60</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">jacket</p>
                        <data value="50" class="stock" title="Available Stock"
                          >50</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">dress & frock</p>
                        <data value="87" class="stock" title="Available Stock"
                          >87</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>


              </ul>
            </div>
          </div>

          <div class="product-box">
            <div class="product-main">
              <br />
              <h2 class="title">Available Baskets</h2>
              <div class="product-grid">
                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="front/assets/images/products/jacket-3.jpg"
                      alt="Mens Winter Leathers Jackets"
                      width="300"
                      class="product-img default"
                    />
                    <img
                      src="front/assets/images/products/jacket-4.jpg"
                      alt="Mens Winter Leathers Jackets"
                      width="300"
                      class="product-img hover"
                    />

                    <p class="showcase-badge">15%</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">jacket</a>

                    <a href="#">
                      <h3 class="showcase-title">
                        Mens Winter Leathers Jackets
                      </h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$48.00</p>
                      <del>$75.00</del>
                    </div>
                  </div>
                </div>





                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="front/assets/images/products/shoe-1.jpg"
                      alt="Men's Leather Formal Wear shoes"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="front/assets/images/products/shoe-1_1.jpg"
                      alt="Men's Leather Formal Wear shoes"
                      class="product-img hover"
                      width="300"
                    />

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">formal</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >Men's Leather Formal Wear shoes</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$50.00</p>
                      <del>$65.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="front/assets/images/products/shorts-1.jpg"
                      alt="Better Basics French Terry Sweatshorts"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="front/assets/images/products/shorts-2.jpg"
                      alt="Better Basics French Terry Sweatshorts"
                      class="product-img hover"
                      width="300"
                    />

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">shorts</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >Better Basics French Terry Sweatshorts</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$78.00</p>
                      <del>$85.00</del>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection

@extends('layouts.front')
@section('content')


    <main>
      <!--
      - CATEGORY
    -->

      <!--
      - PRODUCT
    -->

      <div class="product-container">
        <div class="container">
          <!--
          - SIDEBAR
        -->
          <div class="sidebar has-scrollbar" data-mobile-menu>
            <br />
            <div class="sidebar-category">
              <div class="sidebar-top">
                <h2 class="sidebar-title">Categories</h2>
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

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <img
                        src="front/assets/images/icons/shoes.svg"
                        alt="footwear"
                        class="menu-title-img"
                        width="20"
                        height="20"
                      />

                      <p class="menu-title">Footwear</p>
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
                        <p class="product-name">Sports</p>
                        <data value="45" class="stock" title="Available Stock"
                          >45</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Formal</p>
                        <data value="75" class="stock" title="Available Stock"
                          >75</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Casual</p>
                        <data value="35" class="stock" title="Available Stock"
                          >35</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Safety Shoes</p>
                        <data value="26" class="stock" title="Available Stock"
                          >26</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <img
                        src="front/assets/images/icons/jewelry.svg"
                        alt="clothes"
                        class="menu-title-img"
                        width="20"
                        height="20"
                      />

                      <p class="menu-title">Jewelry</p>
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
                        <p class="product-name">Earrings</p>
                        <data value="46" class="stock" title="Available Stock"
                          >46</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Couple Rings</p>
                        <data value="73" class="stock" title="Available Stock"
                          >73</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Necklace</p>
                        <data value="61" class="stock" title="Available Stock"
                          >61</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <img
                        src="front/assets/images/icons/perfume.svg"
                        alt="perfume"
                        class="menu-title-img"
                        width="20"
                        height="20"
                      />

                      <p class="menu-title">Perfume</p>
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
                        <p class="product-name">Clothes Perfume</p>
                        <data value="12" class="stock" title="Available Stock"
                          >12 pcs</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Deodorant</p>
                        <data value="60" class="stock" title="Available Stock"
                          >60 pcs</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">jacket</p>
                        <data value="50" class="stock" title="Available Stock"
                          >50 pcs</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">dress & frock</p>
                        <data value="87" class="stock" title="Available Stock"
                          >87 pcs</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <img
                        src="front/assets/images/icons/cosmetics.svg"
                        alt="cosmetics"
                        class="menu-title-img"
                        width="20"
                        height="20"
                      />

                      <p class="menu-title">Cosmetics</p>
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
                        <p class="product-name">Shampoo</p>
                        <data value="68" class="stock" title="Available Stock"
                          >68</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Sunscreen</p>
                        <data value="46" class="stock" title="Available Stock"
                          >46</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Body Wash</p>
                        <data value="79" class="stock" title="Available Stock"
                          >79</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Makeup Kit</p>
                        <data value="23" class="stock" title="Available Stock"
                          >23</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <img
                        src="front/assets/images/icons/glasses.svg"
                        alt="glasses"
                        class="menu-title-img"
                        width="20"
                        height="20"
                      />

                      <p class="menu-title">Glasses</p>
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
                        <p class="product-name">Sunglasses</p>
                        <data value="50" class="stock" title="Available Stock"
                          >50</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Lenses</p>
                        <data value="48" class="stock" title="Available Stock"
                          >48</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <img
                        src="front/assets/images/icons/bag.svg"
                        alt="bags"
                        class="menu-title-img"
                        width="20"
                        height="20"
                      />

                      <p class="menu-title">Bags</p>
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
                        <p class="product-name">Shopping Bag</p>
                        <data value="62" class="stock" title="Available Stock"
                          >62</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Gym Backpack</p>
                        <data value="35" class="stock" title="Available Stock"
                          >35</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Purse</p>
                        <data value="80" class="stock" title="Available Stock"
                          >80</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Wallet</p>
                        <data value="75" class="stock" title="Available Stock"
                          >75</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>

          <div class="product-box">
            <!--
            - PRODUCT MINIMAL
          -->

            <!--
            - PRODUCT FEATURED
          -->

            <!--
            - PRODUCT GRID
          -->

            <div class="product-main">
              <br />
              <h2 class="title">New Products</h2>
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
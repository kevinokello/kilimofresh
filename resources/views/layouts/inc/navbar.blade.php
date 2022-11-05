   <div class="overlay" data-overlay></div>
   <div class="modal" data-modal style="display: none">
       <div class="modal-close-overlay" data-modal-overlay></div>
       <div class="modal-content">
           <button class="modal-close-btn" data-modal-close>
               <ion-icon name="close-outline"></ion-icon>
           </button>

           <div class="newsletter-img">
               <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400" />
           </div>

           <div class="newsletter">
               <form action="#"></form>
           </div>
       </div>
   </div>

   <!--
    - NOTIFICATION TOAST
  -->

   <div class="notification-toast" data-toast>
       <button class="toast-close-btn" data-toast-close>
           <ion-icon name="close-outline"></ion-icon>
       </button>

       <div class="toast-banner">
           <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70" />
       </div>

       <div class="toast-detail">
           <p class="toast-message">Someone in new just bought</p>

           <p class="toast-title">Rose Gold Earrings</p>

           <p class="toast-meta"><time datetime="PT2M">2 Minutes</time> ago</p>
       </div>
   </div>

   <!--
    - HEADER
  -->

   <header>
       {{-- <div class="header-top">
           <div class="container">
               <ul class="header-social-container"></ul>

               <div class="header-alert-news">
                   <p>
                       <b>Free Shipping</b>
                       This Week Order Over - $55
                   </p>
               </div>

               <div class="header-top-actions"></div>
           </div>
       </div> --}}

       <div class="header-main">

           <div class="container">
               <a href="{{ url('/') }}" class="header-logo">
                   <img src="https://s.alicdn.com/@img/tfs/TB1pDDmmF67gK0jSZPfXXahhFXa-2814-380.png" alt="Anon's logo"
                       width="120" height="36" />
               </a>
               <div class="header-search-container">

                   <input type="search" name="search" class="search-field" placeholder="Where are you located...">

                   <button class="search-btn" style="height:40px;">
                       <ion-icon name="search-outline"></ion-icon>
                   </button>

               </div>

               <div class="header-user-actions">
                   @if (Route::has('login'))
                       @auth
                       @else
                           {{-- <button class="action-btn">
                               <a href="{{ route('register') }}" class="banner-btn">Sell on kilimofresh</a>
                           </button> --}}
                       @endauth
                   @endif
                   <button class="action-btn">
                       <ion-icon name="heart-outline"></ion-icon>
                       <span class="count">0</span>
                   </button>

                   <button class="action-btn">
                       <ion-icon name="bag-handle-outline"></ion-icon>
                       <span class="count">0</span>
                   </button>
                   @if (Route::has('login'))
                       <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                           @auth
                               <button class="action-btn" onclick="window.location.href='{{ url('dashboard') }}'">
                                   <ion-icon name="person-outline"></ion-icon>
                               </button>
                           @else
     <button class="action-btn">
                               <a href="{{ url('login') }}" class="banner-btn">Login</a>
                           </button>


                           @endauth
                       </div>
                   @endif

               </div>
           </div>
       </div>

       <nav class="desktop-navigation-menu" id="navbar">

           <div class="container has-scrollbar">

               <ul class="desktop-menu-category-list">

                   <li class="menu-category">
                       <a href="#" class="menu-title">About</a>
                   </li>
                   <li class="menu-category">
                       <a href="#" class="menu-title">Help Center</a>
                   </li>
                   <li class="menu-category">
                       <a href="#" class="menu-title">Help Center</a>
                   </li>
                   <li class="menu-category">
                       <a href="#" class="menu-title">Help Center</a>
                   </li>
               </ul>

           </div>

       </nav>

       <div class="mobile-bottom-navigation">
           <button class="action-btn" data-mobile-menu-open-btn>
               <ion-icon name="menu-outline"></ion-icon>
           </button>

           <button class="action-btn">
               <ion-icon name="bag-handle-outline"></ion-icon>

               <span class="count">0</span>
           </button>

           <button class="action-btn">
               <ion-icon name="heart-outline"></ion-icon>
               <span class="count">0</span>
           </button>

           <button class="action-btn">
               <ion-icon name="person-outline"></ion-icon>
           </button>

       </div>

       <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

           <div class="menu-top">
               <h2 class="menu-title">Menu</h2>

               <button class="menu-close-btn" data-mobile-menu-close-btn>
                   <ion-icon name="close-outline"></ion-icon>
               </button>
           </div>

           <ul class="mobile-menu-category-list">

               <li class="menu-category">
                   <a href="#" class="menu-title">About</a>
               </li>

               <li class="menu-category">

                   <button class="accordion-menu" data-accordion-btn>
                       <p class="menu-title">Men's</p>

                       <div>
                           <ion-icon name="add-outline" class="add-icon"></ion-icon>
                           <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                       </div>
                   </button>

                   <ul class="submenu-category-list" data-accordion>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Shirt</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Shorts & Jeans</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Safety Shoes</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Wallet</a>
                       </li>

                   </ul>

               </li>

               <li class="menu-category">

                   <button class="accordion-menu" data-accordion-btn>
                       <p class="menu-title">Women's</p>

                       <div>
                           <ion-icon name="add-outline" class="add-icon"></ion-icon>
                           <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                       </div>
                   </button>

                   <ul class="submenu-category-list" data-accordion>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Dress & Frock</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Earrings</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Necklace</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Makeup Kit</a>
                       </li>

                   </ul>

               </li>

               <li class="menu-category">

                   <button class="accordion-menu" data-accordion-btn>
                       <p class="menu-title">Jewelry</p>

                       <div>
                           <ion-icon name="add-outline" class="add-icon"></ion-icon>
                           <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                       </div>
                   </button>

                   <ul class="submenu-category-list" data-accordion>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Earrings</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Couple Rings</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Necklace</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Bracelets</a>
                       </li>

                   </ul>

               </li>

               <li class="menu-category">

                   <button class="accordion-menu" data-accordion-btn>
                       <p class="menu-title">Perfume</p>
                       <div>
                           <ion-icon name="add-outline" class="add-icon"></ion-icon>
                           <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                       </div>
                   </button>

                   <ul class="submenu-category-list" data-accordion>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Clothes Perfume</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Deodorant</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Flower Fragrance</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Air Freshener</a>
                       </li>

                   </ul>

               </li>

               <li class="menu-category">
                   <a href="#" class="menu-title">Help Center</a>
               </li>
           </ul>

       </nav>


       <div class="mobile-bottom-navigation">
           <button class="action-btn" data-mobile-menu-open-btn>
               <ion-icon name="menu-outline"></ion-icon>
           </button>

           <button class="action-btn">
               <ion-icon name="bag-handle-outline"></ion-icon>

               <span class="count">0</span>
           </button>

           <button class="action-btn">
               <ion-icon name="heart-outline"></ion-icon>
               <span class="count">0</span>
           </button>

           <button class="action-btn">
               <ion-icon name="person-outline"></ion-icon>
           </button>

       </div>

       <nav class="mobile-navigation-menu has-scrollbar" data-mobile-menu>
           <div class="menu-top">
               <h2 class="menu-title">Menu</h2>

               <button class="menu-close-btn" data-mobile-menu-close-btn>
                   <ion-icon name="close-outline"></ion-icon>
               </button>
           </div>

           <ul class="mobile-menu-category-list">
               <li class="menu-category">
                   <button class="accordion-menu" data-accordion-btn>
                       <p class="menu-title">Men's</p>

                       <div>
                           <ion-icon name="add-outline" class="add-icon"></ion-icon>
                           <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                       </div>
                   </button>

                   <ul class="submenu-category-list" data-accordion>
                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Shirt</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Shorts & Jeans</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Safety Shoes</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Wallet</a>
                       </li>
                   </ul>
               </li>

               <li class="menu-category">
                   <button class="accordion-menu" data-accordion-btn>
                       <p class="menu-title">Women's</p>

                       <div>
                           <ion-icon name="add-outline" class="add-icon"></ion-icon>
                           <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                       </div>
                   </button>

                   <ul class="submenu-category-list" data-accordion>
                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Dress & Frock</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Earrings</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Necklace</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Makeup Kit</a>
                       </li>
                   </ul>
               </li>

               <li class="menu-category">
                   <button class="accordion-menu" data-accordion-btn>
                       <p class="menu-title">Jewelry</p>

                       <div>
                           <ion-icon name="add-outline" class="add-icon"></ion-icon>
                           <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                       </div>
                   </button>

                   <ul class="submenu-category-list" data-accordion>
                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Earrings</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Couple Rings</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Necklace</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Bracelets</a>
                       </li>
                   </ul>
               </li>

               <li class="menu-category">
                   <button class="accordion-menu" data-accordion-btn>
                       <p class="menu-title">Perfume</p>

                       <div>
                           <ion-icon name="add-outline" class="add-icon"></ion-icon>
                           <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                       </div>
                   </button>

                   <ul class="submenu-category-list" data-accordion>
                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Clothes Perfume</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Deodorant</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Flower Fragrance</a>
                       </li>

                       <li class="submenu-category">
                           <a href="#" class="submenu-title">Air Freshener</a>
                       </li>
                   </ul>
               </li>
 
           </ul>
       </nav>
   </header>

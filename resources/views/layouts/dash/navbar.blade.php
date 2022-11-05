       <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
             <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                 <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                     <i class="bx bx-menu bx-sm"></i>
                 </a>
             </div>

             <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse" >
                 <!-- Search -->
        <button type="button" class="btn btn-primary">Create a shop</button>
                 <!-- /Search -->

                 <ul class="navbar-nav flex-row align-items-center ms-auto">


                     <!-- User -->
                     <li class="nav-item navbar-dropdown dropdown-user dropdown">
                         <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                             data-bs-toggle="dropdown">

              <i class="bx bx-user me-2"></i>
                         </a>
                         <ul class="dropdown-menu dropdown-menu-end">
                             <li>
                                 <div class="dropdown-divider"></div>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#">
                                     <i class="bx bx-user me-2"></i>
                                     <span class="align-middle">My Profile</span>
                                 </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#">
                                     <i class="bx bx-cog me-2"></i>
                                     <span class="align-middle">Settings</span>
                                 </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#">
                                     <span class="d-flex align-items-center align-middle">
                                         <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                         <span class="flex-grow-1 align-middle">Billing</span>
                                         <span
                                             class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                     </span>
                                 </a>
                             </li>
                             <li>
                                 <div class="dropdown-divider"></div>
                             </li>
                             <li>
                                 <form method="POST" action="{{ route('logout') }}">
                                     @csrf
                                     <a class="dropdown-item" :href="route('logout')"
                                         onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                         <i class="bx bx-power-off me-2"></i><span
                                             class="align-middle">{{ __('Log Out') }}</span>
                                     </a>
                                 </form>
                             </li>

                         </ul>
                     </li>
                     <!--/ User -->
                 </ul>
             </div>
         </nav>

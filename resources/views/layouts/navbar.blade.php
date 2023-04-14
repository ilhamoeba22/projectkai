<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                     

                     <ul class="navbar-nav flex-row align-items-center ms-auto">

                         <!-- User -->
                         <li class="nav-item navbar-dropdown dropdown-user dropdown">
                             <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                 data-bs-toggle="dropdown">
                                 <div class="avatar avatar-online">
                                     <img src="{{asset('assets')}}/img/avatars/user.jpg" alt class="w-px-40 h-auto rounded-circle" />
                                 </div>
                             </a>
                             <ul class="dropdown-menu dropdown-menu-end">
                                 <li>
                                     <a class="dropdown-item" href="#">
                                         <div class="d-flex">
                                             <div class="flex-shrink-0 me-3">
                                                 <div class="avatar avatar-online">
                                                     <img src="{{asset('assets')}}/img/avatars/user.jpg" alt
                                                         class="w-px-40 h-auto rounded-circle" />
                                                 </div>
                                             </div>
                                             <div class="flex-grow-1">
                                                 <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                                 <small class="text-muted">{{ Auth::user()->email }}</small>
                                             </div>
                                         </div>
                                     </a>
                                 </li>

                                
                                 <li>
                                     <div class="dropdown-divider"></div>
                                 </li>
                                 <li>

                                     <!-- Authentication -->
                                     <form method="POST" action="{{ route('logout') }}">
                                         @csrf
                                         <x-responsive-nav-link :href="route('logout')" class="dropdown-item"
                                             onclick="event.preventDefault();  this.closest('form').submit();">
                                             <i class="bx bx-power-off me-2"></i>
                                             <span class="align-middle">Keluar</span>
                                         </x-responsive-nav-link>
                                     </form>

                                 </li>
                             </ul>
                         </li>
                         <!--/ User -->
                     </ul>
                 </div>
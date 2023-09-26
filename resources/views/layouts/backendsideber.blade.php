 <nav class="side-nav">
                <a href="index.html" class="intro-x d-flex align-items-center ps-5 pt-4">
                    <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{ asset('backend/dist/images/logo.svg') }}">
                    <span class="d-none d-xl-block text-white fs-lg ms-3"> Ru<span class="fw-medium">bick</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="{{ route('deshboard') }}" class="side-menu {{ request()->routeIs('deshboard') ? 'side-menu--active side-menu--open' : ' ' }}">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                    
                    </li>
                    
                    @can('role status')
                        
                    <li>
                        <a href="javascript:;" class="side-menu {{ request()->routeIs('category.*') ? 'side-menu--active side-menu--open' : ' ' }}">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Category_Management 
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">
                            <li>
                                <a href="{{ route('category.add') }}" class="side-menu {{ request()->routeIs('category.*') ? 'side-menu--active side-menu--open' : ' ' }}">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">Add Category</div>
                                </a>
                            </li>
                          
                        </ul>
                    </li>
                   
                    @endcan

                    <li>
                        <a href="javascript:;" class="side-menu {{ request()->routeIs('product.*') ? 'side-menu--active side-menu--open' : ' ' }}">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Product_Management 
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">
                            <li>
                                <a href="{{ route('product.add') }}" class="side-menu side-menu--active side-menu--open">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">Add Product</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('product.view') }}" class="side-menu side-menu--active side-menu--open">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">View Product</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </nav>
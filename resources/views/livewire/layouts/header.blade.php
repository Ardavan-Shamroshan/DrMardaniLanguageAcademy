{{-- <div> --}}{{--     <h3>The <code>Header</code> livewire component is loaded from the <code>Home</code> module.</h3> --}}{{-- </div> --}}

<!--Mobile navbar-->
<nav class="navbar mobile-navbar no-shadow is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
    <div class="container">
        <!-- Brand -->
        <div class="navbar-brand">
            <!-- Mobile menu toggler icon -->
            <div class="brand-start">
                <div class="navbar-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <a class="navbar-item is-brand mx-4" href="index.html">
                <img class="light-image" src="{{ asset('admin/assets/img/logos/logo/logo.svg') }}" alt="">
                <img class="dark-image" src="{{ asset('admin/assets/img/logos/logo/logo-light.svg') }}" alt="">
            </a>
        </div>
    </div>
</nav>

<!--Mobile sidebar-->
<div class="mobile-main-sidebar">
    <div class="inner">
        <ul class="icon-side-menu">
            <li>
                <a href="/admin-grid-users-1.html" id="layouts-sidebar-menu-mobile">
                    <i data-feather="grid"></i>
                </a>
            </li>
            <li>
                <a href="/elements-hub.html" id="elements-sidebar-menu-mobile">
                    <i data-feather="box"></i>
                </a>
            </li>
            <li>
                <a href="/components-hub.html" id="components-sidebar-menu-mobile">
                    <i data-feather="cpu"></i>
                </a>
            </li>
            <li>
                <a href="/messaging-chat.html" id="open-messages-mobile">
                    <i data-feather="message-circle"></i>
                </a>
            </li>
        </ul>

        <ul class="bottom-icon-side-menu">
            <li>
                <a href="javascript:" class="right-panel-trigger" data-panel="search-panel">
                    <i data-feather="search"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i data-feather="settings"></i>
                </a>
            </li>
        </ul>
    </div>
</div>

<!--Webapp navbar regular-->
<div class="webapp-navbar">
    <div class="webapp-navbar-inner">
        <div class="left">
            <a href="{{ route('admin.dashboard') }}" class="brand">
                <img class="light-image" src="{{ asset('admin/assets/img/logos/logo/logo.svg') }}" alt="" />
                <img class="dark-image" src="{{ asset('admin/assets/img/logos/logo/logo-light.svg') }}" alt="" />
            </a>
            <div class="separator"></div>
            @auth
                <h1 class="subtitle">
                    <span class="tag is-light">{{ auth()->user()->hasRole('admin') ? 'Admin' : 'Member' }}</span> {{ auth()->user()->name }}
                </h1>
            @endauth
        </div>
        <div class="center">
            @auth
                <ul class="navbar-nav">
                    <li class="nav-item">
                        @if (session()->has('browse_session_name') && session('browse_session_name') !== $current_school_session_name)
                            <a class="is-danger is-outlined tag text-danger title" href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-exclamation-diamond-fill me-2"></i> Browsing as Academic Session {{session('browse_session_name')}}
                            </a>
                        @elseif(\Modules\School\Entities\SchoolSession::query()->latest()->count() > 0)
                            <span wire:loading class="loader is-small is-loading"></span>
                            <span class="tag is-round title" href="#" tabindex="-1" aria-disabled="true">
                                Current Academic Session
                                {{ $current_school_session_name }}
                            </span>
                        @else
                            <a class="is-danger is-outlined tag text-danger title" href="" tabindex="-1" aria-disabled="true"><i class="bi bi-exclamation-diamond-fill me-2"></i> Create an Academic Session.</a>
                        @endif
                    </li>
                </ul>
            @endauth
            <div id="webapp-navbar-menu" class="centered-drops">
                <div class="centered-drop">
                    <div class="dropdown ُ">
                        <div class="is-trigger" aria-haspopup="true">
                            <a href="{{ route('admin.dashboard') }}" class="button h-button is-rounded" aria-haspopup="true">
                                <span>Dashboards</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="centered-drop">
                    <div class="dropdown is-modern is-spaced dropdown-trigger has-mega-dropdown is-right">
                        <div class="is-trigger" aria-haspopup="true" aria-controls="dropdown-menu">
                            <button class="button h-button is-rounded" aria-haspopup="true" aria-controls="dropdown-menu">
                                <span>School</span>
                                <span class="caret"><i data-feather="chevron-down"></i></span>
                            </button>
                        </div>
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">

                                <div class="category-selector">
                                    <div class="title-wrap">
                                        <h4>Which one do you want to manage?</h4>
                                    </div>
                                    <div class="category-selector-inner">
                                        <div class="category-item">
                                            <a href="">
                                                <i class="lnil lnil-classroom"></i>
                                                <span>Classes</span>
                                            </a>
                                        </div>
                                        <div data-category="elements-base-menu" class="category-item">
                                            <i class="lnil lnil-users-alt"></i>
                                            <span>Teachers</span>
                                        </div>
                                        <div class="category-item">
                                            <a href="">
                                                <i class="lnil lnil-users-alt"></i>
                                                <span>Students</span>
                                            </a>
                                        </div>

                                        <img class="placeholder-image light-image" src="{{ asset('admin//assets/img/illustrations/components/buttons.svg') }}" alt="" />
                                        <img class="placeholder-image dark-image" src="{{ asset('admin//assets/img/illustrations/components/buttons-dark.svg') }}" alt="" />
                                    </div>
                                </div>

                                <div class="content-wrap is-hidden">

                                    <button class="button is-circle back-button">
                                                <span class="icon is-small">
                                                  <i data-feather="arrow-left"></i>
                                              </span>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="centered-drop">
                    <div class="dropdown">
                        <div class="is-trigger" aria-haspopup="true">
                            <a href="" class="button h-button is-rounded" aria-haspopup="true">
                                <span>Academic</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="centered-button centered-link-search">
                    <button class="button">
                                <span class="icon is-small">
                                  <i data-feather="search"></i>
                              </span>
                    </button>
                </div>
            </div>
            <div id="webapp-navbar-search" class="centered-search is-hidden mx-2">
                <div class="field">
                    <div class="control has-icon">
                        <input type="text" class="input is-rounded search-input" placeholder="Search records...">
                        <div class="form-icon">
                            <i data-feather="search"></i>
                        </div>
                        <div id="webapp-navbar-search-close" class="form-icon is-right">
                            <i data-feather="x"></i>
                        </div>
                        <div class="search-results has-slimscroll"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="toolbar ml-auto">

                <div class="toolbar-link">
                    <label class="dark-mode ml-auto">
                        <input type="checkbox" checked>
                        <span></span>
                    </label>
                </div>

                <a class="toolbar-link right-panel-trigger" data-panel="languages-panel">
                    <img src="{{ asset('admin/assets/img/icons/flags/united-states-of-america.svg') }}" alt="">
                </a>

            </div>

        </div>
    </div>
</div>

<!--Languages panel-->
<div id="languages-panel" class="right-panel-wrapper is-languages">
    <div class="panel-overlay"></div>

    <div class="right-panel">
        <div class="right-panel-head">
            <h3>Select Language</h3>
            <a class="close-panel">
                <i data-feather="chevron-right"></i>
            </a>
        </div>
        <div class="right-panel-body has-slimscroll">
            <div class="languages-boxes">
                <div class="language-box">
                    <div class="language-option">
                        <input type="radio" name="language_selection" checked>
                        <div class="language-option-inner">
                            <img src="{{ asset('admin/assets/img/icons/flags/united-states-of-america.svg') }}" alt="">
                            <div class="indicator">
                                <i data-feather="check"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="language-box">
                    <div class="language-option">
                        <input type="radio" name="language_selection">
                        <div class="language-option-inner">
                            <img src="{{ asset('admin/assets/img/icons/flags/france.svg') }}" alt="">
                            <div class="indicator">
                                <i data-feather="check"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="language-box">
                    <div class="language-option">
                        <input type="radio" name="language_selection">
                        <div class="language-option-inner">
                            <img src="{{ asset('admin/assets/img/icons/flags/spain.svg') }}" alt="">
                            <div class="indicator">
                                <i data-feather="check"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="language-box">
                    <div class="language-option">
                        <input type="radio" name="language_selection">
                        <div class="language-option-inner">
                            <img src="{{ asset('admin/assets/img/icons/flags/germany.svg') }}" alt="">
                            <div class="indicator">
                                <i data-feather="check"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="language-box">
                    <div class="language-option">
                        <input type="radio" name="language_selection">
                        <div class="language-option-inner">
                            <img src="{{ asset('admin/assets/img/icons/flags/mexico.svg') }}" alt="">
                            <div class="indicator">
                                <i data-feather="check"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="language-box">
                    <div class="language-option">
                        <input type="radio" name="language_selection">
                        <div class="language-option-inner">
                            <img src="{{ asset('admin/assets/img/icons/flags/china.svg') }}" alt="">
                            <div class="indicator">
                                <i data-feather="check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img-wrap has-text-centered">
                <img class="light-image" src="{{ asset('admin/assets/img/illustrations/right-panel/languages.svg') }}" alt="">
                <img class="dark-image" src="{{ asset('admin/assets/img/illustrations/right-panel/languages-dark.svg') }}" alt="">
            </div>
        </div>
    </div>
</div>

{{-- <div class="mobile-subsidebar"> --}}{{--     <div class="inner"> --}}{{--         <div class="sidebar-title"> --}}{{--             <h3>Layouts</h3> --}}{{--         </div> --}}

{{--         <ul class="submenu"> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Lists <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-list-view-1.html"> --}}{{--                             <i class="lnil lnil-list-alt"></i> --}}{{--                             <span>List View V1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-list-view-2.html"> --}}{{--                             <i class="lnil lnil-list-alt"></i> --}}{{--                             <span>List View V2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-list-view-3.html"> --}}{{--                             <i class="lnil lnil-list-alt"></i> --}}{{--                             <span>List View V3</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-list-view-4.html"> --}}{{--                             <i class="lnil lnil-list-alt"></i> --}}{{--                             <span>List View V4</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Flex Lists --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-list-flex-1.html"> --}}{{--                             <i class="lnil lnil-list-alt-1"></i> --}}{{--                             <span>Flex List V1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-list-flex-2.html"> --}}{{--                             <i class="lnil lnil-list-alt-1"></i> --}}{{--                             <span>Flex List V2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-list-flex-3.html"> --}}{{--                             <i class="lnil lnil-list-alt-1"></i> --}}{{--                             <span>Flex List V3</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Datatable --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-list-datatable-1.html"> --}}{{--                             <i class="lnil lnil-layout-alt"></i> --}}{{--                             <span>Datatable V1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-list-datatable-2.html"> --}}{{--                             <i class="lnil lnil-layout-alt"></i> --}}{{--                             <span>Datatable V2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-list-datatable-3.html"> --}}{{--                             <i class="lnil lnil-layout-alt"></i> --}}{{--                             <span>Datatable V3</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-list-datatable-4.html"> --}}{{--                             <i class="lnil lnil-layout-alt"></i> --}}{{--                             <span>Datatable V4</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Placeload --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-placeload-1.html"> --}}{{--                             <i class="lnil lnil-reload"></i> --}}{{--                             <span>Placeload V1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-placeload-2.html"> --}}{{--                             <i class="lnil lnil-reload"></i> --}}{{--                             <span>Placeload V2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-placeload-3.html"> --}}{{--                             <i class="lnil lnil-reload"></i> --}}{{--                             <span>Placeload V3</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-placeload-4.html"> --}}{{--                             <i class="lnil lnil-reload"></i> --}}{{--                             <span>Placeload V4</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="divider"></li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Card Grid --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-grid-cards-1.html"> --}}{{--                             <i class="lnil lnil-grid-alt"></i> --}}{{--                             <span>Card Grid V1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-grid-cards-2.html"> --}}{{--                             <i class="lnil lnil-grid-alt"></i> --}}{{--                             <span>Card Grid V2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-grid-cards-3.html"> --}}{{--                             <i class="lnil lnil-grid-alt"></i> --}}{{--                             <span>Card Grid V3</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-grid-cards-4.html"> --}}{{--                             <i class="lnil lnil-grid-alt"></i> --}}{{--                             <span>Card Grid V4</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Tile Grid --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-grid-tiles-1.html"> --}}{{--                             <i class="lnil lnil-layout-alt-2"></i> --}}{{--                             <span>Tile Grid V1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-grid-tiles-2.html"> --}}{{--                             <i class="lnil lnil-layout-alt-2"></i> --}}{{--                             <span>Tile Grid V2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-grid-tiles-3.html"> --}}{{--                             <i class="lnil lnil-layout-alt-2"></i> --}}{{--                             <span>Tile Grid V3</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">User Grid --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-grid-users-1.html"> --}}{{--                             <i class="lnil lnil-users-alt"></i> --}}{{--                             <span>User Grid V1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-grid-users-2.html"> --}}{{--                             <i class="lnil lnil-users-alt"></i> --}}{{--                             <span>User Grid V2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-grid-users-3.html"> --}}{{--                             <i class="lnil lnil-users-alt"></i> --}}{{--                             <span>User Grid V3</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-grid-users-4.html"> --}}{{--                             <i class="lnil lnil-users-alt"></i> --}}{{--                             <span>User Grid V4</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="divider"></li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Personal --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-profile-view.html"> --}}{{--                             <i class="lnil lnil-user-alt"></i> --}}{{--                             <span>Profile</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-profile-edit-1.html"> --}}{{--                             <i class="lnil lnil-pencil"></i> --}}{{--                             <span>Edit Profile</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-profile-notifications.html"> --}}{{--                             <i class="lnil lnil-notification"></i> --}}{{--                             <span>Notifications</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-profile-settings.html"> --}}{{--                             <i class="lnil lnil-cog"></i> --}}{{--                             <span>Settings</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Pages <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/auth-login-1.html"> --}}{{--                             <i class="lnil lnil-pointer-right"></i> --}}{{--                             <span>Login v1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/auth-login-2.html"> --}}{{--                             <i class="lnil lnil-pointer-right"></i> --}}{{--                             <span>Login v2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/auth-login-3.html"> --}}{{--                             <i class="lnil lnil-pointer-right"></i> --}}{{--                             <span>Login v3</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/auth-signup-2.html"> --}}{{--                             <i class="lnil lnil-crown"></i> --}}{{--                             <span>Signup v1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/auth-signup-3.html"> --}}{{--                             <i class="lnil lnil-crown"></i> --}}{{--                             <span>Signup v2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/auth-signup-1.html"> --}}{{--                             <i class="lnil lnil-crown"></i> --}}{{--                             <span>Signup Flow</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-search-results.html"> --}}{{--                             <i class="lnil lnil-search-alt"></i> --}}{{--                             <span>Search Results</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-search-empty.html"> --}}{{--                             <i class="lnil lnil-search-alt"></i> --}}{{--                             <span>Empty Search</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Subpages --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-saas-billing.html"> --}}{{--                             <i class="lnil lnil-credit-card"></i> --}}{{--                             <span>SaaS Billing</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-welcome.html"> --}}{{--                             <i class="lnil lnil-door-alt"></i> --}}{{--                             <span>Welcome</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-action-page-1.html"> --}}{{--                             <i class="lnil lnil-thunderbolt"></i> --}}{{--                             <span>Action Page V1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-action-page-2.html"> --}}{{--                             <i class="lnil lnil-thunderbolt"></i> --}}{{--                             <span>Action Page V2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Projects --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-projects-projects.html"> --}}{{--                             <i class="lnil lnil-grid-alt"></i> --}}{{--                             <span>Projects V1</span> --}}{{--                             <i class="is-auto" data-feather="map-pin"></i> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-projects-projects-2.html"> --}}{{--                             <i class="lnil lnil-grid-alt"></i> --}}{{--                             <span>Projects V2</span> --}}{{--                             <i class="is-auto" data-feather="map-pin"></i> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-projects-projects-3.html"> --}}{{--                             <i class="lnil lnil-grid-alt"></i> --}}{{--                             <span>Projects V3</span> --}}{{--                             <i class="is-auto" data-feather="map-pin"></i> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-projects-project.html"> --}}{{--                             <i class="lnil lnil-layout"></i> --}}{{--                             <span>Project Details</span> --}}{{--                             <i class="is-auto" data-feather="map-pin"></i> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-kanban-board.html"> --}}{{--                             <i class="lnil lnil-layout-alt-1"></i> --}}{{--                             <span>Kanban Board</span> --}}{{--                             <i class="is-auto" data-feather="map-pin"></i> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="divider"></li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Utility --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-utility-account-confirm.html"> --}}{{--                             <i class="lnil lnil-thunderbolt"></i> --}}{{--                             <span>Confirm Account</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-utility-promotion.html"> --}}{{--                             <i class="lnil lnil-magnet"></i> --}}{{--                             <span>Promotion Page</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-utility-invoice.html"> --}}{{--                             <i class="lnil lnil-calculator-alt"></i> --}}{{--                             <span>Invoice</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-utility-status.html"> --}}{{--                             <i class="lnil lnil-checkmark-circle"></i> --}}{{--                             <span>App Status</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Onboarding --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-onboarding-page-1.html"> --}}{{--                             <i class="lnil lnil-train"></i> --}}{{--                             <span>Onboarding V1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-onboarding-page-2.html"> --}}{{--                             <i class="lnil lnil-train-alt"></i> --}}{{--                             <span>Onboarding V2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-onboarding-page-3.html"> --}}{{--                             <i class="lnil lnil-car"></i> --}}{{--                             <span>Onboarding V3</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-onboarding-page-4.html"> --}}{{--                             <i class="lnil lnil-car-alt"></i> --}}{{--                             <span>Onboarding V4</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/admin-onboarding-page-5.html"> --}}{{--                             <i class="lnil lnil-train"></i> --}}{{--                             <span>Onboarding V5</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--             <li class="has-children"> --}}{{--                 <div class="collapse-wrap"> --}}{{--                     <a href="javascript:void(0);" class="parent-link">Error Pages --}}{{--                         <i data-feather="chevron-right"></i></a> --}}{{--                 </div> --}}{{--                 <ul> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/error-page-1.html"> --}}{{--                             <i class="lnil lnil-cross-circle"></i> --}}{{--                             <span>Error 404 V1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/error-page-2.html"> --}}{{--                             <i class="lnil lnil-cross-circle"></i> --}}{{--                             <span>Error 404 V2</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/error-page-3.html"> --}}{{--                             <i class="lnil lnil-cross-circle"></i> --}}{{--                             <span>Error 404 V3</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/error-page-4.html"> --}}{{--                             <i class="lnil lnil-cross-circle"></i> --}}{{--                             <span>Error 404 V4</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                     <li> --}}{{--                         <a class="is-submenu" href="/error-page-5.html"> --}}{{--                             <i class="lnil lnil-cross-circle"></i> --}}{{--                             <span>Error 500 V1</span> --}}{{--                         </a> --}}{{--                     </li> --}}{{--                 </ul> --}}{{--             </li> --}}{{--         </ul> --}}

{{--     </div> --}}{{-- </div> --}}
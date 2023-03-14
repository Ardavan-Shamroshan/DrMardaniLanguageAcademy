<div class="page-title has-text-centered">
    <!-- Sidebar Trigger -->
    <div class="huro-hamburger nav-trigger push-resize" data-sidebar="elements-sidebar">
        <a href="{{ url()->previous() }}">
                <span class="menu-toggle has-chevron">
                <span class="icon-box-toggle active"><span class="rotate">
                        <i class="icon-line-top"></i>
                        <i class="icon-line-center"></i>
                        <i class="icon-line-bottom"></i>
                    </span>
                </span>
            </span>
        </a>
    </div>

    <div class="title-wrap">
        <h1 class="title is-4">Dashboard</h1>
    </div>
</div>

<nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
    <ul>
        <li>
            <a href="{{ route('admin.dashboard') }}"><span class="icon is-small is-solo"><i data-feather="home"></i></span></a>
        </li>
        <li><a class="disable"><span>Admin</span></a></li>
        <li><a class="disable"><span>Dashboard</span></a></li>
    </ul>
</nav>

<!-- Content Wrapper -->
<div id="app-billing" class="view-wrapper" data-naver-offset="214" data-menu-item="#layouts-sidebar-menu" data-mobile-item="#home-sidebar-menu-mobile">
    <div class="page-content-wrapper">
        <div class="page-content is-relative tabs-wrapper is-triple-slider is-squared is-inverted">
            <div class="page-content-inner">
                <!--SaaS Billing-->
                <div class="saas-billing-wrapper">

                    <div class="plans-wrapper">
                        <div class="left">
                            <div class="inner-wrap">
                                <h3>Select the academy section</h3>
                                <div class="plans">
                                    <div class="plan">
                                        <input type="radio" name="plan_selection">
                                        <div class="plan-inner">
                                            <img src="{{ asset('admin/assets/img/logos/logo/logo.svg') }}" alt="">
                                            <div class="meta">
                                                <span>Boys section</span></div>
                                            <div class="checkmark">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="plan">
                                        <input type="radio" name="plan_selection" checked>
                                        <div class="plan-inner">
                                            <img src="{{ asset('admin/assets/img/logos/logo/logo-secondary.svg') }}" alt="">
                                            <div class="meta">
                                                <span>Girls section</span>
                                            </div>
                                            <div class="checkmark">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>


                    <div class="plan-details">
                        <div class="plan-details-inner">
                            <div class="tile-grid tile-grid-v2">

                                <!--Tile Grid v1-->
                                <div class="columns is-multiline">

                                    <!--Grid item-->
                                    <div class="column is-4">
                                        <div class="tile-grid-item">
                                            <div class="tile-grid-item-inner">
                                                <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/files/pdf.svg" alt="">
                                                <div class="meta">
                                                    <span class="dark-inverted">Company UX Guide</span>
                                                    <span>
                                                  <span>4.7 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 2 days ago</span>
                                                </span>
                                                </div>
                                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                    <div class="is-trigger" aria-haspopup="true">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                    <div class="dropdown-menu" role="menu">
                                                        <div class="dropdown-content">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-download"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Download</span>
                                                                    <span>Download this file</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-upload"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Upload</span>
                                                                    <span>Upload a new version</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-lock"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Permissions</span>
                                                                    <span>Manage file permissions</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-share"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Share</span>
                                                                    <span>Share this file</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Delete</span>
                                                                    <span>Delete this file</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Grid item-->
                                    <div class="column is-4">
                                        <div class="tile-grid-item">
                                            <div class="tile-grid-item-inner">
                                                <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/files/sheet.svg" alt="">
                                                <div class="meta">
                                                    <span class="dark-inverted">Tech Summit Expenses</span>
                                                    <span>
                                                  <span>34 KB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 1 week ago</span>
                                                </span>
                                                </div>
                                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                    <div class="is-trigger" aria-haspopup="true">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                    <div class="dropdown-menu" role="menu">
                                                        <div class="dropdown-content">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-download"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Download</span>
                                                                    <span>Download this file</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-upload"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Upload</span>
                                                                    <span>Upload a new version</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-lock"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Permissions</span>
                                                                    <span>Manage file permissions</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-share"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Share</span>
                                                                    <span>Share this file</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Delete</span>
                                                                    <span>Delete this file</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Grid item-->
                                    <div class="column is-4">
                                        <div class="tile-grid-item">
                                            <div class="tile-grid-item-inner">
                                                <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/files/doc-2.svg" alt="">
                                                <div class="meta">
                                                    <span class="dark-inverted">Project Outline</span>
                                                    <span>
                                                  <span>77 KB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 2 weeks ago</span>
                                                </span>
                                                </div>
                                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                    <div class="is-trigger" aria-haspopup="true">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                    <div class="dropdown-menu" role="menu">
                                                        <div class="dropdown-content">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-download"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Download</span>
                                                                    <span>Download this file</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-upload"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Upload</span>
                                                                    <span>Upload a new version</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-lock"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Permissions</span>
                                                                    <span>Manage file permissions</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-share"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Share</span>
                                                                    <span>Share this file</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Delete</span>
                                                                    <span>Delete this file</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Grid item-->
                                    <div class="column is-4">
                                        <div class="tile-grid-item">
                                            <div class="tile-grid-item-inner">
                                                <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/files/ppt.svg" alt="">
                                                <div class="meta">
                                                    <span class="dark-inverted">UX Presentation</span>
                                                    <span>
                                                  <span>2.3 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 4 days ago</span>
                                                </span>
                                                </div>
                                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                    <div class="is-trigger" aria-haspopup="true">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                    <div class="dropdown-menu" role="menu">
                                                        <div class="dropdown-content">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-download"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Download</span>
                                                                    <span>Download this file</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-upload"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Upload</span>
                                                                    <span>Upload a new version</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-lock"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Permissions</span>
                                                                    <span>Manage file permissions</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-share"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Share</span>
                                                                    <span>Share this file</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Delete</span>
                                                                    <span>Delete this file</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Grid item-->
                                    <div class="column is-4">
                                        <div class="tile-grid-item">
                                            <div class="tile-grid-item-inner">
                                                <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/files/ai.svg" alt="">
                                                <div class="meta">
                                                    <span class="dark-inverted">Website Homepage Redesign</span>
                                                    <span>
                                                  <span>4.8 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 3 hours ago</span>
                                                </span>
                                                </div>
                                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                    <div class="is-trigger" aria-haspopup="true">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                    <div class="dropdown-menu" role="menu">
                                                        <div class="dropdown-content">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-download"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Download</span>
                                                                    <span>Download this file</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-upload"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Upload</span>
                                                                    <span>Upload a new version</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-lock"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Permissions</span>
                                                                    <span>Manage file permissions</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-share"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Share</span>
                                                                    <span>Share this file</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Delete</span>
                                                                    <span>Delete this file</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Grid item-->
                                    <div class="column is-4">
                                        <div class="tile-grid-item">
                                            <div class="tile-grid-item-inner">
                                                <img src="{{ asset('admin/assets/img/icons/files/doc-2.svg') }}" data-demo-src="{{ asset('admin/assets/img/icons/files/doc-2.svg') }}" alt="">
                                                <div class="meta">
                                                    <span class="dark-inverted">UX Ramp Up for Interns</span>
                                                    <span>
                                                  <span>1.8 MB</span>
                                                <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                                                <span>Updated 6 hours ago</span>
                                                </span>
                                                </div>
                                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                    <div class="is-trigger" aria-haspopup="true">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                    <div class="dropdown-menu" role="menu">
                                                        <div class="dropdown-content">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-download"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Download</span>
                                                                    <span>Download this file</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-cloud-upload"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Upload</span>
                                                                    <span>Upload a new version</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-lock"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Permissions</span>
                                                                    <span>Manage file permissions</span>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-share"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Share</span>
                                                                    <span>Share this file</span>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a href="#" class="dropdown-item is-media">
                                                                <div class="icon">
                                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                                </div>
                                                                <div class="meta">
                                                                    <span>Delete</span>
                                                                    <span>Delete this file</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script src="{{ asset('admin/assets/js/saas-billing.js') }}" async></script>
@endsection
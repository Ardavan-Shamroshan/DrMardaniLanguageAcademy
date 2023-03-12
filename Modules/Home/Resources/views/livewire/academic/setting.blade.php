<div class="page-content-inner">
    {{-- <h3>The <code>Academic > Setting</code> livewire component is loaded from the <code>Home</code> module.</h3> --}}

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
            <h1 class="title is-4">Academic Setting</h1>
        </div>
    </div>

    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li>
                <a href="{{ route('home') }}"><span class="icon is-small is-solo"><i data-feather="home"></i></span></a>
            </li>
            <li><a href="{{ route('academic.setting') }}"><span>Academic</span></a></li>
            <li><a class="disable"><span>Academic Setting</span></a></li>
        </ul>
    </nav>

    <div class="card-grid card-grid-v3">
        <!--List Empty Search Placeholder -->
        <div class="page-placeholder custom-text-filter-placeholder is-hidden">
            <div class="placeholder-content">
                <img class="light-image" src="{{ asset('modules/home/assets/img/illustrations/placeholders/search-3.svg') }}" alt="">
                <img class="dark-image" src="{{ asset('modules/home/assets/img/illustrations/placeholders/search-3-dark.svg') }}" alt="">
                <h3>We couldn't find any matching results.</h3>
                <p class="is-larger">Too bad. Looks like we couldn't find any matching results for the
                    search terms you've entered. Please try different search terms or criteria.</p>
            </div>
        </div>

        <!--Card Grid v3-->
        <p class="title mt-3">Semester Management</p>
        <div class="columns is-multiline">
            <div class="column is-4">
                <!--Grid Item-->
                <div class="is-12">
                    @can('create school sessions')
                        <livewire:school::session.create-session />
                    @endcan
                </div>
                <div class="is-12 mt-3">
                    @can('update attendances type')
                        <livewire:school::attendance.attendance-type-update />
                    @endcan
                </div>
            </div>

            <!--Grid Item-->
            <div class="column is-4">
                @can('update browse by session')
                    <livewire:school::session.browse-by-session />
                @endcan
            </div>

            <!--Grid Item-->
            <div class="column is-4">
                @if ($latest_school_session_id == $current_school_session_id)
                    @can('create semesters')
                        <livewire:school::semester.create-semester-for-current-session />
                    @endcan
                @endif
            </div>
        </div>

        <!--Card Grid v3-->
        <p class="title mt-6">Class Management</p>
        <div class="columns is-multiline">

            <!--Grid Item-->
            <div class="column is-4">

                <div class="is-12">
                    @can('view academic settings')
                        <livewire:school::class.create-class />
                    @endcanany
                </div>

                <div class="is-12 mt-3">
                    @can('assign teachers')
                        <livewire:school::teacher.assign-teacher />
                    @endcan
                </div>

            </div>

            <!--Grid Item-->
            <div class="column is-4">
                <div class="is-12">
                    @can('create sections')
                        <livewire:school::section.create-section />
                    @endcan
                </div>
                <div class="is-12 mt-3">
                    @can('update marks submission window')
                        <livewire:school::mark.update-final-marks-submission-status />
                    @endcan
                </div>
            </div>

            <!--Grid Item-->
            <div class="column is-4">
                @can('create courses')
                    <livewire:school::course.create-course />
                @endcan
            </div>
        </div>

    </div>

    <!--Infinite Loader-->
    <div class="infinite-scroll-loader" data-filter-hide="">
        <div class="infinite-scroll-loader-inner">
            <div class="loader is-loading"></div>
            <div class="loader-end is-hidden">
                <span>No more items to load</span>
            </div>
        </div>
    </div>

</div>



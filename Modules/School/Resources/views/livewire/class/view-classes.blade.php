<div class="page-content-inner">
    {{-- <div> --}}
    {{--     <h3>The <code>ViewClasses</code> livewire component is loaded from the <code>School</code> module.</h3> --}}
    {{-- </div> --}}
    <div class="page-title has-text-centered">
        <!-- Sidebar Trigger -->
        <div class="huro-hamburger nav-trigger push-resize" data-sidebar="elements-sidebar">
            <span class="menu-toggle has-chevron">
                <a href="{{ url()->previous() }}">
                    <span class="icon-box-toggle active"><span class="rotate">
                        <i class="icon-line-top"></i>
                        <i class="icon-line-center"></i>
                        <i class="icon-line-bottom"></i>
                    </span>
                </span>
                </a>
            </span>
        </div>

        <div class="title-wrap">
            <h1 class="title is-4">Classes</h1>
        </div>
    </div>

    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}"><span class="icon is-small is-solo"><i data-feather="home"></i></span></a>
            </li>
            <li><a class="disable"><span>School</span></a></li>
            <li><a class="disable"><span>Classes</span></a></li>
        </ul>
    </nav>

    <div class="columns">
        <div class="column is-12">

            @isset($school_classes)
                @forelse ($school_classes as $school_class)
                    <!--Slider Tabs-->
                    <div class="demo-card">
                        <div class="demo-title">
                            <h3 class="title is-thin is-5">{{ $school_class->class_name }}</h3>
                        </div>
                        <div class="card-inner">
                            <div class="tabs-wrapper is-triple-slider is-squared" style="max-width: 100% !important;">
                                <div class="tabs-inner">
                                    <div class="tabs">
                                        <ul>
                                            <li data-tab="sections-tab{{$school_class->id}}" class="is-active">
                                                <a><span>Sections</span></a></li>
                                            <li data-tab="courses-tab{{$school_class->id}}"><a><span>Courses</span></a>
                                            </li>
                                            <li data-tab="syllabi-tab3"><a><span>Syllabi</span></a></li>
                                            <li class="tab-naver"></li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="sections-tab{{$school_class->id}}" class="tab-content is-active">
                                    @isset($school_sections)
                                        <div class="s-card demo-table">
                                            <table class="table is-hoverable is-fullwidth">
                                                <tbody>
                                                <tr>
                                                    <th>Section Name</th>
                                                    <th>Room</th>
                                                    <th>Students</th>
                                                    <th>Routine</th>
                                                    <th class="is-end">
                                                        <div class="dark-inverted">Actions</div>
                                                    </th>
                                                </tr>

                                                @forelse ($school_sections as $school_section)
                                                    @if ($school_section->class_id == $school_class->id)
                                                        <tr>
                                                            <td>{{ $school_section->section_name ?? '-' }}</td>
                                                            <td>{{ $school_section->room_no ?? '-' }}</td>
                                                            <td><a href="#">View Students</a></td>
                                                            <td><a href="#">View Routine</a></td>
                                                            <td class="is-end">
                                                                <div>
                                                                    <div class="dropdown is-spaced is-dots is-right dropdown-trigger is-pushed-mobile is-up">
                                                                        <div class="is-trigger" aria-haspopup="true">
                                                                            <i data-feather="more-vertical"></i></div>
                                                                        <div class="dropdown-menu" role="menu">
                                                                            <div class="dropdown-content">
                                                                                <a href="#" class="dropdown-item is-media">
                                                                                    <div class="icon">
                                                                                        <i class="lnil lnil-pencil"></i>
                                                                                    </div>
                                                                                    <div class="meta">
                                                                                        <span>Edit</span>
                                                                                        <span>Edit section details</span>
                                                                                    </div>
                                                                                </a>
                                                                                <hr class="dropdown-divider">
                                                                                <a href="#" class="dropdown-item is-media">
                                                                                    <div class="icon">
                                                                                        <i class="lnil lnil-trash-can-alt"></i>
                                                                                    </div>
                                                                                    <div class="meta">
                                                                                        <span>Remove</span>
                                                                                        <span>Remove from list</span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @empty
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    @endisset
                                </div>

                                <div id="courses-tab{{$school_class->id}}" class="tab-content">
                                    @isset($school_class->courses)
                                        <div class="s-card demo-table">
                                            <table class="table is-hoverable is-fullwidth">
                                                <tbody>
                                                <tr>
                                                    <th>Course Name</th>
                                                    <th class="is-end">
                                                        <div class="dark-inverted">Actions</div>
                                                    </th>
                                                </tr>

                                                @forelse ($school_class->courses as $course)

                                                    <tr>
                                                        <td>{{ $course->course_name ?? '-' }}</td>
                                                        <td class="is-end">
                                                            <div>
                                                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger is-pushed-mobile is-up">
                                                                    <div class="is-trigger" aria-haspopup="true">
                                                                        <i data-feather="more-vertical"></i></div>
                                                                    <div class="dropdown-menu" role="menu">
                                                                        <div class="dropdown-content">
                                                                            @can('edit courses')
                                                                                <a href="#" class="dropdown-item is-media">
                                                                                    <div class="icon">
                                                                                        <i class="lnil lnil-pencil"></i>
                                                                                    </div>
                                                                                    <div class="meta">
                                                                                        <span>Edit</span>
                                                                                        <span>Edit section details</span>
                                                                                    </div>
                                                                                </a>
                                                                            @endcan
                                                                            <hr class="dropdown-divider">
                                                                            <a href="#" class="dropdown-item is-media">
                                                                                <div class="icon">
                                                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                                                </div>
                                                                                <div class="meta">
                                                                                    <span>Remove</span>
                                                                                    <span>Remove from list</span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    @endisset
                                </div>

                                <div id="syllabi-tab3" class="tab-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid iudicant
                                        sensus? Primum quid tu dicis breve? Etiam beatissimum? Ne discipulum
                                        abducam, times. Quae diligentissime contra Aristonem dicuntur a Chryippo.
                                        Duo Reges: constructio interrete.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            @endisset

        </div>
    </div>

</div>
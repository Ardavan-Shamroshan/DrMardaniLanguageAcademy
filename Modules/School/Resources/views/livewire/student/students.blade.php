<div class="page-content-inner">
    <div>
        <h3>The <code>Students</code> livewire component is loaded from the <code>School</code> module.</h3>
    </div>
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
            <h1 class="title is-4">Students</h1>
        </div>
    </div>

    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li>
                <a href="{{ route('home') }}"><span class="icon is-small is-solo"><i data-feather="home"></i></span></a>
            </li>
            <li><a class="disable"><span>School</span></a></li>
            <li><a class="disable"><span>Students</span></a></li>
        </ul>
    </nav>

    <!-- Content Wrapper -->

    <!--Edit Profile-->
    <div class="card-grid card-grid-v3">
        <div class="columns">
            <!--Navigation-->
            <div class="column is-4">
                <livewire:school::student.enroll-student />
            </div>

            <!--Form-->
            <div class="column is-8">
                <div class="card-grid-item is-raised" style="text-align: left">

                    <!-- Datatable -->
                    <div class="table-wrapper" data-simplebar>
                        <table id="users-datatable" class="table is-datatable is-hoverable table-is-bordered">
                            <thead>
                            <tr>
                                <th>
                                    <div class="control">
                                        <label class="checkbox is-primary is-outlined is-circle">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>

                    <div id="paging-first-datatable" class="pagination datatable-pagination">
                        <div class="datatable-info">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@section('script')
    <script src="{{ asset('modules/home/assets/js/datatables.js') }}" async></script>
@endsection
{{-- <div> --}}
{{--     <h3>The <code>Script</code> livewire component is loaded from the <code>Home</code> module.</h3> --}}
{{-- </div> --}}

<!--Huro Scripts-->
<!--Load Mapbox-->

<!-- Concatenated plugins -->
<script src="{{ asset('admin/assets/js/app.js') }}"></script>

<!-- Huro js -->
<script src="{{ asset('admin/assets/js/functions.js') }}"></script>
<script src="{{ asset('admin/assets/js/main.js') }}" async></script>
<script src="{{ asset('admin/assets/js/components.js') }}" async></script>
<script src="{{ asset('admin/assets/js/popover.js') }}" async></script>
<script src="{{ asset('admin/assets/js/widgets.js') }}" async></script>

<!-- Additional Features -->
<script src="{{ asset('admin/assets/js/touch.js') }}" async></script>

<!-- Landing page js -->

<!-- Dashboards js -->

<!-- Charts js -->

<!--Forms-->

<!--Wizard-->

<!-- Layouts js -->

@yield('script')



<script src="{{ asset('admin/assets/js/syntax.js') }}" async></script>


{{-- livewire scripts --}}
@livewireScripts

{{-- https://livewire-alert.jantinnerezo.com --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />



{{-- <div> --}}
{{--     <h3>The <code>HeadTag</code> livewire component is loaded from the <code>Home</code> module.</h3> --}}
{{-- </div> --}}

<!-- Required meta tags  -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />

<link rel="icon" type="image/png" href="{{ asset('admin/assets/img/favicon.png') }}" />

<!--Core CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/css/override.css') }}" />

<!-- Fonts -->
{{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap" rel="stylesheet" /> --}}
{{-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet" /> --}}

<!--Mapbox styles-->


@yield('head-tag')

{{-- livewire styles --}}
@livewireStyles
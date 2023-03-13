<!DOCTYPE html>
<html lang="en">
<head>
    <livewire:layouts.head-tag />

    <title>@yield('title', config('app.name', 'DrMardaniLanguageAcademy'))</title>
</head>

<body>
    <div id="huro-app" class="app-wrapper">
        <div class="app-overlay"></div>

        {{-- loader --}}
        <livewire:layouts.loader />

        {{-- header --}}
        <livewire:layouts.header />

        {{-- content wrapper slot --}}
        <div id="app-onboarding" class="view-wrapper is-webapp" data-page-title="Blank Template" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                    {{ $slot  }}
                </div>
            </div>
        </div>

        {{-- script --}}
        <livewire:layouts.script />
    </div>
</body>
</html>
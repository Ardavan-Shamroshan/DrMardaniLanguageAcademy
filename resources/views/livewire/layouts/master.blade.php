<!DOCTYPE html>
<html lang="en">
<head>
    <livewire:layouts.head-tag />
    @yield('head-tag')

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
                    <div class="page-title has-text-centered is-webapp">
                        <div class="title-wrap">
                            <h1 class="title is-4">Blank Template</h1>
                        </div>
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
                    {{ $slot  }}
                </div>
            </div>
        </div>

        {{-- script --}}
        <livewire:layouts.script />
        @yield('script')
    </div>
</body>
</html>
<header class="site-header">
    <div class="site-container nav-wrap">

```
    {{-- Logo --}}
    <a
        class="brand"
        href="{{ route('home') }}"
        aria-label="{{ __('marketing.header.brand_aria_label') }}"
    >
        <img
            src="{{ asset('assets/images/rawasi-logo.png') }}"
            alt="{{ __('marketing.header.logo_alt') }}"
        >
    </a>


    {{-- Main Navigation --}}
    <nav
        id="mainNav"
        aria-label="{{ __('marketing.header.navigation_aria_label') }}"
    >
        <a
            class="{{ request()->routeIs('home') ? 'active' : '' }}"
            href="{{ route('home') }}"
        >
            {{ __('marketing.header.home') }}
        </a>

        <a
            class="{{ request()->routeIs('about') ? 'active' : '' }}"
            href="{{ route('about') }}"
        >
            {{ __('marketing.header.about') }}
        </a>

        <a
            class="{{ request()->routeIs('products') ? 'active' : '' }}"
            href="{{ route('products') }}"
        >
            {{ __('marketing.header.products') }}
        </a>

        <a
            class="{{ request()->routeIs('support') ? 'active' : '' }}"
            href="{{ route('support') }}"
        >
            {{ __('marketing.header.support') }}
        </a>

        <a
            class="{{ request()->routeIs('contact*') ? 'active' : '' }}"
            href="{{ route('contact') }}"
        >
            {{ __('marketing.header.contact') }}
        </a>
    </nav>


    {{-- Header Actions --}}
    <div class="nav-actions">

        {{-- Language Switcher --}}
        @php
            $currentLocale = LaravelLocalization::getCurrentLocale();
            $switchLocale = $currentLocale === 'en' ? 'ar' : 'en';
            $switchLabel = $currentLocale === 'en' ? 'العربية' : 'English';
        @endphp

        <a
            class="language-switcher"
            href="{{ LaravelLocalization::getLocalizedURL($switchLocale, null, [], true) }}"
            hreflang="{{ $switchLocale }}"
        >
            {{ $switchLabel }}
        </a>


        {{-- Contact Button --}}
        <a
            class="button primary small"
            href="{{ route('contact') }}"
        >
            {{ __('marketing.header.contact') }}

            <span aria-hidden="true">
                {{ app()->getLocale() === 'ar' ? '←' : '→' }}
            </span>
        </a>


        {{-- Mobile Menu --}}
        <button
            id="menuToggle"
            class="menu-toggle"
            type="button"
            aria-label="{{ __('marketing.header.menu_open') }}"
            aria-controls="mainNav"
            aria-expanded="false"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>

</div>
```

</header>

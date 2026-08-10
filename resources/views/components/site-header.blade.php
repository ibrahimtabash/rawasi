<header class="site-header">
    <div class="site-container nav-wrap">
        <a class="brand" href="{{ route('home') }}" aria-label="رواسي - الصفحة الرئيسية">
            <img src="{{ asset('assets/images/rawasi-logo.png') }}" alt="شعار رواسي">
        </a>
        <nav id="mainNav" aria-label="التنقل الرئيسي">
            <a class="{{ request()->routeIs('home')?'active':'' }}" href="{{ route('home') }}">الرئيسية</a>
            <a class="{{ request()->routeIs('about')?'active':'' }}" href="{{ route('about') }}">عن رواسي</a>
            <a class="{{ request()->routeIs('products')?'active':'' }}" href="{{ route('products') }}">المنتج</a>
            <a class="{{ request()->routeIs('support')?'active':'' }}" href="{{ route('support') }}">الدعم والشراكات</a>
            <a class="{{ request()->routeIs('contact*')?'active':'' }}" href="{{ route('contact') }}">تواصل معنا</a>
        </nav>
        <div class="nav-actions">
            <a class="button primary small" href="{{ route('contact') }}">تواصل معنا <span aria-hidden="true">←</span></a>
            <button id="menuToggle" class="menu-toggle" type="button" aria-label="فتح القائمة" aria-controls="mainNav" aria-expanded="false"><span></span><span></span><span></span></button>
        </div>
    </div>
</header>

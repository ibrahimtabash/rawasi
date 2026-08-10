<footer class="site-footer">
    <div class="site-container footer-grid">
        <div class="footer-brand">
            <a class="brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/rawasi-logo.png') }}" alt="رواسي"></a>
            <p>من قلب الركام، نبني الأمل مجدداً بحلول بناء محلية ومستدامة تدعم إعادة إعمار غزة.</p>
        </div>
        <div><h3>روابط سريعة</h3><a href="{{ route('home') }}">الرئيسية</a><a href="{{ route('about') }}">عن رواسي</a><a href="{{ route('products') }}">المنتج</a><a href="{{ route('support') }}">الدعم والشراكات</a></div>
        <div><h3>تواصل معنا</h3><a href="tel:+970595676789" dir="ltr">+970 59 567 6789</a><a href="mailto:rawasi.gaza@gmail.com">rawasi.gaza@gmail.com</a><span>غزة، فلسطين</span></div>
        <div><h3>كن جزءاً من الأثر</h3><p>الشراكة والدعم يقرّباننا من إنتاج مواد بناء محلية موثوقة.</p><a class="button primary small" href="{{ route('contact') }}">ابدأ معنا</a></div>
    </div>
    <div class="copyright"><div class="site-container"><span>© {{ date('Y') }} رواسي. جميع الحقوق محفوظة.</span><span>حلول محلية لمستقبل أكثر استدامة</span></div></div>
</footer>

@extends('layouts.marketing')
@section('title', 'رواسي | من قلب الركام نبني الأمل')
@section('content')
<section class="hero">
    <img src="{{ asset('assets/images/rawasi-hero.png') }}" alt="مواد بناء مستدامة في موقع إعادة إعمار">
    <div class="hero-shade"></div>
    <div class="site-container hero-content">
        <span class="eyebrow light">حلول بناء محلية • من غزة</span>
        <h1>من قلب الركام،<br><em>نبني الأمل مجدداً</em></h1>
        <p>نحوّل الخرسانة المهدّمة إلى خلطات جافة عالية الجودة، لدعم إعادة الإعمار بمواد محلية أقل كلفة وأكثر استدامة.</p>
        <div class="actions"><a class="button primary" href="{{ route('products') }}">اكتشف المنتج <span aria-hidden="true">←</span></a><a class="button glass" href="{{ route('contact') }}">تواصل معنا</a></div>
        <div class="hero-stats"><div><b>70%</b><span>اعتماد مستهدف على مواد محلية</span></div><div><b>39M</b><span>طن من الركام المتاح</span></div><div><b>50%</b><span>خفض متوقع في التكلفة</span></div></div>
    </div>
</section>

<section class="section intro">
    <div class="site-container split">
        <div class="material-visual">
            <div class="mix-pile"></div><div class="bucket">R<br><small>RAWASI</small></div>
            <span class="leaf">●</span>
        </div>
        <div>
            <span class="eyebrow">ما هو المنتج؟</span>
            <h2>خلطة جاهزة، تُبسّط كل خطوة</h2>
            <p>ابتكارنا عبارة عن خلطة خرسانية جافة تعتمد على ركام مُعالج ومواد محلية، تُعبأ في أكياس عملية وتصبح جاهزة للاستخدام بمجرد إضافة الماء.</p>
            <ul class="check-list"><li>تحضير أسرع في موقع العمل</li><li>جودة ثابتة وهدر أقل</li><li>حل اقتصادي وصديق للبيئة</li></ul>
            <a class="text-link" href="{{ route('products') }}">تعرّف على المنتج ←</a>
        </div>
    </div>
</section>

<section class="section muted">
    <div class="site-container">
        <div class="section-heading"><span class="eyebrow">الاستخدامات المقترحة</span><h2>حل واحد، تطبيقات كثيرة</h2><p>خلطات مرنة لأعمال البناء والترميم اليومية، مع تحديد الاستخدام النهائي حسب الفحوصات الفنية.</p></div>
        <div class="use-grid">
            @foreach([['▦','البلوك','قيد التطوير'],['▤','الحوائط غير الحاملة','أعمال داخلية'],['♢','أعمال الترميم','إصلاحات موضعية'],['⌂','تجهيز القبور','حل عملي'],['▥','المطابخ المؤقتة','أرضيات خفيفة'],['△','الخيام الأرضية','تثبيت آمن']] as $item)
            <article class="use-card"><span>{{ $item[0] }}</span><h3>{{ $item[1] }}</h3><small>{{ $item[2] }}</small></article>
            @endforeach
        </div>
    </div>
</section>

<section class="section">
    <div class="site-container">
        <div class="section-heading"><span class="eyebrow green">منتجات قيد التطوير</span><h2>نبتكر للسوق المحلي</h2><p>نواصل البحث لتطوير حلول تلائم احتياجات إعادة الإعمار وتحقق أعلى استفادة من الموارد المتاحة.</p></div>
        <div class="develop-grid">
            <article class="develop-card gray"><div class="powder"></div><div><span>قيد التطوير</span><h3>أسمنت مقاوم للكبريتات</h3><p>حل للأعمال المعرضة للأملاح والظروف القاسية، قيد الاختبار والتحقق.</p></div></article>
            <article class="develop-card white"><div class="powder"></div><div><span>قيد التطوير</span><h3>الأسمنت الأبيض</h3><p>منتج مستدام للتشطيبات والواجهات، بجودة محلية وتكلفة مدروسة.</p></div></article>
        </div>
    </div>
</section>

<section class="impact"><div class="site-container"><span>✦</span><div><h2>نبني اليوم لمستقبل أكثر استدامة</h2><p>كل كيس رواسي يعني ركاماً أقل، مورداً محلياً مستعاداً، وخطوة أقرب لإعادة الإعمار.</p></div><a class="button light-btn" href="{{ route('about') }}">قصتنا وأثرنا</a></div></section>
@endsection

@extends('layouts.marketing')
@section('title', 'منتجات رواسي')
@section('content')
<section class="page-hero products-hero"><div class="site-container"><span class="eyebrow">حلول بناء مستدامة</span><h1>المنتجات</h1><p>خلطات جافة مصنّعة من ركام خرساني معالج ومواد محلية، لتوفير منتجات عملية واقتصادية تدعم أعمال البناء والترميم.</p></div><div class="bag-family">@foreach([50,25,10,5] as $size)<div class="bag bag-{{ $size }}"><img src="{{ asset('assets/images/rawasi-logo.png') }}" alt=""><b>{{ $size }} كغ</b></div>@endforeach</div></section>
<section class="market-strip"><div class="site-container"><span>♧</span><div><h2>منتجات تلائم احتياجات السوق</h2><p>عبوات متدرجة تقلل الهدر، وتسهّل النقل والتخزين والاستخدام.</p></div></div></section>
<section class="section"><div class="site-container"><div class="section-heading"><span class="eyebrow green">منتج صديق للبيئة وسهل الاستخدام</span><h2>خلطات رواسي الجافة</h2></div><div class="product-grid">
@foreach([['50','أرضيات خيام ومطابخ مؤقتة','المشاريع الأكبر'],['25','مدات صغيرة وأسطح مؤقتة','الأعمال المتوسطة'],['10','صيانة خفيفة وترميم محدود','للمنزل والورشة'],['5','تجارب وإصلاحات بسيطة','للأعمال السريعة']] as $p)
<article class="product-card"><div class="product-bag"><img src="{{ asset('assets/images/rawasi-logo.png') }}" alt="كيس رواسي"><strong>{{ $p[0] }} كغ</strong></div><h3>{{ $p[1] }}</h3><p>{{ $p[2] }}</p><a href="{{ route('contact') }}">اطلب معلومات</a></article>
@endforeach
</div><div class="calculator"><div><span>حاسبة الكمية</span><h3>كم كيساً تحتاج؟</h3></div><label>المساحة (م²)<input id="areaInput" type="number" min="1" value="16"></label><label>السماكة (سم)<input id="depthInput" type="number" min="1" value="3"></label><div class="calc-result"><b id="bagResult">20</b><span>كيساً تقريباً من حجم 50 كغ</span></div></div></div></section>
<section class="section muted"><div class="site-container"><div class="section-heading"><h2>طريقة الاستخدام</h2></div><div class="steps">@foreach([['01','افتح العبوة','في وعاء نظيف'],['02','أضف الماء','تدريجياً حسب الإرشادات'],['03','اخلط جيداً','حتى قوام متجانس'],['04','طبّق الخلطة','ضمن زمن التشغيل']] as $s)<article><b>{{ $s[0] }}</b><h3>{{ $s[1] }}</h3><p>{{ $s[2] }}</p></article>@endforeach</div><p class="safety-note">ⓘ تُحدد نسب الخلط والاستخدامات النهائية وفق نتائج الفحوصات الفنية وإرشادات المنتج.</p></div></section>
@endsection

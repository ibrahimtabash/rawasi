@extends('layouts.marketing')
@section('title', 'ادعم رواسي')
@section('content')
<section class="page-hero support-hero"><div class="site-container narrow"><span class="eyebrow light">شارك في إعادة الإعمار</span><h1>دعمك يحوّل الفكرة<br>إلى أثر ملموس</h1><p>ساهم في تمويل الفحوصات، تطوير المنتج، وتجهيز خط إنتاج محلي.</p></div></section>
<section class="section"><div class="site-container support-grid">@foreach([['دعم فني','قدّم خبرتك في هندسة المواد، الفحوصات أو ضبط الجودة.'],['شراكة مؤسسية','ساعدنا في التجارب الميدانية، التوريد أو الوصول إلى السوق.'],['تمويل التطوير','ساهم في نقل المنتج من النماذج الأولية إلى الإنتاج.']] as $s)<article><span>✦</span><h2>{{ $s[0] }}</h2><p>{{ $s[1] }}</p><a class="text-link" href="{{ route('contact') }}">ابدأ معنا ←</a></article>@endforeach</div></section>
@endsection

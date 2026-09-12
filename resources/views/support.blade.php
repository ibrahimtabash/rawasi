@extends('layouts.marketing')

@section('title', __('support.page_title'))

@section('content')

{{-- Hero --}}
<section class="page-hero support-hero" style="background-image: url('{{ asset('assets/images/Support/hero.png') }}');">
    <div class="site-container narrow">

        <span class="eyebrow light">
            {{ __('support.hero.eyebrow') }}
        </span>

        <h1>
            {{ __('support.hero.title_line_1') }}<br>
            {{ __('support.hero.title_line_2') }}
        </h1>

        <p>
            {{ __('support.hero.description') }}
        </p>

    </div>
</section>


{{-- Support Introduction --}}
<section class="section support-introduction">

    <div class="site-container support-introduction-grid">

        <div class="support-introduction-content">
            <span class="eyebrow">إدارة دعمكم</span>

            <h2>ماذا تفعل أن تعمل من خلال دعمكم؟</h2>

            <p>
                من خلال الدعم، إدارة الجودة، إدارة التوريدات الصحية، تعزيز تحسين نسب الجرار،
                تطوير المنتج، وإدارة التوريدات الصحية، نعمل على تحويل العينة إلى منتج أكثر جاهزية.
            </p>

            <p>كل توريد يدعمنا على:</p>

            <ul class="support-introduction-list">
                <li>إدارة الجودة داخل المجتمع</li>
                <li>تطوير الجودة وتعزيز نسب الجرار</li>
                <li>توريد من الفكرة إلى منتج جاهز</li>
                <li>تنفيذ التوريدات الصحية</li>
                <li>دعم الجودة والنتائج الفنية</li>
                <li>بناء توريدات جرارة</li>
            </ul>
        </div>

        <div class="support-introduction-image">
            <img src="{{ asset('assets/images/Support/side.png') }}" alt="إدارة دعمكم">
        </div>

    </div>

</section>


{{-- Support Options --}}
<section class="section">

    <div class="site-container support-grid">

        @foreach (['technical', 'partnership', 'funding'] as $type)

            <article>

                <span aria-hidden="true">
                    {{ __('support.options.' . $type . '.icon') }}
                </span>

                <h2>
                    {{ __('support.options.' . $type . '.title') }}
                </h2>

                <p>
                    {{ __('support.options.' . $type . '.description') }}
                </p>

                <a
                    class="text-link"
                    href="{{ route('contact') }}"
                >
                    {{ __('support.options.' . $type . '.link') }}
                </a>

            </article>

        @endforeach

    </div>

</section>

@endsection

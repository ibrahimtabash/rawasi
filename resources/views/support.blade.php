@extends('layouts.marketing')

@section('title', __('support.page_title'))

@section('content')

{{-- Hero --}}
<section class="page-hero support-hero">
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

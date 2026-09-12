@extends('layouts.marketing')
@section('title', __('home.page_title'))
@section('content')
    <section class="hero">

        <div class="hero-shade"></div><img src="{{ asset('assets/images/rawasi-hero.png') }}"
            alt="{{ __('home.hero_image_alt') }}">
        <div class="site-container hero-content">
            <span class="eyebrow light">{{ __('home.hero_eyebrow') }}</span>
            <h1>{!! __('home.hero_title') !!}</h1>
            <p>{{ __('home.hero_description') }}</p>
            <div class="actions"><a class="button primary" href="{{ route('products') }}">
                    {{ __('home.hero_product_button') }} <span aria-hidden="true">←</span>
                </a><a class="button glass" href="{{ route('contact') }}">
                    {{ __('home.hero_contact_button') }}
                </a></div>
        </div>
    </section>

    <section class="impact-stats-section" aria-label="{{ __('home.hero_eyebrow') }}">
        <div class="site-container impact-stats">
            <article>
                <span class="stat-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20.8 3.2C13.2 3.5 7.3 6.1 5 10.7c-1.5 3-.8 6.5 1.7 8.6 2.2 1.9 5.6 2.1 8 .4 3.7-2.6 5.5-8.4 6.1-16.5Z"/><path d="M3 21c3.5-5.8 7.8-9 13.4-11.3"/></svg>
                </span>
                <b class="stat-number" data-target="70" data-suffix="%">0%</b>
                <span>{{ __('home.stat_local_materials') }}</span>
            </article>
            <article>
                <span class="stat-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M7.2 7.2 4.4 4.4M5.4 10.6 2.6 7.8M16.8 16.8l2.8 2.8m-1-6.2 2.8 2.8M12 3.4a8.6 8.6 0 1 1-8.1 11.4"/><path d="m8.4 4.2 3.9-.8-1.1 3.8M15.6 19.8l-3.9.8 1.1-3.8"/></svg>
                </span>
                <b class="stat-number" data-target="39" data-suffix="M">0M</b>
                <span>{{ __('home.stat_rubble') }}</span>
            </article>
            <article>
                <span class="stat-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="8.5"/><path d="M14.6 8.8c-.6-.6-1.5-.9-2.5-.9-1.5 0-2.6.8-2.6 2 0 2.9 5.1 1.5 5.1 4.3 0 1.2-1.1 2-2.7 2-1.1 0-2.1-.4-2.8-1.1M12 6.5v11"/></svg>
                </span>
                <b class="stat-number" data-target="50" data-suffix="%">0%</b>
                <span>{{ __('home.stat_cost_reduction') }}</span>
            </article>
        </div>
    </section>

    <section class="section intro">
        <div class="site-container split">
            <div class="material-visual">
                <img src="{{ asset('assets/images/mixture.png') }}" alt="{{ __('home.product_image_alt') }}">
            </div>
            <div>
                <span class="eyebrow">{{ __('home.product_eyebrow') }}</span>
                <h2>{{ __('home.product_title') }}</h2>
                <p>{{ __('home.product_description') }}</p>
                <ul class="check-list">
                    <li>{{ __('home.product_benefit_1') }}</li>
                    <li>{{ __('home.product_benefit_2') }}</li>
                    <li>{{ __('home.product_benefit_3') }}</li>
                </ul>
                <a class="text-link" href="{{ route('products') }}">
                    {{ __('home.product_link') }} ←
                </a>
            </div>
        </div>
    </section>

    <section class="section muted">
        <div class="site-container">
            <div class="section-heading"> <span class="eyebrow">{{ __('home.uses_eyebrow') }}</span>
                <h2>{{ __('home.uses_title') }}</h2>
                <p>{{ __('home.uses_description') }}</p>
            </div>
            <div class="use-grid">
                @foreach ([['▦', __('home.use_block'), __('home.use_block_status')], ['▤', __('home.use_non_load_bearing'), __('home.use_non_load_bearing_status')], ['♢', __('home.use_renovation'), __('home.use_renovation_status')], ['⌂', __('home.use_graves'), __('home.use_graves_status')], ['▥', __('home.use_kitchens'), __('home.use_kitchens_status')], ['△', __('home.use_tents'), __('home.use_tents_status')]] as $item)
                    <article class="use-card">
                        <span>{{ $item[0] }}</span>
                        <h3>{{ $item[1] }}</h3>
                        <small>{{ $item[2] }}</small>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="site-container">
            <div class="section-heading">
                <h2>{{ __('home.development_title') }}</h2>
                <p>{{ __('home.development_description') }}</p>
            </div>
            <div class="develop-grid">
                <article class="develop-card gray">
                    <span class="product-development-ribbon">{{ __('home.development_eyebrow') }}</span>
                    <img class="develop-cement-image" src="{{ asset('assets/images/cement.png') }}"
                        alt="{{ __('home.sulfate_cement_title') }}">
                    <div>
                        <h3>{{ __('home.sulfate_cement_title') }}</h3>
                        <p>{{ __('home.sulfate_cement_description') }}</p>
                    </div>
                </article>
                <article class="develop-card white">
                    <span class="product-development-ribbon">{{ __('home.development_eyebrow') }}</span>
                    <img class="develop-cement-image" src="{{ asset('assets/images/white-cement.png') }}"
                        alt="{{ __('home.white_cement_title') }}">
                    <div>
                        <h3>{{ __('home.white_cement_title') }}</h3>
                        <p>{{ __('home.white_cement_description') }}</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="impact">
        <div class="site-container">
            <span>✦</span>

            <div>
                <h2>{{ __('home.impact_title') }}</h2>
                <p>{{ __('home.impact_description') }}</p>
            </div>

            <a class="button light-btn" href="{{ route('about') }}">
                {{ __('home.impact_button') }}
            </a>
        </div>
    </section>
@endsection

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
            <div class="hero-stats">
                <div><b>70%</b><span>{{ __('home.stat_local_materials') }}</span></div>
                <div><b>39M</b><span>{{ __('home.stat_rubble') }}</span></div>
                <div><b>50%</b><span>{{ __('home.stat_cost_reduction') }}</span></div>
            </div>
        </div>
    </section>

    <section class="section intro">
        <div class="site-container split">
            <div class="material-visual">
                <div class="mix-pile"></div>
                <div class="bucket">R<br><small>RAWASI</small></div>
                <span class="leaf">●</span>
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
            <div class="section-heading"> <span class="eyebrow green">{{ __('home.development_eyebrow') }}</span>
                <h2>{{ __('home.development_title') }}</h2>
                <p>{{ __('home.development_description') }}</p>
            </div>
            <div class="develop-grid">
                <article class="develop-card gray">
                    <div class="powder"></div>
                    <div>
                        <span>{{ __('home.under_development') }}</span>
                        <h3>{{ __('home.sulfate_cement_title') }}</h3>
                        <p>{{ __('home.sulfate_cement_description') }}</p>
                    </div>
                </article>
                <article class="develop-card white">
                    <div class="powder"></div>
                    <div>
                        <span>{{ __('home.under_development') }}</span>
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

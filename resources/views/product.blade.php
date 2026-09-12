@extends('layouts.marketing')

@section('title', __('products.page_title'))

@section('content')

{{-- Hero --}}
<section class="page-hero products-hero"
    style="--products-hero-image: url('{{ asset('assets/images/product/product_bg.jpeg') }}');">
    <div class="site-container">

        <span class="eyebrow">
            {{ __('products.hero.eyebrow') }}
        </span>

        <h1>
            {{ __('products.hero.title') }}
        </h1>

        <p>
            {{ __('products.hero.description') }}
        </p>

    </div>

</section>


{{-- Market Strip --}}
<section class="market-strip">

    <div class="site-container">

        <span aria-hidden="true">♧</span>

        <div>

            <h2>
                {{ __('products.market.title') }}
            </h2>

            <p>
                {{ __('products.market.description') }}
            </p>

        </div>

    </div>

</section>


{{-- Cement Product Visual --}}
<section class="product-cement-section">
    <div
        class="site-container product-cement-visual"
        aria-hidden="true"
        style="--product-cement-image: url('{{ asset('assets/images/product/product_cem.png') }}');"
    ></div>
</section>


{{-- Products --}}
<section class="section">

    <div class="site-container">

        <div class="section-heading">

            <span class="eyebrow green">
                {{ __('products.list.eyebrow') }}
            </span>

            <h2>
                {{ __('products.list.title') }}
            </h2>

        </div>


        <div class="product-grid">

            @foreach (['50', '25', '10', '5'] as $size)

                <article class="product-card">

                    <div class="product-bag">

                        <img
                            src="{{ asset('assets/images/rawasi-logo.png') }}"
                            alt="{{ __('products.bag_alt') }}"
                        >

                        <strong>
                            {{ $size }} {{ __('products.kg') }}
                        </strong>

                    </div>

                    <h3>
                        {{ __('products.items.' . $size . '.title') }}
                    </h3>

                    <p>
                        {{ __('products.items.' . $size . '.description') }}
                    </p>

                    <a href="{{ route('contact') }}">
                        {{ __('products.request_info') }}
                    </a>

                </article>

            @endforeach

        </div>


        {{-- Calculator --}}
        <div class="calculator">

            <div>

                <span>
                    {{ __('products.calculator.label') }}
                </span>

                <h3>
                    {{ __('products.calculator.title') }}
                </h3>

            </div>

            <label>
                {{ __('products.calculator.area') }}

                <input
                    id="areaInput"
                    type="number"
                    min="1"
                    value="16"
                >
            </label>

            <label>
                {{ __('products.calculator.thickness') }}

                <input
                    id="depthInput"
                    type="number"
                    min="1"
                    value="3"
                >
            </label>

            <div class="calc-result">

                <b id="bagResult">20</b>

                <span>
                    {{ __('products.calculator.result') }}
                </span>

            </div>

        </div>

    </div>

</section>


{{-- How to Use --}}
<section class="section muted">

    <div class="site-container">

        <div class="section-heading">

            <h2>
                {{ __('products.usage.title') }}
            </h2>

        </div>


        <div class="steps">

            @foreach (['01', '02', '03', '04'] as $step)

                <article>

                    <b>
                        {{ $step }}
                    </b>

                    <h3>
                        {{ __('products.usage.steps.' . $step . '.title') }}
                    </h3>

                    <p>
                        {{ __('products.usage.steps.' . $step . '.description') }}
                    </p>

                </article>

            @endforeach

        </div>


        <p class="safety-note">
            {{ __('products.usage.safety_note') }}
        </p>

    </div>

</section>

@endsection

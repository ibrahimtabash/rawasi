@extends('layouts.marketing')

@section('title', __('about.page_title'))

@section('content')

    {{-- Hero --}}
    <section class="page-hero about-hero">
        <div class="site-container narrow">

            <span class="eyebrow light">
                {{ __('about.hero.eyebrow') }}
            </span>

            <h1>
                {{ __('about.hero.title_line_1') }}<br>
                {{ __('about.hero.title_line_2') }}
            </h1>

            <p>
                {{ __('about.hero.description') }}
            </p>

        </div>
    </section>


    {{-- Our Story --}}
    <section class="section">
        <div class="site-container split story">

            <div>

                <span class="eyebrow">
                    {{ __('about.story.eyebrow') }}
                </span>

                <h2>
                    {{ __('about.story.title') }}
                </h2>

                <p>
                    {{ __('about.story.paragraph_1') }}
                </p>

                <p>
                    {{ __('about.story.paragraph_2') }}
                </p>

            </div>

            <div class="quote-card">

                <span aria-hidden="true">”</span>

                <blockquote>
                    {{ __('about.story.quote') }}
                </blockquote>

                <small>
                    {{ __('about.story.quote_author') }}
                </small>

            </div>

        </div>
    </section>


    {{-- Values --}}
    <section class="section dark-section">
        <div class="site-container">

            <div class="section-heading">

                <span class="eyebrow light">
                    {{ __('about.values.eyebrow') }}
                </span>

                <h2>
                    {{ __('about.values.title') }}
                </h2>

            </div>

            <div class="values">

                @foreach (['sustainability', 'local', 'quality', 'dignity'] as $value)
                    <article>

                        <span aria-hidden="true">
                            {{ __('about.values.' . $value . '.icon') }}
                        </span>

                        <h3>
                            {{ __('about.values.' . $value . '.title') }}
                        </h3>

                        <p>
                            {{ __('about.values.' . $value . '.description') }}
                        </p>

                    </article>
                @endforeach

            </div>

        </div>
    </section>


    {{-- Journey --}}
    <section class="section">
        <div class="site-container">

            <div class="section-heading">

                <span class="eyebrow green">
                    {{ __('about.journey.eyebrow') }}
                </span>

                <h2>
                    {{ __('about.journey.title') }}
                </h2>

            </div>

            <div class="timeline">

                @foreach (['research', 'prototype', 'field', 'expansion'] as $step)
                    <article>

                        <b>
                            {{ __('about.journey.' . $step . '.year') }}
                        </b>

                        <h3>
                            {{ __('about.journey.' . $step . '.title') }}
                        </h3>

                        <p>
                            {{ __('about.journey.' . $step . '.description') }}
                        </p>

                    </article>
                @endforeach

            </div>

        </div>
    </section>

@endsection

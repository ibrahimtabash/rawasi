@extends('layouts.marketing')

@section('title', __('contact.page_title'))

@section('content')

{{-- Hero --}}
<section class="page-hero contact-hero">
    <div class="site-container narrow">

        <span class="eyebrow light">
            {{ __('contact.hero.eyebrow') }}
        </span>

        <h1>
            {{ __('contact.hero.title_line_1') }}<br>
            {{ __('contact.hero.title_line_2') }}
        </h1>

        <p>
            {{ __('contact.hero.description') }}
        </p>

    </div>
</section>


{{-- Contact Section --}}
<section class="section">

    <div class="site-container contact-layout">

        {{-- Contact Information --}}
        <div>

            <span class="eyebrow">
                {{ __('contact.info.eyebrow') }}
            </span>

            <h2>
                {{ __('contact.info.title') }}
            </h2>

            <p>
                {{ __('contact.info.description') }}
            </p>


            <div class="contact-cards">

                {{-- Phone --}}
                <a href="tel:+970595676789">

                    <span aria-hidden="true">☎</span>

                    <div>

                        <small>
                            {{ __('contact.info.phone.label') }}
                        </small>

                        <b dir="ltr">
                            +970 59 567 6789
                        </b>

                    </div>

                </a>


                {{-- Email --}}
                <a href="mailto:rawasi.gaza@gmail.com">

                    <span aria-hidden="true">✉</span>

                    <div>

                        <small>
                            {{ __('contact.info.email.label') }}
                        </small>

                        <b>
                            rawasi.gaza@gmail.com
                        </b>

                    </div>

                </a>


                {{-- Location --}}
                <div>

                    <span aria-hidden="true">⌖</span>

                    <div>

                        <small>
                            {{ __('contact.info.location.label') }}
                        </small>

                        <b>
                            {{ __('contact.info.location.value') }}
                        </b>

                    </div>

                </div>

            </div>

        </div>


        {{-- Contact Form --}}
        <form
            class="contact-form"
            method="POST"
            action="{{ route('contact.submit') }}"
        >

            @csrf


            {{-- Success Message --}}
            @if(session('success'))
                <div class="success">
                    {{ session('success') }}
                </div>
            @endif


            {{-- Name + Phone --}}
            <div class="field-row">

                <label>
                    {{ __('contact.form.name') }}

                    <input
                        name="name"
                        required
                        value="{{ old('name') }}"
                    >
                </label>


                <label>
                    {{ __('contact.form.phone') }}

                    <input
                        name="phone"
                        required
                        value="{{ old('phone') }}"
                    >
                </label>

            </div>


            {{-- Email --}}
            <label>
                {{ __('contact.form.email') }}

                <input
                    type="email"
                    name="email"
                    required
                    value="{{ old('email') }}"
                >
            </label>


            {{-- Subject --}}
            <label>
                {{ __('contact.form.subject.label') }}

                <select name="subject">

                    <option value="product">
                        {{ __('contact.form.subject.options.product') }}
                    </option>

                    <option value="partnership">
                        {{ __('contact.form.subject.options.partnership') }}
                    </option>

                    <option value="support">
                        {{ __('contact.form.subject.options.support') }}
                    </option>

                    <option value="general">
                        {{ __('contact.form.subject.options.general') }}
                    </option>

                </select>

            </label>


            {{-- Message --}}
            <label>
                {{ __('contact.form.message') }}

                <textarea
                    name="message"
                    rows="5"
                    required
                >{{ old('message') }}</textarea>

            </label>


            {{-- Validation Error --}}
            @if($errors->any())
                <div class="error">
                    {{ $errors->first() }}
                </div>
            @endif


            {{-- Submit --}}
            <button
                class="button primary"
                type="submit"
            >
                {{ __('contact.form.submit') }}
            </button>

        </form>

    </div>

</section>

@endsection

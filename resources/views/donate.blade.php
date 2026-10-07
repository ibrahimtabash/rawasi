@extends('layouts.marketing')

@section('title', __('donate.title'))

@section('content')
<section class="donate-hero">
    <div class="site-container donate-hero-grid">
        <div>
            <span class="eyebrow">{{ __('donate.eyebrow') }}</span>
            <h1>{{ __('donate.title') }}</h1>
            <p>{{ __('donate.description') }}</p>
            <a class="text-link" href="{{ route('home') }}">{{ __('donate.back_home') }} ←</a>
        </div>
        <div class="donate-mark" aria-hidden="true">♥</div>
    </div>
</section>

<section class="section donate-section">
    <div class="site-container donate-grid">
        <div class="donate-impact">
            <span class="eyebrow green">Rawasi</span>
            <h2>{{ __('donate.impact_title') }}</h2>
            <p>{{ __('donate.impact_text') }}</p>
        </div>
        <form class="donate-form" action="#" method="post">
            @csrf
            <fieldset>
                <legend>{{ __('donate.amount_label') }}</legend>
                <div class="donation-amounts">
                    @foreach ([25, 50, 100] as $amount)
                        <label><input type="radio" name="amount" value="{{ $amount }}" {{ $amount === 50 ? 'checked' : '' }}><span>{{ $amount }} {{ __('donate.currency') }}</span></label>
                    @endforeach
                    <label><input type="radio" name="amount" value="custom"><span>{{ __('donate.custom_amount') }}</span></label>
                </div>
            </fieldset>
            <label>{{ __('donate.name_label') }}<input type="text" name="name" required></label>
            <label>{{ __('donate.email_label') }}<input type="email" name="email" required></label>
            <label>{{ __('donate.message_label') }}<textarea name="message" rows="3"></textarea></label>
            <button class="button primary donation-submit" type="submit">{{ __('donate.submit') }}</button>
            <small>{{ __('donate.secure_note') }}</small>
        </form>
    </div>
</section>
@endsection

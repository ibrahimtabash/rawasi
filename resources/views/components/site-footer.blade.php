<footer class="site-footer">
    <div class="site-container footer-grid">

        <div class="footer-brand">
            <a class="brand" href="{{ route('home') }}">
                <img
                    src="{{ asset('assets/images/rawasi-logo.png') }}"
                    alt="{{ __('marketing.site_name') }}"
                >
            </a>

            <p>
                {{ __('marketing.footer.description') }}
            </p>
        </div>

        <div>
            <h3>{{ __('marketing.footer.quick_links') }}</h3>

            <a href="{{ route('home') }}">
                {{ __('marketing.footer.home') }}
            </a>

            <a href="{{ route('about') }}">
                {{ __('marketing.footer.about') }}
            </a>

            <a href="{{ route('products') }}">
                {{ __('marketing.footer.products') }}
            </a>

            <a href="{{ route('support') }}">
                {{ __('marketing.footer.support') }}
            </a>
        </div>

        <div>
            <h3>{{ __('marketing.footer.contact') }}</h3>

            <a href="tel:+970595676789" dir="ltr">
                +970 59 567 6789
            </a>

            <a href="mailto:rawasi.gaza@gmail.com">
                rawasi.gaza@gmail.com
            </a>

            <span>
                {{ __('marketing.footer.location') }}
            </span>
        </div>

        <div>
            <h3>{{ __('marketing.footer.impact_title') }}</h3>

            <p>
                {{ __('marketing.footer.impact_description') }}
            </p>

            <a
                class="button primary small"
                href="{{ route('contact') }}"
            >
                {{ __('marketing.footer.get_started') }}
            </a>
        </div>

    </div>

    <div class="copyright">
        <div class="site-container">
            <span>
                © {{ date('Y') }} {{ __('marketing.site_name') }}.
                {{ __('marketing.footer.rights') }}
            </span>

            <span>
                {{ __('marketing.footer.tagline') }}
            </span>
        </div>
    </div>
</footer>

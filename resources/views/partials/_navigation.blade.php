<ul>
    {{-- Homepage --}}
    <li>
        <a href="{{ route('/') }}">
            {{ trans('pages.home.title') }}
        </a>
    </li>

    {{-- Imprint Page --}}
    <li>
        <a href="{{ route('/imprint') }}">
            {{ trans('pages.imprint.title') }}
        </a>
    </li>

    {{-- Privacy Policy Page --}}
    <li>
        <a href="{{ route('/privacy-policy') }}">
            {{ trans('pages.privacy-policy.title') }}
        </a>
    </li>
</ul>
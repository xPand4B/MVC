<ul>
    {{-- Homepage --}}
    <li>
        <a href="{{ route('/') }}">
            {{ trans('navigation.top.home') }}
        </a>
    </li>

    {{-- Imprint Page --}}
    <li>
        <a href="{{ route('/imprint') }}">
            {{ trans('navigation.top.imprint') }}
        </a>
    </li>

    {{-- Privacy Policy Page --}}
    <li>
        <a href="{{ route('/privacy-policy') }}">
            {{ trans('navigation.top.privacy-policy') }}
        </a>
    </li>
</ul>

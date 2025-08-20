{{-- <ul>
    <li {{ $attributes->merge(['class' => 'page-item list-unstyled']) }}>
    <a {{ $attributes->merge(['class' => 'btn btn-primary h-100 d-inline-flex align-items-center gap-2 text-white text-decoration-none']) }}>
    </li>
</ul> --}}
<a {{ $attributes->merge(['class' => 'page-link rounded fs-4 text-dark']) }}>
    {{ $slot }}
</a>
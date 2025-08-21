@props(['active' => false])

<li class="nav-item">
    <a {{ $attributes->merge([
            'class' => $active ? 'active link-body-emphasis nav-link px-2 bg-gradient border-top fs-4 text-light' : 'nav-link link-body-emphasis px-2',
            'aria-current' => $active ? 'page' : null
        ]) }}>
        {{ $slot }}
    </a>
</li>






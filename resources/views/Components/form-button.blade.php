<button {{ $attributes->merge(['class' => 'btn btn-primary px-4', 'type' => 'submit']) }} >
    {{ $slot }}
</button>
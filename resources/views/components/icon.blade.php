@php
    $path = __DIR__."../../icons/$mode/$icon.svg";
    $svg = file_exists($path) ? file_get_contents($path) : '';
    $svg = str_replace('<svg ', '<svg ' . $attributes->except('icon', 'mode').' ', $svg);
@endphp
{!! $svg !!}

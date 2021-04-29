<?php
$color = $color ?? 'primary';
$size = $size ?? 'md';
$component = $component ?? 'button';

if (\Illuminate\Support\Str::startsWith($color, 'bg-')) {
    $colorClasses = $color;
} elseif ($color === 'white') {
    $colorClasses = "bg-white hover:bg-gray-100 text-gray-800 hover:text-gray-900";
} else {
    $colorClasses = "bg-$color hover:bg-opacity-95";
}

if ($size === 'lg') {
    $sizeClasses = 'py-3 px-6 text-base';
} elseif ($size === 'sm') {
    $sizeClasses = 'py-1 px-3 text-sm';
} else {
    $sizeClasses = 'py-2 px-4 text-sm';
}

$classes = "btn flex justify-center $sizeClasses $colorClasses border border-transparent font-medium rounded-md transition duration-100 ease-in-out shadow-sm text-white";
$attributes = $attributes->except(['color', 'size', 'component'])->merge(['class' => $classes]);
?>
@if($component === 'a')
    <a {{$attributes->merge(['role'=>'button'])}}>
        {{$slot}}
    </a>
@else
    <button {{$attributes}}>
        {{$slot}}
    </button>
@endif

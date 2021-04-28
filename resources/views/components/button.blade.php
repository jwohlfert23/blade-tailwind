<?php
$color = $color ?? 'primary';
$size = $size ?? 'md';

if (in_array($color, ['gray', 'red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'])) {
    $colorClasses = "bg-$color-100";
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

$classes = "btn flex justify-center $sizeClasses $colorClasses border border-transparent font-medium rounded-md transition duration-150 ease-in-out shadow-sm text-white";
?>
<button {{$attributes->except(['color', 'size'])->merge(['class' => $classes])}}>
    {{$slot}}
</button>

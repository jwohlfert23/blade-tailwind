<?php
$color = $color ?? 'bg-primary';
$size = $size ?? 'w-3 h-3';

$dotClasses = "rounded-full inline-block align-middle m-1 $size $color";
?>

<div {{$attributes->except(['color', 'size'])->merge(['class' => 'loading'])}}>
    @for($i=0; $i<5;$i++)
        <span class="{{$dotClasses}}"></span>
    @endfor
</div>

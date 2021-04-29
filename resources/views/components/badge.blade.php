<?php
$color = $color ?? 'gray';
$size = $size ?? 'px-2.5 py-0.5 text-xs';

if(in_array($color, ['gray', 'red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'])) {
    $bg = "bg-$color-100";
    $text = "text-$color-800";
} else {
    $bg = "bg-primary bg-opacity-10";
    $text = "text-$color";
}
?>
<span {{$attributes->except('color')->merge(['class' => "inline-flex items-center $size rounded-full font-medium $bg $text"])}}>
    {{$slot}}
</span>

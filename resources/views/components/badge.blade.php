<?php
$size = isset($size) && $size === 'lg' ? 'px-3 py-0.5 text-sm' : 'px-2.5 py-0.5 text-xs';
?>
<span {{$attributes->except('size')->merge(['class' => "inline-flex items-center $size rounded-full font-medium bg-gray-100 text-gray-800"])}}>
    {{$slot}}
</span>

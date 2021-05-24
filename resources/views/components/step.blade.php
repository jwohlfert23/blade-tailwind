<?php
$class = "w-full focus:outline-none group pl-4 py-2 flex flex-col border-l-4 md:pl-0 md:pt-4 md:pb-0 md:border-l-0 md:border-t-4 ";
if (! empty($complete)) {
    $class .= 'border-primary';
} else {
    $class .= 'border-gray-200 hover:border-gray-300';
}
?>
<li class="md:flex-1">
    <button {{$attributes->merge(['class' => $class])}} >
        <span
            class="text-xs {{!empty($complete) ? 'text-primary' : 'text-gray-500'}} font-semibold tracking-wide uppercase"
        >
            Step {{$index + 1}}
        </span>
        <span class="text-sm font-medium">{{$label}}</span>
        {{$slot}}
    </button>
</li>

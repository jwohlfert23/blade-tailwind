<?php
$defaults = [
    'href' => '#',
    'class' => 'block px-4 py-2 text-sm hover:bg-gray-50 '.(! empty($active) ? 'bg-gray-100 text-gray-900' : 'text-gray-700'),
    'role' => 'menuitem',
    'tabindex' => '-1'
];
?>
<a {{$attributes->merge($defaults)}}>{{$slot}}</a>

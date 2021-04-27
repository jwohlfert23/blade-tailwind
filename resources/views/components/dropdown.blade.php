<?php
$defaults = [
    'class' => 'relative inline-block text-left',
    'x-data' => '{open: false}',
];
?>
<div {{$attributes->merge($defaults)}}>
    <div>
        <button
            type="button"
            class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:primary"
            id="menu-button"
            aria-expanded="true"
            aria-haspopup="true"
            x-on:click="open = true"
            @click.away="open = false"
        >
            {{$label}}
            <x-icon icon="chevron-down" mode="solid" class="w-5 h-5" />
        </button>
    </div>

    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="z-10 origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
    >
        <div class="py-1" role="none">
            {{$slot}}
        </div>
    </div>
</div>

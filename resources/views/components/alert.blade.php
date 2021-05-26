<?php
switch ($color ?? null) {
    case 'green':
    case 'success':
        $colors = ['bg-green-50', 'text-green-400', 'text-green-700', 'text-green-800'];
        break;
    case 'red':
    case 'danger':
        $colors = ['bg-red-50', 'text-red-400', 'text-red-700', 'text-red-800'];
        break;
    case 'yellow':
    case 'orange':
    case 'warning':
        $colors = ['bg-yellow-50', 'text-yellow-400', 'text-yellow-700', 'text-yellow-800'];
        break;
    case 'blue':
    case 'info':
    default:
        $colors = ['bg-blue-50', 'text-blue-400', 'text-blue-700', 'text-blue-800'];
        break;
}
?>
<div {{$attributes->except('icon', 'color', 'secondary')->merge(['class' => "rounded-md {$colors[0]} p-4 mb-2"])}}>
    <div class="flex">
        @if(!empty($icon))
            <div class="flex-shrink-0">
                <x-icon :icon="$icon" class="h-5 w-5 {{$colors[1]}}" />
            </div>
        @endif
        <div class="ml-3 flex-1 md:flex md:justify-between text-sm">
            @if(isset($title))
                <h3 class="text-sm font-medium {{$colors[3]}}">{{$title}}</h3>
            @endif
            <div class="{{$colors[2]}}">
                {{$slot}}
            </div>
            @if(!empty($secondary))
                <div class="ml-auto">
                    {{$secondary}}
                </div>
            @endif
        </div>
    </div>
</div>

<div {{$attributes->except('icon', 'color', 'secondary')->merge(['class' => "rounded-md bg-$color-50 p-4 mb-2"])}}>
    <div class="flex">
        @if(!empty($icon))
            <div class="flex-shrink-0">
                <x-icon :icon="$icon" class="h-5 w-5 text-{{$color}}-400" />
            </div>
        @endif
        <div class="ml-3 flex-1 md:flex md:justify-between text-sm">
            <div class="text-{{$color}}-700">
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

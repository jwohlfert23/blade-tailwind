@php
    $index = $index ?? 0;
@endphp
<li class="{{$index > 0 ? 'border-t border-gray-200' : ''}}">
    @if(isset($href)) <a
        {{$attributes->only('href', 'onClick')}}
        class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out"
    >  @endif
        <div class="flex items-center px-4 py-4 sm:px-6">
            <div class="min-w-0 flex-1 flex items-center space-x-4">

                @if(!empty($avatar))
                    <div class="flex-shrink-0">
                        {{$avatar}}
                    </div>
                @endif

                <div class="min-w-0 flex-1">
                    <div>
                        {{$primary}}
                    </div>

                    @if(!empty($secondary))
                        <div class="text-gray-500">
                            {{$secondary}}
                        </div>
                    @endif
                </div>
            </div>

            @if(!empty($withChevron))
                <div>
                    <x-icon icon="chevron-right" mode="solid" class="h-5 w-5 text-gray-400" />
                </div>
            @endif
        </div>
        @if(isset($href)) </a> @endif
</li>

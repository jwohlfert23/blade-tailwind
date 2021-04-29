@php
    $index = $index ?? 0;
@endphp
<li class="{{$index > 0 ? 'border-t border-gray-200' : ''}}">
    @if(isset($href)) <a
        {{$attributes->only('href', 'onClick')}}
        class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out"
    >  @endif
        <div class="flex items-center px-4 py-4 sm:px-6">
            <div class="min-w-0 flex-1 flex items-center">

                @if(!empty($avatar))
                    <div class="flex-shrink-0">
                        {{$avatar}}
                    </div>
                @endif

                <div class="min-w-0 flex-1 px-4">
                    <div>
                        {{$primary}}
                    </div>

                    @if(!empty($secondary))
                        <div class="hidden md:block">
                            {{$secondary}}
                        </div>
                    @endif
                </div>
            </div>

            @if(!empty($withChevron))
                <div>
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            fillRule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clipRule="evenodd"
                        />
                    </svg>
                </div>
            @endif
        </div>
        @if(isset($href)) </a> @endif
</li>

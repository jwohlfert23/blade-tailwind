<li id="radiogroup-option-{{$value}}"
    tabindex="0"
    role="radio"
    aria-checked="{{$selected ? 'true' : 'false'}}"
    {{$attributes->whereStartsWith(['wire:', 'title'])}}
    class="group mb-2 relative bg-white rounded-lg shadow-sm cursor-pointer focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-primary">
    <div class="rounded-lg border border-gray-300 bg-white px-6 py-4 hover:border-gray-400 sm:flex sm:justify-between">
        <div class="flex items-center">
            <div class="w-4 h-4 flex items-center justify-center h-4 rounded-full border mr-2 -ml-1 text-white {{$selected ? 'border-primary bg-primary' : 'bg-white'}}">
                <div class="w-1 h-1 bg-white rounded-full"></div>
            </div>
            <div class="text-sm">
                <p class="font-medium text-gray-900">
                    {{$slot}}
                </p>
                @if(!empty($description))
                    <div class="text-gray-500">
                        {{$description}}
                    </div>
                @endif
            </div>
        </div>
        @if(!empty($secondary))
            <div class="mt-2 flex text-sm sm:mt-0 sm:block sm:ml-4 sm:text-right">
                <div class="font-medium text-gray-900">{{$secondary}}</div>
            </div>
        @endif
    </div>
    <div class="{{!empty($selected) ? 'border-primary' : 'border-transparent'}} absolute inset-0 rounded-lg border-2 pointer-events-none"
         aria-hidden="true"></div>
</li>

<div
    class="fixed z-10 inset-0 overflow-y-auto"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
    x-show="{{$isOpenVar ?? 'isOpen'}}"
    x-cloak
>
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div
            x-show="{{$isOpenVar ?? 'isOpen'}}"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            aria-hidden="true"
        ></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div
            x-show="{{$isOpenVar ?? 'isOpen'}}"
            @click.away="{{$isOpenVar ?? 'isOpen'}} = false"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:{{$width ?? 'max-w-sm'}} sm:w-full sm:p-6"
        >
            @if(!empty($title))
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-6">
                    {{$title}}
                </h3>
            @endif
            <div>
                {{$slot}}
            </div>
            @if(!empty($actions))
                <div class="mt-5 sm:mt-6">
                    {{$actions}}
                </div>
            @endif
        </div>
    </div>
</div>

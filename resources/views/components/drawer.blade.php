<?php $isOpenVar = $isOpenVar ?? 'isOpen' ?>
<section
    class="fixed inset-y-0 right-0 pl-2 max-w-full flex"
    x-cloak
    x-show="{{$isOpenVar}}"
    @click.away="{{$isOpenVar}} = false"
>
    <div
        class="w-screen max-w-lg"
        x-show="{{$isOpenVar}}"
        x-on:swiped-right="close"
        x-transition:enter="transform transition ease-in-out duration-500"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transform transition ease-in-out duration-500"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
    >
        <div class="h-full flex flex-col py-6 bg-white shadow-xl overflow-y-scroll">
            @if(!empty($title))
                <header class="px-6 mb-4">
                    <div class="flex items-start justify-between space-x-3">
                        <h2 class="text-xl leading-7 font-medium text-gray-900">
                            {{$title}}
                        </h2>
                        <div class="h-7 flex items-center">
                            <button
                                class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150"
                                x-on:click="{{$isOpenVar}} = false"
                            >
                                <x-icon icon="x" class="w-6 h-6 fill-current" />
                            </button>
                        </div>
                    </div>
                </header>
            @endif

            {{$slot}}
        </div>
    </div>
</section>

@php
    $modelVar = $modelVar ?? 'selectedTab';
    $variant = $variant ?? 'tabs';
@endphp
<div {{$attributes->except(['tabs', 'variant', 'modelVar'])}}>
    <div class="sm:hidden">
        <select
            x-model="{{$modelVar}}"
            aria-label="Selected tab"
            class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 transition ease-in-out duration-150"
        >
            @foreach($tabs as $t)
                <option value="{{$t['key']}}">{{$t['label']}}</option>
            @endforeach
        </select>
    </div>
    <div class="hidden sm:block">
        @if($variant === 'pills')
            <nav class="flex space-x-4">
                @foreach($tabs as $index => $tab)
                    <a
                        href="#"
                        x-on:click="{{$modelVar}} = '{{$tab['key']}}'"
                        class="px-3 py-2 font-medium text-sm leading-5 rounded-md focus:outline-none"
                        :class="{
                            'text-gray-500 hover:text-gray-700': {{$modelVar}} !== '{{$tab['key']}}',
                            'text-gray-700 bg-gray-100': {{$modelVar}} === '{{$tab['key']}}',
                        }"
                    >
                        {{$tab['label']}}
                    </a>
                @endforeach
            </nav>
        @else
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8">
                    @foreach($tabs as $index => $tab)
                        <a
                            href="#"
                            x-on:click="{{$modelVar}} = '{{$tab['key']}}'"
                            class="whitespace-no-wrap py-4 px-1 border-b-2 font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 focus:outline-none"
                            :class="{
                                'border-transparent': {{$modelVar}} !== '{{$tab['key']}}',
                                'border-primary': {{$modelVar}} === '{{$tab['key']}}',
                            }"
                        >
                            {{$tab['label']}}
                        </a>
                    @endforeach
                </nav>
            </div>
        @endif
    </div>
</div>

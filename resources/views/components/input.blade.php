<x-form-group {{$attributes->only(['label', 'name', 'id'])}}>
    <input
        {{$attributes->whereStartsWith(['wire:', 'placeholder'])}}
        id="{{$name}}"
        name="{{$name}}"
        type="{{$type ?? 'text'}}"
        value="{{$value ?? old($name)}}"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 {{$class ?? ''}}"
        @if(isset($disabled))
        disabled
        @endif
    />
</x-form-group>

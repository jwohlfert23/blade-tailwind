<x-form-group {{$attributes->only(['label', 'name', 'id'])}}>
    <select {{$attributes->whereStartsWith(['wire:', 'name', 'id'])}} class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 {{$class ?? ''}}">
        {{$slot}}
    </select>
</x-form-group>

@php
    $errorClass = isset($errors) && $errors->has($name) ? 'has-error' : '';
@endphp
<div {{$attributes->merge(['class' => 'mb-4 w-full '. $errorClass])}}>
    @if(isset($label))
        <x-label for="{{$name}}-field" id="{{$name}}-label">{{$label}}</x-label>
    @endif
    {{$slot}}
    @if(isset($help))
        <x-help id="{{$name}}-help">{{$help}}</x-help>
    @endif
    @error($name)
    <x-error id="{{$name}}-error">{{$message}}</x-error>
    @enderror
</div>

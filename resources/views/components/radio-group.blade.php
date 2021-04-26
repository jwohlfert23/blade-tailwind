<fieldset {{$attributes->except('label', 'id')}}>
    <legend id="{{$id ?? 'radiogroup'}}-label" class="sr-only">
        {{$label}}
    </legend>
    <ul role="radiogroup" aria-labelledby="{{$id ?? 'radiogroup'}}-label">
        {{$slot}}
    </ul>
</fieldset>

<select
    id="{{ $field['name'] }}"
    name="{{ $field['name'] }}"
    class="form-control select2"
    @if($field['options']['required']) required @endif
    @if($field['options']['readonly']) readonly @endif
>
    @foreach($field['values'] as $choice)
        <option
            @if (null != $choice['value']) value="{{ $choice['value'] }}" @endif
            {{ $choice['value'] == $field['options']['value'] ? 'selected' : '' }}
        >
            {{ $choice['text'] }}
        </option>
    @endforeach
</select>
@include('tekton::components.hint')
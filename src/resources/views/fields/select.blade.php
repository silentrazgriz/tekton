<select
        id="{{ $field['name'] }}"
        name="{{ $field['name'] }}"
        class="form-control"
        @if($field['options']['required']) required @endif>
    @foreach($field['values'] as $choice)
        <option value="{{ $choice['value'] }}">{{ $choice['text'] }}</option>
    @endforeach
</select>
@include('tekton::components.hint')
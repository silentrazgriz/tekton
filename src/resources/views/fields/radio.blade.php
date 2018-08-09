@foreach($field['values'] as $index => $choice)
    <label class="form-radio {{ $field['options']['inline'] ? 'form-inline' : '' }}">
        <input
            type="radio"
            name="{{ $field['name'] }}"
            value="{{ $choice['value'] }}"
            {{ $field['options']['value'] == $choice['value'] ||
                ($field['options']['value'] == null && $choice['checked']) ? 'checked' : '' }}
        />
        <i class="form-icon"></i> {{ $choice['text'] }}
    </label>
@endforeach
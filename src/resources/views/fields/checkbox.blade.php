@foreach($field['values'] as $index => $choice)
    <label class="form-checkbox {{ $field['options']['inline'] ? 'form-inline' : '' }}">
        <input
            type="checkbox"
            name="{{ $field['name'] }}"
            value="{{ $choice['value'] }}"
            {{ $field['options']['value'] == $choice['value'] ||
                ($field['options']['value'] == null && $choice['checked']) ? 'checked' : '' }}
        />
        <i class="form-icon"></i> {{ $choice['text'] }}
    </label>
@endforeach
<input
    type="number"
    id="{{ $field['name'] }}"
    name="{{ $field['name'] }}"
    value="{{ $field['options']['value'] ?? '' }}"
    class="form-input"
    placeholder="{{ $field['options']['placeholder'] }}"
    @if($field['options']['required']) required @endif
/>
<div class="form-input-hint">{{ $field['options']['helper'] ?? '' }}</div>
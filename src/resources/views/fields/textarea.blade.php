<textarea
    id="{{ $field['name'] }}"
    name="{{ $field['name'] }}"
    class="form-input"
    placeholder="{{ $field['options']['placeholder'] }}"
    @if($field['options']['required']) required @endif
>
    {{ $field['options']['value'] ?? '' }}
</textarea>
<div class="form-input-hint">{{ $field['options']['helper'] ?? '' }}</div>
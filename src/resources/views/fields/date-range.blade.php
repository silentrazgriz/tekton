<input
        type="text"
        id="{{ $field['name'] }}"
        name="{{ $field['name'] }}"
        value="{{ $field['options']['value'] ?? '' }}"
        class="form-control tekton-date-range"
        placeholder="{{ $field['options']['placeholder'] }}"
        @if($field['options']['required']) required @endif
/>
@include('tekton::components.hint')
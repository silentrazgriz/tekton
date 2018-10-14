<div class="custom-file">
    <input
        type="file"
        id="{{ $field['name'] }}"
        name="{{ $field['name'] }}"
        class="custom-file-input tekton-file-upload"
        @if($field['options']['required']) required @endif
        @if($field['options']['readonly']) readonly @endif
        data-filename="#tekton-filename-{{ $field['name'] }}"
    />
    <label class="custom-file-label" id="tekton-filename-{{ $field['name'] }}" for="{{ $field['name'] }}">Choose file</label>
</div>
@include('tekton::components.hint')
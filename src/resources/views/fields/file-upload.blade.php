<div class="custom-file">
    <input
        type="file"
        id="{{ $field['name'] }}"
        name="{{ $field['name'] }}"
        class="custom-file-input tekton-file-upload"
        @if($field['options']['required']) required @endif
        @if($field['options']['readonly']) readonly @endif
        data-target="#{{ $field['name'] }}-filename"
    />
    <label class="custom-file-label" id="{{ $field['name'] }}-filename" for="{{ $field['name'] }}">Choose file</label>
</div>
@include('tekton::components.hint')
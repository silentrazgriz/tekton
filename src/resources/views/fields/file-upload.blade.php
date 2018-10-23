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
<div class="tekton-preview mt-3 {{ isset($field['options']['value']) && !empty($field['options']['value']) ? 'tekton-show-preview' : '' }}">
    <a href="{{ asset($field['options']['value']) }}" class="btn btn-sm btn-primary">
        <i class="fas fa-download"></i> {{ ucwords(str_replace('_', ' ', $field['name'])) }}
    </a>
</div>
@include('tekton::components.hint')
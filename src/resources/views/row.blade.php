<div id="form-row-{{ $row['id'] }}" class="form-horizontal col-12">
    <div class="form-group">
        <div class="{{ $row['options']['style']['label'] }} col-sm-12">
            <label class="form-label">{{ $row['options']['label'] ? $row['label'] : '' }}</label>
        </div>
        <div class="{{ $row['options']['style']['input'] }} col-sm-12">
            @foreach($row['fields'] as $field)
                <div class="{{ $field['options']['style'] }}">
                    @include('tekton::fields.' . $field['type'], ['field' => $field])
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="columns">
    <div class="{{ $tekton['options']['style'] }}">
        <form
                @if(null != $tekton['id']) id="{{ $tekton['id'] }}" @endif
                method="{{ $tekton['method'] }}"
                action="{{ $tekton['url'] }}"
                class="tekton-form"
        >
            @csrf
            @include('tekton::buttons.group.top', ['button' => $tekton['options']['button']])
            <h3 class="column {{ $tekton['options']['labelAlign'] }}">{{ $tekton['title'] }}</h3>
            @foreach($tekton['rows'] as $row)
                @include('tekton::row', ['row' => $row])
            @endforeach
            @include('tekton::buttons.group.bottom', ['button' => $tekton['options']['button']])
        </form>
    </div>
</div>

@section('tekton-styles')
    @php($tektonStyles = [])
    @foreach(config('tekton.load-styles') as $style)
        @if (!in_array($style, $tektonStyles))
            @php(array_push($tektonStyles, $style))
            <link rel="stylesheet" href="{{ asset($style) }}"/>
        @endif
    @endforeach
@endsection

@section('tekton-scripts')
    @php($tektonScripts = [])
    @foreach(config('tekton.load-scripts') as $script)
        @if (!in_array($script, $tektonScripts))
            @php(array_push($tektonScripts, $script))
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endif
    @endforeach
    @foreach($tekton['rows'] as $row)
        @foreach($row['fields'] as $field)
            @if (config('tekton.scripts.' . $field['type']) && !in_array($field['type'], $tektonScripts))
                @php(array_push($tektonScripts, $field['type']))
                <script src="{{ asset('vendor/tekton/js/' . $field['type'] . '.js') }}" type="text/javascript"></script>
            @endif
        @endforeach
    @endforeach
@endsection
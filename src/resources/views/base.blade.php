<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Tekton' }}</title>
    @yield('tekton-styles')
    @yield('styles')
</head>
<body>
    @include('tekton::components.loading')
    <div class="container">
        @yield('content')
    </div>
    @yield('tekton-scripts')
    @yield('scripts')
</body>
</html>
<!--compiled css-->
<link rel="stylesheet" href="{{ elixir('css/all.css') }}" />

<!--extra css-->
@if(isset($css))
    @foreach($css as $file)
        <link rel="stylesheet" href="{{ asset($file) }}" />
    @endforeach
@endif

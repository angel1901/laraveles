{{-- layout.common.head --}}
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Comunidad de Laravel en Español - Laraveles</title>
<meta name="csrf_token" content="{{ csrf_token() }}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

<!-- Styles -->
<link href="{{ elixir('css/app.css') }}" rel="stylesheet">

<!-- Injected Scripts -->
<script>
    @section ('scripts')
        window.csrfToken = '{{ csrf_token() }}';
    @show
</script>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ярмарка проектов</title>

    <script type="module" crossorigin src="{{ asset('assets/index.js') }}"></script>
    <link rel="modulepreload" href="{{ asset('assets/vendor.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/index3.css') }}">
	 
</head>

<body class="antialiased">
    <div id="app"></div>
</body>

</html>
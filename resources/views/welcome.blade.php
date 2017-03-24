<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }}' };
        </script>
        <div class="container-fluid space-inside-sides-xl bg-main">
            @include('partials.navigation')
        </div>
        <div id="app">
            @include('partials.banner');
        </div>

        <script type="text/javascript" src="/js/vue.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>

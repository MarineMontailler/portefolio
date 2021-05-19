<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portefolio </title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">
        <link href="{{ asset('css/portefolio.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <section id="app">
            <!-- Got to VueJS componants : -->
            <layout-component></layout-component>
        </section>
        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>

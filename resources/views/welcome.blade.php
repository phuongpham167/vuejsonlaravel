<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            <example></example>

            <my-component></my-component>

            <user-dashboard></user-dashboard>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
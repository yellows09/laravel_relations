<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
    @section('nav')
    <div class="topnav">
        <a class="active" href="/home">Home</a>
        <a href="/one-to-one">One to one</a>
        <a href="/one-to-many">One to many</a>
        <a href="/many-to-many">Many to many</a>
    </div>
    @endsection
    </body>
</html>

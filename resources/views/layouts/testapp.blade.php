<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name' , 'Laravel8')}}</title>

       
    </head>
    <body>
        @yield('content')
    </body>
</html>

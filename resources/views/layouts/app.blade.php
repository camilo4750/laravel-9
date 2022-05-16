<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Camilo - @yield('title')</title>
    <meta name="descritption" content="@yield('meta-description', 'Default meta description')">
  </head>
<body>
  @include('partials.navegation')
    {{--contenido variable de cada pagina--}} 
    @yield('content')
</body>
</html>
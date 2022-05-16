<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Camilo - {{ $title }}</title>
    <meta name="descritption" content="{{ $metaDescription ?? 'Description Default' }}">
  </head>
<body>
    <x-layouts.navegation />
    {{ $slot }}
</body>
</html>
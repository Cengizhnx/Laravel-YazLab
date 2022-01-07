<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profilim</title>

    </head>
<body>

    @include('firebase.contact.profile')
    <div>
        @yield('content')
    </div>

</body>
</html>
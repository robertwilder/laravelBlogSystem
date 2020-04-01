<!-- blade is the html tempting process for laravel -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{'css/app.css'}}">
    <link rel="stylesheet" href="../{{'css/app.css'}}"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <!-- this needs to be gone back to and assessed -->
    <title>Document</title>
</head>
<body>
    @include('navbar')
    @yield('content')
</body>
</html>
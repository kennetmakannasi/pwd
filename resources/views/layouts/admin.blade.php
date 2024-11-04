<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <x-head></x-head>
</head>
<body class="bg-gradient-to-b from-indigo-950 to-blue-400">
    <div class="inline-flex">
        <x-navbaradmin></x-navbaradmin>
        <div class="ml-16 bg-indigo-950 rounded-2xl mt-28">
            <div class="m-10">
                @yield('content')
            </div>
        </div>  
    </div>
    <div class="h-72"></div>  
</body>
</html>
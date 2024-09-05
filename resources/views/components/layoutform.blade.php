<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<div class="relative">
    <h1 class="text-white text-4xl font-semibold ml-16 absolute">{{ $header }}</h1>
</div>
<body class="bg-gradient-to-b from-indigo-950 to-blue-400">
    <div class="flex justify-center mb-5 mt-10">
     <x-application-logo class=" fill-current text-gray-500" />    
    </div>
    
    <div class="flex justify-center">
       
        <div class="w-[700px] h-full bg-gradient-to-b from-indigo-900 to-indigo-400 rounded-t-lg rounded-b-xl">
            <div class="w-full h-3 bg-gray-300 rounded-t-lg"></div>
            <div class=" mt-8">
                <div>
                    {{ $slot }}
                </div>    
            </div>
    </div>    
    </div>
    <div class="h-52"></div>
</body>
</html>
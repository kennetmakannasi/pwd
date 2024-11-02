<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <x-head></x-head>
</head>
<body>
    <img class="w-40" src="{{ asset($userdata->fp)  }}" alt="">
    <p>{{ $userdata->name }}</p>

    <form action="{{ route('pwd.profileupdate',['user'=> $userdata]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="text" name="name" value={{ $userdata->name }}>
        <input type="text" name="email" value={{ $userdata->email }}>
        <input type="file" name="fp" id="fp">

        <button type="submit">edit</button>
    </form>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <input type="submit" value="Log Out">
    </form>
</body>
</html>
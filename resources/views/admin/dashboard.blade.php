<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <x-head></x-head>
</head>
<body>
    <a href="/userdata">tabel</a>
    <h1>Selamat Datang {{ Auth::user()->name }}</h1>
    <p>Jumlah User: {{ $usercount }}</p>
    <p>Jumlah Buku: {{ $bookcount }}</p>
</body>
</html>
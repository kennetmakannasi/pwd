<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UserData</title>
    <x-head></x-head>
</head>
<body>
    <a href="/admin_dashboard">dashboard</a>
    <table class=" border-2 border-black">
        <tr class=" border-2 border-black">
            <th>Nama</th>
            <th>Email</th>
            <th>Admin</th>
        </tr>
        @foreach ($user as $userdata)
            <tr class=" border-2 border-black">
                <td>{{ $userdata->name }}</td>
                <td>{{ $userdata->email }}</td>
                <td>{{ $userdata->admin }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
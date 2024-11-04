@extends('layouts.admin')

@section('title','userdata')

@section('content')
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
@endsection
    

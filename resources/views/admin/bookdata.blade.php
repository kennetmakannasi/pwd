@extends('layouts.admin')

@section('title')

@section('content')
<a href="/admin_dashboard">dashboard</a>
<table class=" border-2 border-black">
    <tr class=" border-2 border-black">
        <th>Id</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Sampul</th>
        <th>File</th>
        <th>Penulis</th>
        <th>Warna Preview BG</th>
        <th>Tanggal Dibuat</th>
        <th>Terakhir Di Update</th>
        <th colspan="2">Aksi</th>
    </tr>
    @foreach ($book as $data)
        <tr class=" border-2 border-black">
            <td>{{ $data->id }}</td>
            <td>{{ $data->judul }}</td>
            <td>{{ $data->kategori }}</td>
            <td><img class="w-56" src="{{ asset($data->sampul) }}" alt=""></td>
            <td><a href="{{ asset($data->file) }}">{{ $data->file }}</a></td>
            <td>{{ $data->penulis }}</td>
            <td>{{ $data->previewbg }}</td>
            <td>{{ $data->created_at }}</td>
            <td>{{ $data->updated_at }}</td>
            <td><button><a href="{{ route('admin.editbook',['book'=>$data]) }}">Edit</a></button></td>
            <td>
                <form class="deleteform" action="{{ route('admin.deletebook',['book'=>$data]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="deletebutton">hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<script>
    $('.deletebutton').click(function (event){
        event.preventDefault(); 

        var form = $(this).closest('form.deleteform');

        Swal.fire({
            title: 'Apakah Anda Yakin Ingin Menghapus Buku Ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            };
        });
    });
</script>
@endsection
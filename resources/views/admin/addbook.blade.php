@extends('layouts.admin')

@section('title','addbook')

@section('content')
    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        
        <div>
            <label for="judul">Masukan Judul</label>
            <input type="text" name="judul" id="judul">    
        </div>
        <div>
            <label for="kategori">Masukan Kategori</label>
            <input type="text" name="kategori" id="kategori">    
        </div>
        <div>
            <label for="sampul">Masukan Sampul</label>
            <input type="file" name="sampul" id="sampul">    
        </div>
        <div>
            <label for="file">Masukan File Buku (pdf)</label>
            <input type="file" name="file" id="file">    
        </div>
        <div>
            <label for="penulis">Masukan Nama Penulis</label>
            <input type="text" name="penulis" id="penulis">    
        </div>
        <div>
            <label for="previewbg">Masukan Kode Gradient Tailwind</label>
            <input type="text" name="previewbg" id="previewbg" value="bg-gradient-to-b from-amber-400 to-green-300">    
        </div>
        
        <button type="submit">Tambah</button>
        
    </form>
@endsection

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditBook</title>
</head>
<body>
    <form action="{{ route('admin.updatebook',['book'=>$book]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div>
            <label for="judul">Masukan Judul</label>
            <input type="text" name="judul" id="judul" value="{{ $book->judul }}">    
        </div>
        <div>
            <label for="kategori">Masukan Kategori</label>
            <input type="text" name="kategori" id="kategori" value="{{ $book->kategori }}">    
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
            <input type="text" name="penulis" id="penulis" value="{{ $book->penulis }}">    
        </div>
        <div>
            <label for="previewbg">Masukan Kode Gradient Tailwind</label>
            <input type="text" name="previewbg" id="previewbg" value="{{ $book->previewbg }}">    
        </div>
        
        <button type="submit">edit</button>
        
    </form>
</body>
</html>
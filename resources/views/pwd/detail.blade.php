<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
         $("#save").click(function(){
             $("#save").hide();
             $('#saved').show();
           });
         $('#saved').click(function(){
             $("#saved").hide();
             $("#save").show();
         })
        })
     </script>
</head>
<body class="bg-gradient-to-b from-indigo-950 to-blue-400">
     <!--navbar-->
    <x-navbar></x-navbar>

    <!--header-->
    <div class="relative">
        <img class="h-[450px] w-full object-cover" src="{{ asset('img/buku/'.$book->sampul ) }}" alt="">
        <div class="w-full blur-3xl bg-black h-full inset-0 absolute opacity-70">
        </div>
        <div class="absolute inset-0 flex justify-center ">
            <img class=" h-80 w-52 mt-10 object-cover" src="{{ asset('img/buku/'.$book->sampul ) }}" alt="">
        </div>
    </div>

    <!--judul dan nama user-->
    <div class="mt-3">
    <div class="flex justify-center">
        <h1 class="text-3xl text-white font-semibold">{{ $book->judul }}</h1>
    </div>
    <div class="flex justify-center mt-3">
     <div class="float-start">
        <img class="w-12 rounded-3xl absolute" src="img/pp.png" alt="">
        <div class="ml-14 mt-3">
            <p class="text-white">NamaUser</p>
        </div>
    </div>    
    </div>    
    <div class="flex justify-center mt-8">
        <div>
            <button class="text-xl font-semibold px-12 py-3 bg-gray-300 rounded-md hover:bg-gray-400"><a href="/img/pdf/{{ $book->file }}">Mulai Membaca</a></button>
        </div>
        <div class="relative">
            <button id="saved" class=" bg-gray-300 p-2 absolute ml-4 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="2.3em" height="2.3em" viewBox="0 0 24 24"><path fill="currentColor" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/></svg>
            </button>
            <button id="save" class=" bg-gray-300 p-2 absolute ml-4 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="2.3em" height="2.3em" viewBox="0 0 24 24"><path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/></svg>
            </button>
        </div>
    </div>
    </div>

    <!--genre dan deskripsi-->
    <div class="flex justify-center mt-10">
    <div class="max-w-[1200px]">
        <h1 class="text-lg font-semibold text-white">Genres</h1>
        <div class="inline-flex">
            <div class="bg-gray-300 h-6 w-28 text-center rounded-xl mr-2 hover:bg-gray-400">
                <p class="font-semibold text-lg">{{ $book->kategori }}</p>
            </div>
            <div class="bg-gray-300 h-6 w-28 text-center rounded-xl mr-2 hover:bg-gray-400">
                <p class="font-semibold text-lg">lorem</p>
            </div>
            <div class="bg-gray-300 h-6 w-28 text-center rounded-xl hover:bg-gray-400">
                <p class="font-semibold text-lg">lorem</p>
            </div>
        </div>

        <div>
            <p class="text-lg text-white mt-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, dolorem nihil quod fugit eum facere tempore aspernatur ea temporibus, vel excepturi, aut aliquam veritatis sapiente dolorum rem est quidem officiis!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum eos commodi, delectus illum aut esse quam, voluptates ad obcaecati unde dolore, non minima. Aperiam cumque enim provident deserunt, laborum beatae?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi repellendus nulla, a distinctio consequuntur cupiditate voluptates adipisci! Sint modi fugit cumque optio aperiam, quo ad voluptatibus dignissimos. Distinctio, nobis sequi.
            </p>
        </div>

        <div class="mt-20">
        <h1 class="text-lg font-semibold text-white">Author</h1>
        <div>
            <div class="bg-black py-2 w-28 text-center  mr-2 hover:bg-gray-900">
                <p class="font-semibold text-lg text-white">{{ $book->penulis }}</p>
            </div>
        </div>    
        </div>

        <div class="mt-3">
            <h1 class="text-lg font-semibold text-white">Artist</h1>
            <div>
                <div class="bg-black py-2 w-28 text-center  mr-2 hover:bg-gray-900">
                    <p class="font-semibold text-lg text-white">Kinan</p>
                </div>
            </div>    
            </div>
        
    </div>    
    </div>
    
   <div class="h-52"></div>
   
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <x-head></x-head>
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
        <img class="h-[450px] w-full object-cover" src="{{ asset($book->sampul ) }}" alt="">
        <div class="w-full blur-3xl bg-black h-full inset-0 absolute opacity-70">
        </div>
        <div class="absolute inset-0 flex justify-center ">
            <img class=" h-80 w-52 mt-10 object-cover" src="{{ asset($book->sampul ) }}" alt="">
        </div>
    </div>

    <!--judul dan nama user-->
    <div class="mt-3">
    <div class="flex justify-center">
        <h1 class="text-3xl text-white font-semibold">{{ $book->judul }}</h1>
    </div>
    <div class="flex justify-center mt-3">
     <div class="float-start">
        <img class="w-12 h-12 rounded-3xl absolute object-cover" src="{{ asset(Auth::user()->fp) }}" alt="">
        <div class="ml-14 mt-3">
            <p class="text-white">{{ Auth::user()->name }}</p>
        </div>
    </div>    
    </div>    
    <div class="flex justify-center mt-8">
        <a href="{{ asset($book->file) }}">
         <div class=" relative w-60 h-28 flex justify-center">
            <button class=" w-60 h-14 bg-gray-300 rounded-md hover:bg-gray-400 opacity-35"></button>
            <p class="absolute top-3 text-xl font-semibold text-white">MULAI MEMBACA</p>
        </div>    
        </a>
       
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
            <div class="relative h-8 w-36 flex justify-center">
            <div class="bg-black h-8 w-36 text-center rounded-full mr-2 hover:bg-gray-500 opacity-25">
            </div>
            <p class="font-semibold text-lg text-white absolute top-0">{{ $book->kategori }}</p>    
            </div>
            
        </div>

        <div class="bg-gradient-to-b from-[#1C3383] to-blue-700 p-4 mt-7 rounded-md">
            <h1 class="text-white text-3xl">{{ Str::limit($book->judul, '50') }}</h1>
            <p class="text-lg text-white mt-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, dolorem nihil quod fugit eum facere tempore aspernatur ea temporibus, vel excepturi, aut aliquam veritatis sapiente dolorum rem est quidem officiis!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum eos commodi, delectus illum aut esse quam, voluptates ad obcaecati unde dolore, non minima. Aperiam cumque enim provident deserunt, laborum beatae?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi repellendus nulla, a distinctio consequuntur cupiditate voluptates adipisci! Sint modi fugit cumque optio aperiam, quo ad voluptatibus dignissimos. Distinctio, nobis sequi.
            </p>
        </div>

        <div class="mt-20">
        <h1 class="text-lg font-semibold text-white">Author</h1>
        <div class=" relative w-28 h-12 flex justify-center">
            <div class=" w-28 h-12 bg-gray-300 rounded-md hover:bg-gray-400 opacity-35"></div>
            <p class="absolute top-2 font-semibold text-lg text-white">{{$book->penulis}}</p>
        </div> 
        </div>

        <div class="mt-3">
            <h1 class="text-lg font-semibold text-white">Artist</h1>
            <div class=" relative w-28 h-12 flex justify-center">
                <div class=" w-28 h-12 bg-gray-300 rounded-md hover:bg-gray-400 opacity-35"></div>
                <p class="absolute top-2 font-semibold text-lg text-white">{{$book->penulis}}</p>
            </div> 
            </div>
        
    </div>    
    </div>
    
   <div class="h-52"></div>
   
    
</body>
</html>
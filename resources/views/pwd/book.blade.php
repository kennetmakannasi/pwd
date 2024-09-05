<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-indigo-950 to-blue-400">
   <!--navbar-->
   <x-navbar></x-navbar>
   <div class=" text-white bg-slate-300 absolute top-16 ml-[1175px] w-32" id="search_list"></div>
    <div class="mt-10">
        <h1 class="text-white text-3xl font-bold ml-[700px]">Book</h1>
          <p class="text-white font-light text-base mt-3 ml-[550px]">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <div class="ml-16">
    @foreach($book as $data)
    <a href="{{ route('pwd.detail',['book'=>$data] ) }}">
      <div class="inline-flex ml-9 mt-[70px]">
        <div class="{{ $data->previewbg }} h-[340px] w-[230px] mt-5 transition-opacity rounded-lg relative">
          <div class="absolute h-full w-full bg-black rounded-lg opacity-0 hover:opacity-50 transition ease-in-out duration-150">
            <h1 class="text-white flex justify-center text-2xl mt-36 font-semibold text-center px-5">{{ $data->judul }}</h1></div>
          <div class="flex justify-center">
             <img class=" rounded-md  mt-8 w-36 object-cover h-64" src="{{ asset('img/buku/'.$data->sampul) }}" alt="">
          </div>
        </div>
    </div>
  </a>
    @endforeach  
    </div>
    
    
    <!--
    <div class="inline-flex ml-[80px] mt-[80px]">
        <div class="bg-gradient-to-b from-amber-800 to-zinc-900 h-[290px] w-[250px]">
          <img class="p-8 w-52 ml-4" src="img/buku/025dd125-3874-4d7e-84a7-f68acb9ec069.jpg" alt="">
          <div class="bg-slate-50">
          <h1 class="text-black font-bold ml-[70px]">Lorem ipsum</h1>
            <p class="text-black font-light text-base mt-3 ml-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div> 

    <div class="inline-flex ml-[80px] mt-[80px]">
        <div class="bg-gradient-to-b from-amber-800 to-zinc-900 h-[290px] w-[250px]">
          <img class="p-8 w-52 ml-4" src="img/buku/025dd125-3874-4d7e-84a7-f68acb9ec069.jpg" alt="">
          <div class="bg-slate-50">
          <h1 class="text-black font-bold ml-[70px]">Lorem ipsum</h1>
            <p class="text-black font-light text-base mt-3 ml-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

    <div class="inline-flex ml-[80px] mt-[80px]">
        <div class="bg-gradient-to-b from-amber-800 to-zinc-900 h-[290px] w-[250px]">
          <img class="p-8 w-52 ml-4" src="img/buku/025dd125-3874-4d7e-84a7-f68acb9ec069.jpg" alt="">
          <div class="bg-slate-50">
          <h1 class="text-black font-bold ml-[70px]">Lorem ipsum</h1>
            <p class="text-black font-light text-base mt-3 ml-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

    <div class="inline-flex ml-[110px] mt-[130px]">
        <div class="bg-gradient-to-b from-amber-800 to-zinc-900 h-[290px] w-[250px]">
          <img class="p-8 w-52 ml-4" src="img/buku/025dd125-3874-4d7e-84a7-f68acb9ec069.jpg" alt="">
          <div class="bg-slate-50">
          <h1 class="text-black font-bold ml-[70px]">Lorem ipsum</h1>
            <p class="text-black font-light text-base mt-3 ml-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
    <div class="inline-flex ml-[80px] mt-[80px]">
        <div class="bg-gradient-to-b from-amber-800 to-zinc-900 h-[290px] w-[250px]">
          <img class="p-8 w-52 ml-4" src="img/buku/025dd125-3874-4d7e-84a7-f68acb9ec069.jpg" alt="">
          <div class="bg-slate-50">
          <h1 class="text-black font-bold ml-[70px]">Lorem ipsum</h1>
            <p class="text-black font-light text-base mt-3 ml-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

    <div class="inline-flex ml-[80px] mt-[80px]">
        <div class="bg-gradient-to-b from-amber-800 to-zinc-900 h-[290px] w-[250px]">
          <img class="p-8 w-52 ml-4" src="img/buku/025dd125-3874-4d7e-84a7-f68acb9ec069.jpg" alt="">
          <div class="bg-slate-50">
          <h1 class="text-black font-bold ml-[70px]">Lorem ipsum</h1>
            <p class="text-black font-light text-base mt-3 ml-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

    <div class="inline-flex ml-[80px] mt-[80px]">
        <div class="bg-gradient-to-b from-amber-800 to-zinc-900 h-[290px] w-[250px]">
          <img class="p-8 w-52 ml-4" src="img/buku/025dd125-3874-4d7e-84a7-f68acb9ec069.jpg" alt="">
          <div class="bg-slate-50">
          <h1 class="text-black font-bold ml-[70px]">Lorem ipsum</h1>
            <p class="text-black font-light text-base mt-3 ml-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>    
!-->
    <div class="h-52"></div>
</body>
</html>
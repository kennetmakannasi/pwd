<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
<div class="bg-cover bg-gradient-to-b from-indigo-950 to-blue-400">

<!--navbar-->
<x-navbar></x-navbar>

    <!--slider-->
    <div class="flex justify-center relative">
    <div class="bg-[#262C4B] rounded-lg w-[1350px] h-[460px] mt-10 absolute shadow-lg shadow-gray-500"></div>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @foreach($book as $data)
          <div class="swiper-slide">
            <a href="{{ route('pwd.detail',['book'=>$data] ) }}"> 
              <div class=" relative">
                <div class=" absolute bg-black h-full w-full opacity-0 hover:opacity-50 transition ease-in-out duration-150">
                  <div> 
                    <h1 class="text-white flex justify-center text-2xl mt-36 font-semibold text-center px-5">{{ $data->judul }}</h1>
                  </div>
                </div>
              <img class=" w-[350px] h-[350px] object-cover" src="{{ asset('img/buku/'.$data->sampul) }}" />  
              </div>
            </a>
          </div>
          @endforeach
          </div>
      </div>
     <x-sliderlayout></x-sliderlayout>
    </div>

    <div class=" text-white bg-slate-300 absolute ml-[1175px] w-32 top-16" id="search_list"></div>

  <!--Container-->
  @foreach($book->slice(0,2) as $data)
  <div class="inline-flex ml-20 mt-8">
    <div class="bg-[#262C4B] h-96 w-[635px] relative rounded-md">
      <div class="absolute mt-16 text-2xl ml-60 max-w-96">
        <h1 class="text-white font-semibold">{{ $data->judul }} </h1>
        <p class="text-white text-base">{{ $data->penulis }}</p>
        <p class="text-white text-base mt-16 max-w-80" >{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit', '100') }}</p>
        <button class="bg-gray-300 px-6 py-2 text-lg font-semibold rounded-md mt-3 hover:bg-gray-400"><a href="{{ route('pwd.detail',['book'=>$data] ) }}">Read More</a></button>    
      </div>
      <img class=" w-40 h-60 object-cover mt-14 ml-8 rounded-md" src="{{ asset('img/buku/'.$data->sampul ) }}" alt="">
    </div>
  </div>
  @endforeach
  <div class=" h-36"></div>
</div>
</body>
</html>
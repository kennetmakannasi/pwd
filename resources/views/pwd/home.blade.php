<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <x-head></x-head>
</head>
<body>
<div class="bg-cover bg-gradient-to-b from-indigo-950 to-blue-400">

<!--navbar-->
<x-navbar></x-navbar>

<!--banner-->
<div class ="relative">
  <h2 class = "absolute text-white font-bold text-[50px] mt-[130px] ml-[80px] font-['space_grotesk']">Get acces to every <br> writings from all over <br> the world</h2>
  <img src="{{ asset ('img/headerhome.png')}}" alt="poster" class = " rounded-2xl w-full h-[470px] object-cover">
</div>

    <!--slider-->
    <div class="mt-10 flex justify-center">
      <h1 class="text-white text-3xl font-bold">Recomended For You</h1>
  </div>

    <div class="flex justify-center relative">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @foreach($book as $data)
          <div class="swiper-slide">
            <a href="{{ route('pwd.detail',['book'=>$data] ) }}"> 
              <div class=" relative">
                <div class=" absolute bg-black h-full w-full opacity-0 rounded-lg hover:opacity-50 transition ease-in-out duration-150">
                  <div> 
                    <h1 class="text-white flex justify-center text-2xl mt-36 font-semibold text-center px-5">{{ Str::limit($data->judul, '12')  }}</h1>
                  </div>
                </div>
              <img class=" w-[350px] h-[350px] object-cover rounded-lg" src="{{ asset($data->sampul) }}" />  
              </div>
            </a>
          </div>
          @endforeach
          </div>
      </div>
     <x-sliderlayout></x-sliderlayout>
    </div>

    <div class=" text-white bg-gray-900 absolute ml-[1015px] w-[400px] top-20 rounded-lg px-5">
      <p id="search_list"></p>
    </div>

  <!--Container-->
  @foreach($book->slice(0,2) as $data)
  <div class="inline-flex ml-20 mt-8">
    <div class="bg-[#262C4B] h-96 w-[635px] relative rounded-md">
      <div class="absolute mt-16 text-2xl ml-60 max-w-96">
        <h1 class="text-white font-semibold">{{ Str::limit($data->judul,'25') }} </h1>
        <p class="text-white text-base">{{ $data->penulis }}</p>
        <p class="text-white text-base mt-16 max-w-80" >{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit', '100') }}</p>
        <button class="bg-gray-300 px-6 py-2 text-lg font-semibold rounded-md mt-3 hover:bg-gray-400"><a href="{{ route('pwd.detail',['book'=>$data] ) }}">Read More</a></button>    
      </div>
      <img class=" w-40 h-60 object-cover mt-14 ml-8 rounded-md" src="{{ asset($data->sampul ) }}" alt="">
    </div>
  </div>
  @endforeach
  <div class=" h-36"></div>
</div>
</body>
</html>
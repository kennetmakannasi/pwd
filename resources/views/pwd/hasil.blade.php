<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <x-head></x-head>
</head>
<body class="bg-gradient-to-b from-indigo-950 to-blue-400">
   <!--navbar-->
   <x-navbar></x-navbar>

   <div class=" text-white bg-gray-900 absolute ml-[1115px] w-[190px] top-16 rounded-b-lg">
    <p id="search_list"></p>
  </div>

    <div class="mt-10">
        <h1 class="text-white text-3xl font-bold ml-[700px]">Results</h1>
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
             <img class=" rounded-md  mt-8 w-36 object-cover h-64" src="{{ asset($data->sampul) }}" alt="">
          </div>
        </div>
    </div>
  </a>
    @endforeach  
    </div>
    
    
    
    <div class="h-52"></div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <x-head></x-head>
</head>
<body class="bg-gradient-to-b from-indigo-950 to-blue-400">
    <div class="inline-flex">
        <x-navbaradmin></x-navbaradmin>
        <div class="ml-16 bg-indigo-950 rounded-2xl mt-28">
            <div class="m-10">
                <h1 class="text-white text-2xl font-semibold">Welcome {{ Auth::user()->name }}</h1>
                <div class="inline-flex mt-6">
                    <div class=" max-w-[800px]">
                        @foreach ($book as $books)
                            <div class="inline-flex mb-3">
                                <div class=" text-center">
                                    <img class="w-24 h-40 object-cover rounded-lg m-3" src="{{ asset($books->sampul) }}" alt="">
                                    <p class="text-white">{{Str::limit($books->judul, '10') }}</p>
                                </div>
                            </div>
                        @endforeach    
                    </div>    
                    <div>
                        <div class="bg-[#5669CB] text-xl text-white font-semibold p-6 pr-16 rounded-lg mt-10">
                            <div>
                                <div class="inline-flex">
                                    <svg width="30" height="30" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M33.3332 18.7503C33.3332 20.9605 32.4552 23.0801 30.8924 24.6429C29.3296 26.2057 27.21 27.0837 24.9998 27.0837C22.7897 27.0837 20.6701 26.2057 19.1073 24.6429C17.5445 23.0801 16.6665 20.9605 16.6665 18.7503C16.6665 16.5402 17.5445 14.4206 19.1073 12.8578C20.6701 11.295 22.7897 10.417 24.9998 10.417C27.21 10.417 29.3296 11.295 30.8924 12.8578C32.4552 14.4206 33.3332 16.5402 33.3332 18.7503ZM29.1665 18.7503C29.1665 19.8554 28.7275 20.9152 27.9461 21.6966C27.1647 22.478 26.1049 22.917 24.9998 22.917C23.8948 22.917 22.835 22.478 22.0536 21.6966C21.2722 20.9152 20.8332 19.8554 20.8332 18.7503C20.8332 17.6453 21.2722 16.5854 22.0536 15.804C22.835 15.0226 23.8948 14.5837 24.9998 14.5837C26.1049 14.5837 27.1647 15.0226 27.9461 15.804C28.7275 16.5854 29.1665 17.6453 29.1665 18.7503Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.9999 2.0835C12.3437 2.0835 2.08325 12.3439 2.08325 25.0002C2.08325 37.6564 12.3437 47.9168 24.9999 47.9168C37.6562 47.9168 47.9166 37.6564 47.9166 25.0002C47.9166 12.3439 37.6562 2.0835 24.9999 2.0835ZM6.24992 25.0002C6.24992 29.3543 7.73533 33.3627 10.2249 36.546C11.9738 34.2504 14.2294 32.39 16.8158 31.11C19.4023 29.83 22.2495 29.165 25.1353 29.1668C27.984 29.1635 30.7959 29.8108 33.3564 31.0593C35.917 32.3078 38.1586 34.1245 39.9103 36.371C41.7154 34.0035 42.9308 31.2402 43.4559 28.3097C43.9811 25.3793 43.8008 22.3659 42.9301 19.5189C42.0594 16.6719 40.5233 14.0732 38.4488 11.9377C36.3744 9.8023 33.8213 8.19154 31.0007 7.23872C28.1802 6.28591 25.1732 6.01844 22.2288 6.45844C19.2843 6.89844 16.487 8.03327 14.0682 9.76902C11.6494 11.5048 9.67869 13.7916 8.31915 16.4402C6.9596 19.0887 6.25029 22.023 6.24992 25.0002ZM24.9999 43.7502C20.6956 43.7571 16.5211 42.2763 13.1833 39.5585C14.5266 37.6348 16.3149 36.0641 18.3959 34.9803C20.4769 33.8964 22.789 33.3315 25.1353 33.3335C27.4524 33.3315 29.7364 33.8824 31.7978 34.9404C33.8592 35.9984 35.6383 37.5331 36.9874 39.4168C33.6238 42.2231 29.3804 43.757 24.9999 43.7502Z" fill="white"/>
                                    </svg>
                                    <p class="ml-2">Jumlah User</p>    
                                </div>
                                <p class="ml-2">{{ $usercount }}</p>
                            </div>
                        </div>

                        <div class="bg-[#5669CB] text-xl text-white font-semibold p-6 pr-16 rounded-lg mt-20">
                            <div>
                                <div class="inline-flex">
                                    <svg width="21" height="28" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11.875C1 6.74925 1 4.18456 2.59319 2.59319C4.18456 1 6.74925 1 11.875 1H19.125C24.2508 1 26.8154 1 28.4068 2.59319C30 4.18456 30 6.74925 30 11.875V26.375C30 31.5008 30 34.0654 28.4068 35.6568C26.8154 37.25 24.2508 37.25 19.125 37.25H11.875C6.74925 37.25 4.18456 37.25 2.59319 35.6568C1 34.0654 1 31.5008 1 26.375V11.875Z" stroke="white" stroke-width="1.5"/>
                                        <path d="M29.8151 26.375H8.06512C6.3795 26.375 5.53669 26.375 4.84431 26.5599C3.92231 26.8071 3.08165 27.2927 2.40682 27.9678C1.732 28.643 1.2468 29.4839 1 30.406" stroke="white" stroke-width="1.5"/>
                                        <path d="M8.25 10.0625H22.75M8.25 16.4062H17.3125" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                    <p class="ml-2">Jumlah Buku</p>    
                                </div>
                                <p class="ml-2">{{ $bookcount }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="h-28"></div>  
</body>
</html>
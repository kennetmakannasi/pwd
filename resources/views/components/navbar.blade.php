<div>
    <div class="inline-flex">
    <div class="ml-3">
        <img src="{{ asset('img/Screenshot_2024-08-01_131330-removebg-preview.png') }}" class="w-36" alt="" srcset="">
    </div>

    <div class="mt-8 text-xl text-white font-semibold ml-[700px]">
        <a class="ml-7 hover:bg-indigo-900 hover:p-1 hover:rounded-lg" href="/home">Home</a>
        <a class="ml-7 hover:bg-indigo-900 hover:p-1 hover:rounded-lg" href="/book">Book</a>
        <a class="ml-7 hover:bg-indigo-900 hover:p-1 hover:rounded-lg" href="/category">Category</a>
    </div>
    <div class="inline-flex mt-7 ml-10">
        <form action="{{ route('pwd.search') }}" method="get">
            <input class="w-52 h-7 bg-gradient-to-r from-slate-500 to-slate-400 mt-2 rounded-full text-white" type="text" name="search" id="search">
            <button class="ml-1 hover:bg-slate-400 absolute mt-2 hover:rounded-2xl" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="white" d="m19.485 20.154l-6.262-6.262q-.75.639-1.725.989t-1.96.35q-2.402 0-4.066-1.663T3.808 9.503T5.47 5.436t4.064-1.667t4.068 1.664T15.268 9.5q0 1.042-.369 2.017t-.97 1.668l6.262 6.261zM9.539 14.23q1.99 0 3.36-1.37t1.37-3.361t-1.37-3.36t-3.36-1.37t-3.361 1.37t-1.37 3.36t1.37 3.36t3.36 1.37"/></svg></button>
        </form>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#search').on('keyup',function(){
            var query= $(this).val(); 
            $.ajax({
                url:"search",
                type:"GET",
                data:{'search':query},
                success:function(data){ 
                    $('#search_list').html(data);
                }
            });
        });
    });
</script>
<div>
    <div class="inline-flex">
    <div class="ml-3">
        <img src="{{ asset('img/Screenshot_2024-08-01_131330-removebg-preview.png') }}" class="w-36" alt="" srcset="">
    </div>

    <div class="mt-8 text-xl text-white font-semibold ml-[650px]">
        <a class="ml-7 hover:underline hover: underline-offset-8" href="/home">Home</a>
        <a class="ml-7 hover:underline hover: underline-offset-8" href="/book">Book</a>
    </div>
    <div class="inline-flex mt-7 ml-5">
        <form action="{{ route('pwd.search') }}" method="get">
            <input class="w-72 h-7 bg-[#605E8B] mt-2 rounded-full text-white px-4" type="text" name="search" id="search">
            <button class="ml-1 hover:bg-slate-400 absolute mt-2 hover:rounded-2xl" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="white" d="m19.485 20.154l-6.262-6.262q-.75.639-1.725.989t-1.96.35q-2.402 0-4.066-1.663T3.808 9.503T5.47 5.436t4.064-1.667t4.068 1.664T15.268 9.5q0 1.042-.369 2.017t-.97 1.668l6.262 6.261zM9.539 14.23q1.99 0 3.36-1.37t1.37-3.361t-1.37-3.36t-3.36-1.37t-3.361 1.37t-1.37 3.36t1.37 3.36t3.36 1.37"/></svg></button>
        </form>
    </div>
    <div class="mt-6 ml-12 hover:bg-slate-400 hover:rounded-full hover:h-12">
        <a href="{{ route('pwd.profileedit') }}">
            <svg width="45" height="45" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M33.3337 18.75C33.3337 20.9602 32.4557 23.0798 30.8929 24.6426C29.3301 26.2054 27.2105 27.0834 25.0003 27.0834C22.7902 27.0834 20.6706 26.2054 19.1078 24.6426C17.545 23.0798 16.667 20.9602 16.667 18.75C16.667 16.5399 17.545 14.4203 19.1078 12.8575C20.6706 11.2947 22.7902 10.4167 25.0003 10.4167C27.2105 10.4167 29.3301 11.2947 30.8929 12.8575C32.4557 14.4203 33.3337 16.5399 33.3337 18.75ZM29.167 18.75C29.167 19.8551 28.728 20.9149 27.9466 21.6963C27.1652 22.4777 26.1054 22.9167 25.0003 22.9167C23.8953 22.9167 22.8354 22.4777 22.054 21.6963C21.2726 20.9149 20.8337 19.8551 20.8337 18.75C20.8337 17.645 21.2726 16.5851 22.054 15.8037C22.8354 15.0223 23.8953 14.5834 25.0003 14.5834C26.1054 14.5834 27.1652 15.0223 27.9466 15.8037C28.728 16.5851 29.167 17.645 29.167 18.75Z" fill="#777777"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0002 2.08334C12.3439 2.08334 2.0835 12.3438 2.0835 25C2.0835 37.6563 12.3439 47.9167 25.0002 47.9167C37.6564 47.9167 47.9168 37.6563 47.9168 25C47.9168 12.3438 37.6564 2.08334 25.0002 2.08334ZM6.25016 25C6.25016 29.3542 7.73558 33.3625 10.2252 36.5458C11.974 34.2503 14.2296 32.3899 16.8161 31.1099C19.4025 29.8298 22.2497 29.1648 25.1356 29.1667C27.9843 29.1634 30.7961 29.8106 33.3567 31.0591C35.9172 32.3076 38.1588 34.1244 39.9106 36.3708C41.7157 34.0033 42.9311 31.24 43.4562 28.3096C43.9813 25.3791 43.8011 22.3657 42.9304 19.5187C42.0597 16.6717 40.5235 14.073 38.4491 11.9376C36.3746 9.80215 33.8215 8.19138 31.001 7.23857C28.1804 6.28576 25.1735 6.01828 22.229 6.45829C19.2846 6.89829 16.4872 8.03312 14.0684 9.76887C11.6496 11.5046 9.67894 13.7914 8.31939 16.44C6.95984 19.0886 6.25054 22.0229 6.25016 25ZM25.0002 43.75C20.6958 43.757 16.5213 42.2762 13.1835 39.5583C14.5268 37.6346 16.3151 36.064 18.3962 34.9801C20.4772 33.8963 22.7892 33.3313 25.1356 33.3333C27.4526 33.3313 29.7367 33.8822 31.798 34.9402C33.8594 35.9983 35.6385 37.5329 36.9877 39.4167C33.6241 42.2229 29.3807 43.7569 25.0002 43.75Z" fill="#777777"/>
            </svg>    
        </a>
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
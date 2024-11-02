<div>
    <div class="mt-28">
        <div class="ml-3">
            <img class="w-36" src="{{ asset('img/Screenshot_2024-08-01_131330-removebg-preview.png') }}" alt="">
        </div>
        <div>
            <div class="ml-16 mt-5">
                <a class="text-lg font-semibold text-white" href="{{ route('admin.dashboard') }}">Home</a>
            </div>
            <div class="ml-16 mt-5">
                <a class="text-lg font-semibold text-white" href="{{ route('admin.addbook') }}">Create</a>
            </div>
            <div class="ml-16 mt-5">
                <a class="text-lg font-semibold text-white" href="{{ route('admin.bookdata') }}">Book Data</a>
            </div>
            <div class="ml-16 mt-5">
                <a class="text-lg font-semibold text-white" href="{{ route('admin.userdata') }}">User Data</a>
            </div> 
            <div class="ml-16 mt-48">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input class="text-lg font-semibold text-white" type="submit" value="Log Out">
                </form>
            </div>   
        </div>    
    </div>
</div>
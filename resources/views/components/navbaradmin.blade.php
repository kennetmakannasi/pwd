<div>
    <div class="mt-28">
        <div class="ml-3">
            <img class="w-36" src="{{ asset('img/Screenshot_2024-08-01_131330-removebg-preview.png') }}" alt="">
        </div>
        <div>
            <div class="ml-16 mt-5">
                <a class="{{ (Route::is('admin.dashboard')) ? ' bg-indigo-900 px-3 py-1 rounded-md text-lg font-semibold text-white' : 'text-lg font-semibold text-white' }}" href="{{ route('admin.dashboard') }}">Home</a>
            </div>
            <div class="ml-16 mt-5">
                <a class="{{ (Route::is('admin.addbook')) ? ' bg-indigo-900 px-3 py-1 rounded-md text-lg font-semibold text-white' : 'text-lg font-semibold text-white' }}" href="{{ route('admin.addbook') }}">Create</a>
            </div>
            <div class="ml-16 mt-5">
                <a class="{{ (Route::is('admin.bookdata')) ? ' bg-indigo-900 px-3 py-1 rounded-md text-lg font-semibold text-white' : 'text-lg font-semibold text-white' }}" href="{{ route('admin.bookdata') }}">Book Data</a>
            </div>
            <div class="ml-16 mt-5">
                <a class="{{ (Route::is('admin.userdata')) ? ' bg-indigo-900 px-3 py-1 rounded-md text-lg font-semibold text-white' : 'text-lg font-semibold text-white' }}" href="{{ route('admin.userdata') }}">User Data</a>
            </div> 
            <div class="ml-16 mt-48">
                <form method="POST" action="{{ route('logout') }}" id="logout">
                    @csrf
                    <button id="logoutbutton" class="text-lg font-semibold text-white" type="button">Log Out</button>
                </form>
            </div>   
        </div>    
    </div>
</div>

<script>
    $('#logoutbutton').click(function (event){
        event.preventDefault();

        Swal.fire({
            title: 'Apakah Anda Yakin Ingin Keluar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Keluar',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                $('#logout').submit();
            }
        });
    });
</script>
<div class="flex justify-center mt-10">
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center font-semibold px-32 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-md text-black uppercas tracking-widest hover:bg-gray-300 focus:bg-gray-300 active:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>    
</div>

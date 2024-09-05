<x-layoutform>
    <div class="w-[500px] ml-28"><x-slot:header>{{ $header }}</x-slot:header>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full bg-gradient-to-r from-slate-500 to-slate-400 h-8 text-white" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full bg-gradient-to-r from-slate-500 to-slate-400 h-8 text-white" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full bg-gradient-to-r from-slate-500 to-slate-400 h-8 text-white"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full bg-gradient-to-r from-slate-500 to-slate-400 h-8 text-white"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


            <x-primary-button>
                {{ __('Register') }}
            </x-primary-button>

    </form>
</div>
<x-footerauth>Allready Have A Account? <a class=" font-semibold hover:underline" href="/login">Login</a></x-footerauth>
</x-layoutform>

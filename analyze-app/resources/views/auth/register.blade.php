
<x-guest-layout>


    <x-auth-card>
       
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type='hidden'  name="url" value="{{$url}}" />
            
            <!-- Name -->
            <div>
                <x-label  style='float:right' for="name" :value="__('الاسم')" />

                <x-input id="name"    class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" style='float:right' :value="__('الايميل')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password"  style='float:right;' :value="__('التليفون')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="number" 
                                name="phone"
                               
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
           

            <div class="flex items-center justify-end mt-4">
                
                <x-button class="ml-4">
                    {{ __('دخول') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

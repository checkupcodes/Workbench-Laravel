<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!<br>
                    {{Auth::user()->name}} <br>
                    Email adresiniz : {{Auth::user()->email}} <br>
                    Email şifre : {{Auth::user()->password}} <br>
                    Email id : {{Auth::user()->id}} <br>
                    Email token : {{Auth::user()->remember_token}} <br>
                    Email oluşturma tarihi : {{Auth::user()->created_at}} <br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

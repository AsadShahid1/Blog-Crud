<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>
    
      <x-auth-session-status class="text-2xl mb-4" :status="session('message')"></x-auth-session-status>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-all-post></x-all-post>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

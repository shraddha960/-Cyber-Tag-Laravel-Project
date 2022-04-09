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
                    After login click on ! &nbsp;&nbsp; <span> <a href="{{ url('/blog') }}" class="text-gray-700 dark:text-gray-500 underline">Blog</a></span> &nbsp;&nbsp; <span> <a href="{{ url('/comment') }}" class="text-gray-700 dark:text-gray-500 underline">View All Comments</a></span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-wrap">
                @foreach ($users as $user)
                    <div class="p-6 bg-white border-b border-gray-200 w-full">
                        <div class="flex justify-between">
                            <h3>
                                {{ $user->name }}
                            </h3>
                            <form action="/user/{{ $user->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-button class="ml-3 bg-red-700" type="submit">
                                    {{ __('Deletar') }}
                                </x-button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <h1 class="text-6xl font-medium text-center">{{ $user->name }}</h1>
    <x-gallery>
        @foreach ($stories as $story)
            <img class="mb-4" src="{{ asset('storage/' . $story->image) }}" alt="">
        @endforeach
    </x-gallery>
</x-app-layout>

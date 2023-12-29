<x-app-layout>
    <div class="columns-2 px-24">
        <img src="{{ asset('storage/'.$story->image) }}" alt="">
        <div>
            <h1>{{ $story->title }}</h1>
            <p>{{ $story->description }}</p>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <div id="response"></div>
    <x-gallery>

        @foreach ($stories as $story)
            <div class="mb-4 break-inside-avoid">
                <a hx-get="{{ route('stories.show', $story) }}"
                    hx-target="#response">
                    <img loading="lazy" width="1000px" height="2000px" src="{{ asset('storage/' . $story->image) }}"
                        class="w-full rounded-xl hover:opacity-75" />
                </a>
                <div class="px-2 my-2">
                    <p class="text-xs text-gray-400">{{ $story->user->name }}</p>
                    <h3 class="text-base font-bold">{{ $story->title }}</h3>
                </div>
            </div>
        @endforeach
    </x-gallery>
</x-app-layout>

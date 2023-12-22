<x-app-layout>
    <div class="p-5 sm:p-8">
        <div class="gap-4 columns-2 sm:columns-3 md:columns-4 lg:columns-5">
            @foreach ($stories as $story)
            <div class="mb-4 break-inside-avoid">
                <a href="#">
                    <img loading="lazy" width="1000px" height="2000px" src="{{ asset('storage/'.$story->image) }}" class="w-full rounded-xl hover:opacity-75" />
                </a>
                <div class="px-2 my-2">
                    <p class="text-xs text-gray-400">{{ $story->user->name }}</p>
                    <h3 class="text-base font-bold">{{ $story->title }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <h1 class="text-6xl font-medium text-center">{{ $user->name }}</h1>
    <x-gallery>
        @foreach ($stories as $story)
            <div class="mb-4 break-inside-avoid" x-data="{ show: false }">
                <div class="relative flex justify-end px-4 pt-4">
                    <button class="absolute inline-block text-white rounded-lg text-sm p-1.5"
                            type="button"
                            x-on:click="show = !show">
                        <span class="sr-only">Open dropdown</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="currentColor" viewBox="0 0 16 3">
                            <path
                                  d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div x-show="show"
                         class="absolute z-10 w-40 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow top-10">
                        <ul class="py-2" aria-labelledby="dropdownButton">
                            <li>
                                <a href="{{ route('stories.edit', $story) }}"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Edit</a>
                            </li>
                            <li>
                                <form method="POST"
                                      action="{{ route('stories.destroy', $story) }}">
                                    @method('delete')
                                    <button class="w-full px-4 py-2 text-sm text-left text-red-600 hover:bg-gray-100 ">
                                        Delete</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <img class="w-full rounded-xl" src="{{ asset('storage/' . $story->image) }}"
                     alt="">
            </div>
        @endforeach
    </x-gallery>
</x-app-layout>

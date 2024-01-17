<x-base-modal>
    <form hx-post="{{ route('stories.store') }}"
        hx-target="#gallery"
        hx-swap="afterbegin"
        hx-encoding="multipart/form-data"
        x-on:htmx:after-request="show = false; setTimeout(() => document.getElementById('modal').remove(), 100);">
        <div class="grid grid-cols-2 gap-8 px-12 my-10">
            <div class="w-full"
                x-data="{
                    isDragging: false,
                    file: null,
                }">
                <label class="flex flex-col items-center justify-center w-full h-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100"
                    x-bind:class="{ 'border-blue-500': isDragging }"
                    for="dropzone-file"
                    id="drop-area"
                    x-on:dragover.prevent="isDragging = true"
                    x-on:dragleave.prevent="isDragging = false"
                    x-on:drop.prevent="
                        isDragging = false;
                        $refs.fileInput.files = $event.dataTransfer.files;
                        file = $refs.fileInput.files[0]; 
                    ">
                    <template x-if="file">
                        <img class="w-full rounded-lg" x-bind:src="URL.createObjectURL(file)" />
                    </template>
                    <template x-if="!file">
                        <div class="flex flex-col items-center justify-center ">
    
                            <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12v7a2 2 0 0 1-2 2h-3m5-9c-6.442 0-10.105 1.985-12.055 4.243M21 12v-1.5M3 16v3a2 2 0 0 0 2 2v0h11M3 16V5a2 2 0 0 1 2-2h8M3 16c1.403-.234 3.637-.293 5.945.243M16 21c-1.704-2.768-4.427-4.148-7.055-4.757M8.5 7C8 7 7 7.3 7 8.5S8 10 8.5 10 10 9.7 10 8.5 9 7 8.5 7zM19 2v3m0 3V5m0 0h3m-3 0h-3">
                            </svg>
                            <p class="mb-2 text-sm text-gray-500"ext-black">
                                <span class="font-semibold">Click to upload</span> or drag and drop
                            </p>
                        </div>
                    </template>
                    <input type="file"
                        name="image"
                        id="dropzone-file"
                        accept="image/png, image/jpeg, image/jpg"
                        x-ref="fileInput"
                        x-on:change="file = $refs.fileInput.files[0];"
                        hidden />
                </label>
            </div>
            <div>
                <div class="mb-5">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-20 w-full p-2.5">
                </div>
                <div class="mb-5">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900"> Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                    Share your story</button>
            </div>
        </div>
    </form>
</x-base-modal>


<x-app-layout>
    <form action="{{ route('stories.update', $story) }}" method="POST" enctype="multipart/form-data">
        @method('patch')

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        <div class="grid grid-cols-2 gap-8 px-12 my-10">
            <div class="w-full">
                <label for="dropzone-file" id="drop-area"
                       class="flex flex-col items-center justify-center w-full h-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div id="image-view" class="flex flex-col items-center justify-center pt-5 pb-6">
                        <img src="{{ asset('storage/' . $story->image) }}" alt="">
                    </div>
                    <input type="file" name="image" id="dropzone-file" accept="image/png, image/jpeg, image/jpg"
                           hidden />
                </label>
            </div>
            <div>
                <div class="mb-5">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input type="text"
                           name="title"
                           id="title"
                           value="{{ $story->title }}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-20 w-full p-2.5">
                </div>
                <div class="mb-5">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                    <textarea name="description"
                              id="description"
                              rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Leave a comment...">
                        {{ $story->description }}
                    </textarea>
                </div>
                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                    Save
                </button>
            </div>
        </div>
    </form>
    <script>
        const inputFile = document.querySelector("#dropzone-file");
        const dropArea = document.querySelector("#drop-area");
        const imgView = document.querySelector("#image-view");
        inputFile.addEventListener("change", uploadImage);
        dropArea.addEventListener("dragover", (e) => e.preventDefault());
        dropArea.addEventListener("drop", (e) => {
            e.preventDefault();
            inputFile.files = e.dataTransfer.files;
            uploadImage();
        });

        function uploadImage() {
            const file = inputFile.files[0];
            const path = URL.createObjectURL(file);
            imgView.innerHTML = `<img class="w-full rounded-lg" src="${path}"/>`;
        }
    </script>
</x-app-layout>

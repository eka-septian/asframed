<x-app-layout>
    <form action="#" enctype="multipart/form-data">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" />
        </div>
        <div>
            <label for="description">Title</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="image">Title</label>
            <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg" />
        </div>
        <button type="submit">Publish</button>
    </form>
</x-app-layout>
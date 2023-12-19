<x-app-layout>
    <form action="{{route('stories.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach            
            
        @endif
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" />
        </div>
        <div>
            <label for="description">description</label>
            <textarea name="description" id="description" value="{{ old('title') }}" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="image">Title</label>
            <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg" />
        </div>
        <button type="submit">Publish</button>
    </form>
</x-app-layout>
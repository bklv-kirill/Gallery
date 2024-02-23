@extends("layouts.main")

@section("content")
    @section("title", "Images")

    @forelse($images as $image)
        <x-images.image-card :image="$image" />
    @empty
    @endforelse

    <x-forms.form :action="route('images.store')" method="POST" enctype>

        <x-forms.input name="title" type="text" :value="old('title')">
            Image Title
        </x-forms.input>

        <x-forms.file name="image"/>

        <button type="submit" class="btn btn-primary">Add Image</button>
    </x-forms.form>
@endsection

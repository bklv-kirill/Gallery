<div>
    <img style="max-width: 600px" src="{{ asset("storage/images/{$image->path}") }}" alt="image">
    <div class="mt-3 fs-5">
        <p>Title: <span class="text-primary">{{ $image->title }}</span></p>
        <p>Date: <span class="text-primary">{{ $image->created_at->format("d.m.Y") }}</span></p>

        <x-forms.form :action="route('images.delete', $image)" method="DELETE">
            <button type="submit" class="btn btn-danger">Delete</button>
        </x-forms.form>
    </div>
</div>
<hr>

@if($errors->has($attributes["name"]))
    <div class="text-danger">{{ $errors->first($attributes["name"]) }}</div>
@endif
<div class="mb-3">
    <input name="{{ $attributes["name"] }}" type="file" class="form-control">
</div>

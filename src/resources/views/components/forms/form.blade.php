<form action="{{ $action }}" method="{{ in_array($method, ["GET", "POST"]) ? $method : "POST" }}" class="{{ $attributes["class"] }}" enctype="{{ $attributes["enctype"] ? "multipart/form-data" : "" }}">
    @if($method !== "GET")
        @csrf
        @method($method)
    @endif

    {{ $slot }}
</form>

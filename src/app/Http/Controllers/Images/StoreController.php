<?php

namespace App\Http\Controllers\Images;

use App\Http\Controllers\Controller;
use App\Http\Requests\Images\StoreRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $imageData = $request->validated();
        $imageData["image"] = Storage::disk("images")->put("", $imageData["image"]);

        Image::query()->create([
            "title" => $imageData["title"],
            "path" => $imageData["image"],
        ]);

        return redirect()->route("images.index");
    }
}

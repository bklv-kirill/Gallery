<?php

namespace App\Http\Controllers\Images;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Image $image): RedirectResponse
    {
        Storage::disk("images")->delete($image->path);
        $image->delete();

        return redirect()->route("images.index");
    }
}

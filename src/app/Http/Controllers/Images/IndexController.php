<?php

namespace App\Http\Controllers\Images;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $images = Image::query()->latest("id")->get();

        return \view("images.index", compact(["images"]));
    }
}

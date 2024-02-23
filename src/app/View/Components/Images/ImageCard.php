<?php

namespace App\View\Components\Images;

use App\Models\Image;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageCard extends Component
{
    /**
     * Create a new component instance.
     */
    public Image $image;
    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.images.image-card');
    }
}

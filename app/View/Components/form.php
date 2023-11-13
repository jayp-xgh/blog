<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form extends Component
{
    public $title;
    public $document;
    public $source;
    public $image;
    public function __construct($title, $document, $source, $image)
    {
        $this->title = $title;
        $this->document = $document;
        $this->source = $source;
        $this->image = $image;
    }
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}

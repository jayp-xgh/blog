<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class markdown extends Component
{
    public $document;
    public function __construct($document)
    {
        $this->document = $document;
    }


    public function render(): View|Closure|string
    {
        return view('components.markdown-edition');
    }
}

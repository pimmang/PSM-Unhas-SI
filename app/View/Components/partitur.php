<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class partitur extends Component
{
    public $partitur;
    public function __construct($partitur)
    {
       $this->partitur = $partitur;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partitur');
    }
}

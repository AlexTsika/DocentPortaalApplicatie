<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Map extends Component
{
    public $latitude;
    public $longitude;

    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function render()
    {
        return view('components.map');
    }
}
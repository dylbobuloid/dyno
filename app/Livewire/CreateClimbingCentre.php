<?php

namespace App\Livewire;

use App\Models\ClimbingCentre;
use Livewire\Component;

class CreateClimbingCentre extends Component
{

    public $name = '';
    public $location = '';
    public $indoors = false;

    public function render()
    {
        return view('livewire.create-climbing-centre');
    }

    public function save()
    {
        $flight = ClimbingCentre::create([
            'name' => $this->$name,
            'location' => $this->$location,
            'indoors' => $this->$indoors,
        ]);
    }
    
}

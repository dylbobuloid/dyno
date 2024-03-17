<?php

namespace App\Livewire;
use Livewire\Attributes\Validate; 
use App\Models\ClimbingCentre;
use Livewire\Component;

class CreateClimbingCentre extends Component
{

    #[Validate('required|min:3')] 
    public $name = '';

    #[Validate('required|min:3')] 
    public $location = '';

    public $indoors = false;

    public function render()
    {
        return view('livewire.create-climbing-centre');
    }

    public function save()
    {
        $this->validate(); 
        $gym = ClimbingCentre::create([
            'name' => $this->name,
            'location' => $this->location,
            'indoors' => $this->indoors,
        ]);
    }
    
}

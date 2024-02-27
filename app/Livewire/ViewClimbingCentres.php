<?php

namespace App\Livewire;

use App\Models\ClimbingCentre;
use Livewire\WithPagination;
use Livewire\Component;

class ViewClimbingCentres extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.view-climbing-centres', ['climbingcentres'=> ClimbingCentre::paginate(1)]);
    }
}

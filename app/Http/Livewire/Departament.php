<?php

namespace App\Http\Livewire;

use App\Models\DepartamentModel;
use Livewire\Component;

class Departament extends Component
{


    
    public function render()
    {

        $departament = DepartamentModel::all();

        return view('livewire.departament',
        [
            'departament'=>$departament,
        ]);
    }
}

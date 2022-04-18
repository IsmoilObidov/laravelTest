<?php

namespace App\Http\Livewire;

use App\Models\DepartamentModel;
use Livewire\Component;

class Departament extends Component
{

    protected $listener = ['delete'];



    public function delete($id)
    {
        DepartamentModel::find($id)->delete();
    }



    
    public function render()
    {

        $departament = DepartamentModel::all();

        return view('livewire.departament',
        [
            'departament'=>$departament,
        ]);
    }
}

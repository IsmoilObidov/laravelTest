<?php

namespace App\Http\Livewire;

use App\Models\DepartamentModel;
use App\Models\DepartamentOperation;
use App\Models\Summa_departament;
use Livewire\Component;

class OperationDepartament extends Component
{
    public $name_operation_departament;
    public $departament_id;
    public $departament;

    protected $listeners = ['delete'];


    public function create()
    {
        $validatedData = $this->validate([
            'name_operation_departament' => ['required', 'max:255'],
            'departament' => ['required', 'max:255'],
        ]);
        
        DepartamentOperation::create([
            'name' => $validatedData['name_operation_departament'],
            'departament_id' => $validatedData['departament']
        ]);
    }

    public function delete($id)
    {
        DepartamentOperation::find($id)->delete();
    }

    public function render()
    {

        $departament_operation = DepartamentOperation::all();

        $departament_s = DepartamentModel::all();
        
        return view('livewire.operation-departament',
        [
            'departament_operation'=>$departament_operation,
            'departament_s' => $departament_s,

        ]);
    }
}

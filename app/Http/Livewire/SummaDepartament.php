<?php

namespace App\Http\Livewire;

use App\Models\DepartamentModel;
use App\Models\DepartamentOperation;
use App\Models\Summa_departament;
use Livewire\Component;

class SummaDepartament extends Component
{
    public $departament_id;
    public $departament_oper_id;
    public $description;
    public $summa;

    protected $listener = ['delete'];


    public function create()
    {
        $validatedData = $this->validate([
            'departament_oper_id' => ['required', 'integer','digits_between:1,11'],
            'summa' => ['required', 'integer','digits_between:1,11'],
            'description' => ['max:255'],
        ]);

        Summa_departament::create($validatedData);
    }

    public function delete($id)
    {
        Summa_departament::find($id)->delete();
    }

    public function render()
    {
        $departament = DepartamentModel::all();
        $departament_operation = DepartamentOperation::all();
        $summa_departament = Summa_departament::all();

        return view('livewire.summa-departament',
        [
            'departament' => $departament,
            'departament_operation' => $departament_operation,
            'summa_departament' => $summa_departament,
        ]);
    }
}

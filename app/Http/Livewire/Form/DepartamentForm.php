<?php

namespace App\Http\Livewire\Form;

use App\Models\DepartamentModel;
use Livewire\Component;

class DepartamentForm extends Component
{

    protected $listeners = ['setForm'];

    public $name_departament;

    public function create()
    {

        $validatedData = $this->validate([
            'name_departament' => ['required', 'max:255'],
        ]);

           
        DepartamentModel::create(['name' => $validatedData['name_departament']]);

    }

    public function render()
    {
        return view('livewire.form.departament-form');
    }

    public function setForm()
    {
        $this->dispatchBrowserEvent('open_departament');
    }
}

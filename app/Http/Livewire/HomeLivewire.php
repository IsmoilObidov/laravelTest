<?php

namespace App\Http\Livewire;

use App\Models\HomeModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeLivewire extends Component
{
    public $name_user;
    public $report_to_admin;

    public function createReport()
    {

        $validatedData = $this->validate([
            'report_to_admin' => ['required', 'max:255'],
        ]);
        
        $validatedData['name_user'] = Auth::user()->name;

        
        HomeModel::create($validatedData);

    }

    public function render()
    {
        return view('livewire.home-livewire');
    }
}

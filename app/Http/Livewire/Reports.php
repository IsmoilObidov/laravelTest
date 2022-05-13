<?php

namespace App\Http\Livewire;

use App\Models\HomeModel;
use Livewire\Component;

class Reports extends Component
{
    public $search = '';

    public function render()
    {

        if (!$this->search) {
            $reports = HomeModel::all();
        }else{
            $reports = HomeModel::
            where( 'id', 'like', '%'.$this->search.'%')
            ->orWhere( 'name_user', 'like', '%'.$this->search.'%')
            ->get();
        }
        return view('livewire.reports',
    [
        'reports' => $reports,
    ]
    );
    }
}

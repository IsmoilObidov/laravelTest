<?php

namespace App\Http\Livewire;

use App\Models\HomeModel;
use App\Models\ReportAnswer;
use Livewire\Component;

class Reports extends Component
{
    public $search = '';

    public $name_user; 
    public $answer; 
    public $message_id; 

    public function sendReportAnswer()
    {
        $validatedData = $this->validate([
            'name_user' => ['required', 'max:255'],
            'answer' => ['required', 'max:255'],
            'message_id' => ['required', 'integer','digits_between:1,11'],
        ]);

        ReportAnswer::create($validatedData);

    }

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

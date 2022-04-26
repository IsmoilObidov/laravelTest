<?php

namespace App\Http\Livewire;

use App\Models\DepartamentModel;
use App\Models\DepartamentOperation;
use App\Models\Summa_departament;
use Livewire\Component;

class DepartamentResults extends Component
{
    protected $listener = ['report'];
    public $fromDate;
    public $toDate;

    public function report()
    {

        $obj = [];



        foreach (DepartamentModel::first()->get_operation as $key) {

            $all = [];

            foreach ($key->get_history->groupBy('date') as $key1) {

                $summa = 0;

                foreach ($key1 as $key2) {
                    $summa += $key2->{'summa'};
                }

                try {
                    array_push(
                        $all,
                        [
                            'date' => $key1[0]->{'date'},
                            'summa' => $summa,
                        ]
                    );
                } catch (\Throwable $th) {}
            }

            array_push( $obj, [ $key->{'name'} => $all ] );
            
            
        }
        try {


            $this->dispatchBrowserEvent(
                'report-product',
                [
                    'name' => DepartamentModel::all(),
                    'report' => $obj,
                    'date' => Summa_departament::all()
                ]
            );
        } catch (\Throwable $th) {}
    }


    public function render()
    {
        $departament = DepartamentModel::all();
        return view('livewire.departament-results', ['departament' => $departament]);
    }
}

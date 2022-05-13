<?php

namespace App\Http\Livewire;

use App\Models\DepartamentModel;
use App\Models\Summa_departament;
use Livewire\Component;

class Departament extends Component
{


    protected $listeners = ['delete', 'report'];



    public function delete($id)
    {
        DepartamentModel::find($id)->delete();
    }

    public function report($id)
    {

        $obj = [];



        foreach (DepartamentModel::where('id', '=', $id)->first()->get_operation as $key) {

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
                    'report' => $obj,
                    'date' => Summa_departament::all()->groupBy('date'),
                ]
            );
        } catch (\Throwable $th) {}
    }




    public function render()
    {

        $departament = DepartamentModel::all();

        return view(
            'livewire.departament',
            [
                'departament' => $departament,
            ]
        );
    }
}

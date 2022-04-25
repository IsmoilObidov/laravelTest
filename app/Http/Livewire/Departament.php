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
        // dd( 
        //     DepartamentModel::where('id', '=', $id)->first()->get_operation[0]->get_history
        // );

        $obj = [];



        foreach (DepartamentModel::where('id', '=', $id)->first()->get_operation as $key) {

            $all = [];

            foreach ($key->get_history->groupBy('date') as $key1) {
                # code...

                $qty = 0;

                foreach ($key1 as $key2) {
                    $qty += $key2->{'summa'};
                }

                try {
                    array_push(
                        $all,
                        [
                            'date' => $key1[0]->{'date'},
                            'quantity' => $qty,
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
                    'date' => Summa_departament::all()
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

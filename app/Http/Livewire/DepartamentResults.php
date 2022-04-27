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
        foreach (DepartamentModel::all() as $key) {
            
            $all = [];

            foreach ($key->get_operation as $key1) {
                
                foreach ($key1->get_history->groupBy('date') as $key2) {
                    $summa = 0;
                    
                    foreach ($key2 as $key3) {

                        $summa += $key3->{'summa'};

                    }
                    try {
                        array_push(
                            $all,
                            [
                                'date' => $key2[0]->{'date'},
                                'summa' => $summa,
                                ]
                            );
                        } catch (\Throwable $th) {
                        }
                    }
                    
                    
                }
                array_push($obj, [$key->{'name'} => $all]);

                
                
            }
            
            // if (!$this->fromDate < $this->toDate) {
                $this->dispatchBrowserEvent(
                    'report-product',
                    [
                        'report' => $obj,
                        'date' => Summa_departament::all()
                    ]
                );
            // }
            // else{
            //     $this->dispatchBrowserEvent(
            //         'report-product',
            //         [
            //             'report' => $obj,
            //             'date' => Summa_departament::where('date','=',$this->fromDate)
            //         ]
            //     );
            // }
        
    }


    public function render()
    {
        $departament = DepartamentModel::all();
        return view('livewire.departament-results', ['departament' => $departament]);
    }
}

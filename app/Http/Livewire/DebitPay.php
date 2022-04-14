<?php

namespace App\Http\Livewire;

use App\Models\ClientsModel;
use App\Models\Sale;
use App\Models\Debt_payment;
use Livewire\Component;

class DebitPay extends Component
{

    public $client_id;
    public $debit_pay;
    public $lasted_debit;
    public $required_debit;
    public $summa;



    
    
    public function save()
    {
        $validatedData = $this->validate([
            'client_id' => ['required', 'integer','digits_between:1,11'],
            'required_debit' => ['required', 'integer','digits_between:1,11'],
            'summa' => ['required', 'integer','digits_between:1,11'],
            'lasted_debit' => ['required', 'integer','digits_between:1,11'],
        ]);

        Debt_payment::create($validatedData);

    }





    public function getDebit()
    {
        try {
            $this->required_debit = Sale::where('client_id', '=',$this->client_id)->sum('debit') - Debt_payment::where('client_id', '=',$this->client_id)->sum('summa');
        } catch (\Throwable $th){}

    }
    
    public function debitPay1()
    {
        try {
            if ($this->required_debit >= $this->summa   ) {
        
                $this->lasted_debit = $this->required_debit - $this->summa  ;
                
            }else{
        
                $this->summa     = $this->required_debit;
                
                $this->lasted_debit = 0;
            }
        } catch (\Throwable $th){}
    }




    public function render()
    {

        $clients = ClientsModel::all();
        
        return view('livewire.debit-pay', [
            'clients' => $clients,
            ]);
    }
}

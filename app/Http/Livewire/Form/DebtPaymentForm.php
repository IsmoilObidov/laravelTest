<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use App\Models\ClientsModel;
use App\Models\Debt_payment;

class DebtPaymentForm extends Component
{
    public $name;
    public $address;
    public $phoneNumber;
    public $client_sale;
    public $debt_payment;

    protected $listeners = ['setForm', 'fresh' => '$refresh'];

    public function __construct()
    {
        $this->debt_payment = Debt_payment::first()->get_client->get_sale ?? [];   
    }

    public function render()
    {
        $debt_payment = Debt_payment::all();
        
        return view('livewire.form.debt-payment-form',[
            'debt_payment' => $debt_payment,
        ]);
    }
    
    
    public function setForm($id)
    {
        $this->debt_payment = ClientsModel::where('id', '=',$id)->first()->get_paid_debit;

        $this->emit('fresh');

        $this->dispatchBrowserEvent('open_debt_payment');
    }
}

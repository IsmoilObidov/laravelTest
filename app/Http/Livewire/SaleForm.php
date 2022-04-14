<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ClientsModel;
use App\Models\Product;
use App\Models\Sale;



class SaleForm extends Component
{

    public $client_id;
    public $debit;
    public $product;
    public $income;
    public $price;
    public $quantity;
    public $payment;

    protected $listeners = ['setForm'];


    public function debitSet()
    {

        if ($this->payment >= $this->income) {
            
            $this->debit = $this->payment - $this->income;
            
        }else{
            $this->debit = 0;

            $this->income = $this->payment;
        }
    }

    public function getPayment()
    {
        try {
            $this->payment = $this->price * $this->quantity;
        } catch (\Throwable $th){}

    }

    public function save()
    {
        $validatedData = $this->validate([
            'client_id' => ['required', 'integer','digits_between:1,11'],
            'product' => ['required', 'integer','digits_between:1,11'],
            'quantity' => ['required', 'integer','digits_between:1,11'],
            'price' => ['required', 'integer','digits_between:1,11'],
            'debit' => ['required', 'integer','digits_between:1,11'],
        ]);


        Sale::create($validatedData);
    }
    


    public function render()
    {
        $clients = ClientsModel::all();

        return view('livewire.sale-form',[
            'clients' => $clients,
        ]);
    }


    public function setForm($id)
    {

        $this->product = Product::where('id', '=',$id)->first()['barcode'];
        $this->price = Product::where('id', '=',$id)->first()['price'];

        $this->dispatchBrowserEvent('openModal');
    }
}

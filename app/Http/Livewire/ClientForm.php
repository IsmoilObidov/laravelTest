<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ClientsModel;
use App\Models\Sale;

class ClientForm extends Component
{

    public $name;
    public $address;
    public $phoneNumber;
    public $client_sale;

    protected $listeners = ['setForm', 'fresh' => '$refresh'];

    public function __construct()
    {
        $this->client_sale = ClientsModel::first()->get_sale;   
    }

    public function createClient()
    {

        $validatedData = $this->validate([
            'name' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'phoneNumber' => ['required', 'max:255'],
        ]);

        $client = ClientsModel::create($validatedData);

    }


    public function render()
    {
        $clients = ClientsModel::all();

        $sales = Sale::all();
        
        return view('livewire.client-form',[
            'clients' => $clients,
            'sales' => $sales,
        ]);
    }
    
    
    public function setForm($id)
    {
        $this->client_sale = ClientsModel::where('id', '=',$id)->first()->get_sale;

        $this->emit('fresh');

        $this->dispatchBrowserEvent('open');
    }
}

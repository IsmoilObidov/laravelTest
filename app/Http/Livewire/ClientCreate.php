<?php

namespace App\Http\Livewire;

use App\Models\ClientsModel;
use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;

class ClientCreate extends Component
{
    
    public $searchClient = '';

    public $name;
    public $address;
    public $phoneNumber;

    public $productName ;


    
    protected $listeners = ['delete'];
    

    public function delete($id)
    {
        ClientsModel::find($id)->delete();
    }

    public function createClient()
    {

        $validatedData = $this->validate([
            'name' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'phoneNumber' => ['required', 'max:255'],
        ]);

           
        $product = ClientsModel::create($validatedData);

    }

    
    public function render()
    {
        
        $this->productName = Product::get('name');

        if (!$this->searchClient) {
            $clients = ClientsModel::all();
        }else{
            $clients = ClientsModel::
            where( 'name', 'like', '%'.$this->searchClient.'%')->get();
        }

        $sales = Sale::all();


        return view('livewire.client-create', [
        'clients' => $clients,
        'sales' => $sales,
        
        ]);
    }
}

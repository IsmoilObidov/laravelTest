<?php

namespace App\Http\Livewire;

use App\Models\ClientsModel;
use App\Models\Product;
use App\Models\ProductComings;
use Livewire\Component;
use Livewire\WithPagination;


class Productlivewire extends Component
{
    public $search = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    
    protected $listeners = ['delete','add','minus','report','sales'];
    

    public function delete($id)
    {
        Product::find($id)->delete();
        ProductComings::find($id)->delete();
    }

    public function add($id)
    {
        $product = Product::find($id);
        $product->quantity+=1;
        $product->save();
    }
    public function minus($id)
    {
        $product = Product::find($id);
        $product->quantity-=1;
        $product->save();
    }

    

    public function render()
    {
        

        if (!$this->search) {
            $products = Product::paginate(5);
        }else{
            $products = Product::
            where( 'name', 'like', '%'.$this->search.'%')
            ->orWhere( 'barcode', 'like', '%'.$this->search.'%')
            ->orWhere( 'article', 'like', '%'.$this->search.'%')
            ->paginate(5);
        }


        

        $clients = ClientsModel::all();

        return view('livewire.productlivewire', [
        'products' => $products,
        'clients' => $clients,
        
        ]);
    }

    public function report($id)
    {
        $this->dispatchBrowserEvent('report-product', ['report' => Product::where('id' , '=' , $id)->first()->get_history, 'name' => Product::where('id' , '=' , $id)->first()->{'name'}]);
    }

    public function sales($id)
    {
        $this->dispatchBrowserEvent('sales-product', ['sales' => Product::where('id' , '=' , $id)->first()->sold_quantity, 'name' => Product::where('id' , '=' , $id)->first()->{'name'}]);
    }
}

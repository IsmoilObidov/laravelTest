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

    public $qty;

    public $all;
    public $all1;

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
        $this->all = []; 
        Product::where('id' , '=' , $id)->first()->get_history->groupBy('date')
            ->map(function ($item) {

                $this->qty = 0;
                $item->map(function ($item1)
                {

                    $this->qty += $item1->{'quantity'};

                });

                try {
                    array_push(
                        $this->all,
                        [
                            'date' => $item[0]->{'date'},
                            'quantity' => $this->qty,
                        ]
                    );
                } catch (\Throwable $th) {}
                
            });
        

        $this->dispatchBrowserEvent('report-product', ['report' => $this->all, 'name' => Product::where('id' , '=' , $id)->first()->{'name'}]);
    }



    public function sales($id)
    {

        $this->all1 = []; 
        Product::where('id' , '=' , $id)->first()->sold_quantity->groupBy('date')
            ->map(function ($item) {

                $this->qty = 0;
                $item->map(function ($item1)
                {

                    $this->qty += $item1->{'quantity'};

                });

                try {
                    array_push(
                        $this->all1,
                        [
                            'date' => $item[0]->{'date'},
                            'quantity' => $this->qty,
                        ]
                    );
                } catch (\Throwable $th) {}
                
            });


        $this->dispatchBrowserEvent('sales-product', ['sales' => $this->all1, 'name' => Product::where('id' , '=' , $id)->first()->{'name'}]);
    }
}

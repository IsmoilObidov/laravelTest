<?php

namespace App\Http\Livewire\Form;


use App\Models\Product;
use App\Models\ProductComings;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductAdd extends Component
{

    use WithFileUploads;

    protected $listeners = ['create','setForm'];

    public $name;
    public $quantity;
    public $discount;
    public $price;
    public $barcode;
    public $article;
    public $description;
    public $photo;

    public function closeModal()
    {
        $this->reset();
    }


    public function create()
    {

        $validatedData = $this->validate([
            'name' => ['required', 'max:255'],
            'quantity' => ['required', 'integer','digits_between:1,11'],
            'discount' => ['required', 'integer','digits_between:1,2'],
            'price' => ['required', 'integer','digits_between:1,11'],
            'barcode' => ['required', 'integer','digits_between:1,11'],
            'article' => ['required', 'max:255'],
            'photo' => ['required','max:2048'],
            'description' => ['max:255'],
        ]);

        $coming = $this->validate([
            'quantity' => ['required', 'integer','digits_between:1,11'],
            'price' => ['required', 'integer','digits_between:1,11'],
            'barcode' => ['required', 'integer','digits_between:1,11'],
        ]);

        $path = $this->photo->store('img');
        
        $validatedData['photo'] = $path;

        if (!Product::where('barcode','=',$validatedData['barcode'])->first()) {
           
            $product = Product::create($validatedData);

        }else{

            $product_creat = Product::where('barcode','=',$validatedData['barcode'])->first();

            $product_creat->increment('quantity', $validatedData['quantity']);

            $product_creat->save();

            $product = Product::where('barcode','=',$validatedData['barcode'])->first();

        }


        $productComings = ProductComings::create($coming);

    }


    public function render()
    {
        return view('livewire.form.product-add');
    }

    public function setForm()
    {
        $this->dispatchBrowserEvent('openProductAdd');
    }
}

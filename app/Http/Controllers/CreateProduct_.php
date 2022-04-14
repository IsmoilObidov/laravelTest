<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductComings;
use Illuminate\Http\Request;

class CreateProduct_ extends Controller
{
    public function product_validity(Request $request)
    {
        $validateFields = $request->validate([
            'name' => ['required', 'max:255'],
            'quantity' => ['required', 'integer','digits_between:1,11'],
            'discount' => ['required', 'integer','digits_between:1,2'],
            'price' => ['required', 'integer','digits_between:1,11'],
            'barcode' => ['required', 'integer','digits_between:1,11'],
            'article' => ['required', 'max:255'],
            'photo' => ['required','max:2048'],
            'description' => ['max:255'],

        ]);

        $path = $request->photo->store('img');
        
        $validateFields['photo'] = $path;

        $coming = $request->only('quantity', 'barcode', 'price');


        if (!Product::where('barcode','=',$validateFields['barcode'])->first()) {
           
            $product = Product::create($validateFields);

        }else{

            $product_creat = Product::where('barcode','=',$validateFields['barcode'])->first();


            $product_creat->quantity += $validateFields['quantity'];

            $product_creat->save();

            $product = Product::where('barcode','=',$validateFields['barcode'])->first();

        }


        $productComings = ProductComings::create($coming);

        if($product)
        {
            return redirect('admin');
        };
    }

    public function get_product()
    {
        return view('admin.index', ['products' => Product::all()]);

        return view('home', ['products' => Product::all()]);

    }


    // public function imageUploadPost()
    // {
    //     $imageName = time().'.'.request()->image->getClientOriginalExtension();
    //     request()->image->move(public_path('images'), $imageName);
    // }
}

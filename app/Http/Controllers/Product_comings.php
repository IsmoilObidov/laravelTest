<?php

namespace App\Http\Controllers;

use App\Models\ProductComings;
use Illuminate\Http\Request;

class Product_comings extends Controller
{
    public function product_validity(Request $request)
    {
        $validateFields = $request->validate([
            'name' => ['required', 'max:255'],
            'barcode' => ['required', 'integer','digits_between:1,11'],
            'quantity' => ['required', 'integer','digits_between:1,11'],
            'price' => ['required', 'integer','digits_between:1,11'],
        ]);
        $product = ProductComings::create($validateFields);
        if($product)
        {
            return redirect('admin');
        };
    }

    public function get_product()
    {

        return view('admin.index', ['products' => ProductComings::all()]);
    }
}

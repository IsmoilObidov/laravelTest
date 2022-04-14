<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function create(Request $request)
    {
        $validateFields = $request->validate([
            'client' => ['required','max:255'],
            'bar_code' => ['required', 'integer','digits_between:1,11'],
            'quantity' => ['required', 'integer','digits_between:1,11'],
            'income' => ['required', 'integer','digits_between:1,11'],
            'debit_show' => ['required', 'integer','digits_between:1,11'],
        ]);

        dd( $request );

        
        $product = Product::where('barcode', '=' , $validateFields['bar_code'])->first();
        
        $product->decrement('quantity',$validateFields['quantity']);
        
        $sale = new Sale;
    
        $sale->product = $product->barcode;
        $sale->quantity = $validateFields['quantity'];
        $sale->price = $product->price;
        
        $sale->save();
    }
}

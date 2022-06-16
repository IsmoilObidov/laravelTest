<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Product::all();
        return view('plans.index', compact('plans'));
    }

    public function show(Product $plan, Request $request)
    {
        return view('plans.show', compact('plan'));
    }
}

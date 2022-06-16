<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function create(Request $request, Product $plan)
    {
        return redirect()->route('home');
        
        $plan = Product::findOrFail($request->get('plan'));

        $request->user()
            ->newSubscription('main', $plan->stripe_plan)
            ->create($request->stripeToken);

    }
}

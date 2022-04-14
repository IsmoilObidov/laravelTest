<?php

namespace App\Http\Controllers;


use App\Models\ClientsModel;


use Illuminate\Http\Request;

class Clients extends Controller
{
    public function clients_validity(Request $request)
    {
        $validateFields = $request->validate([
            'name' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'phoneNumber' => ['required', 'max:255'],
        ]);



           
        $clients = ClientsModel::create($validateFields);

        if($clients)
        {
            return redirect('admin');
        };
    }

    public function get_clients()
    {
        return view('admin.index', ['clients' => ClientsModel::all()]);

        return view('home', ['clients' => ClientsModel::all()]);

    }
}

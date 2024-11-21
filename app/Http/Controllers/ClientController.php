<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(5);
        return view('admin.client.index', compact('clients'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'phone_number'=>'required',
        ]);
        $client=Client::findOrFail($id);
        $client->first_name=request('first_name');
        $client->last_name=request('last_name');
        $client->phone_number=request('phone_number');
        $client->update();

        return redirect()->route('clients.index');
    }
    public function destroy($id){
        $client=Client::findOrFail($id);
        $client->delete();
        return redirect()->route('clients.index');
    }
}

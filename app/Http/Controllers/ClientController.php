<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function show($id)
    {
        return view('clients.show', [
            'client' => Client::all()->where('id', $id)->first()
        ]);
    }
}

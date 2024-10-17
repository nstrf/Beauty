<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cosmetologist;

class CosmetologistController extends Controller
{
    public function index()
    {
        return view('cosmetologists.index', ['cosmetologists' => Cosmetologist::all()]);
    }
    public function show($id)
    {
        return view('cosmetologists.show', [
            'cosmetologist' => Cosmetologist::all()->where('id', $id)->first()
        ]);
    }
}

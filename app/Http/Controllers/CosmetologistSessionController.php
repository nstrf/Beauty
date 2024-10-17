<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CosmetologistSession;

class CosmetologistSessionController extends Controller
{
    public function index()
    {
        return view('cosmetologist-sessions.index', ['cosmetologistSessions' => CosmetologistSession::all()]);
    }
    public function show($id)
    {
        return view('cosmetologist-sessions.show', [
            'cosmetologistSession' => CosmetologistSession::all()->where('id', $id)->first()
        ]);
    }
}

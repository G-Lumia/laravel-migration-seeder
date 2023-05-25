<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::orderBy('giorno_partenza')->get();
        return view('welcome', compact('trains'));
    }
}

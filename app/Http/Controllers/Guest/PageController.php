<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // dd(train::all());
        $trains = train::all();
        return view('home', compact('trains'));
    }
    public function contacts()
    {
        return view('contacts');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicsController extends Controller
{
    public function comics() {
        
        $comics = Comic::all();
        $data = ['comics' => $comics];

        return view('comics', $data);
    }
}
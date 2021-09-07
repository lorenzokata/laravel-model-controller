<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function comics() {
        $data = config('comics');
        $comics = ['comics' => $data];
        return view('comics', $comics);
    }
}
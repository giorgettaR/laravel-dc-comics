<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {

        $comics = config('comics');

        return view('comics.index', compact('comics'));
    }
}

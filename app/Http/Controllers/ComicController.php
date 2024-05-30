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
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }
    public function create()
    {
        return view('comics.create');
    }
    public function store(Request $request)
    {

        // recuperiamo i parametri che arrivano dal form
        $form_data = $request->all();

        // dd($form_data);

        // crea l'istanza, la popola con i dati e la salva nel db
        $new_comic = Comic::create($form_data);

        // creare l'istanza di Pasta
        // $new_pasta = new Pasta();

        // // popoliamo l'istanza con i dati che sono arrivati dal form
        // $new_pasta->title = $form_data['title'];
        // $new_pasta->image = $form_data['image'];
        // $new_pasta->weight = $form_data['weight'];
        // $new_pasta->cooking_time = $form_data['cooking_time'];
        // $new_pasta->description = $form_data['description'];
        // $new_pasta->type = $form_data['type'];

        // // salviamo l'istanza ->save()
        // $new_pasta->save();

        // dump($new_pasta);
        // redirect alla rotta show di pasta 
        // return redirect()->route('pastas.show', $new_pasta);
        return to_route('comics.show', $new_comic);
        // return redirect()->route('pastas.index');
    }
}

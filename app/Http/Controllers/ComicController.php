<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {

        // $comics = config('comics');
        $comics = Comic::all();

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
        $form_data = $request->all();
        $new_comic = Comic::create($form_data);

        // creare l'istanza di Comic
        // $new_comic = new Comic();
        // popoliamo l'istanza con i dati che sono arrivati dal form
        // $new_comic->title = $form_data['title'];
        // $new_comic->...
        // // salviamo l'istanza ->save()
        // $new_comic->save();

        // redirect 
        // return redirect()->route('comics.show', $new_comic);
        // oppure
        return to_route('comics.show', $new_comic);
    }
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();

        $comic->fill($form_data); //non salva automaticamente sul db
        $comic->save();
        // oppure
        // $comic->update($form_data);

        // redirect
        return to_route('comics.show', $comic);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        // redirect
        return to_route('comics.index');
    }
}

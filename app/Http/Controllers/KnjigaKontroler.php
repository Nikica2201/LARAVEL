<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knjiga;

class KnjigaKontroler extends Controller
{
    public function index()
    {
        $knjiga=Knjiga::all();
        return view('knjige.index', compact('knjiga'));
    }

    public function create()
    {
        return view('knjige.create');
    }
    public function store(Request $request)
    {
        Knjiga::create($request->all());
        return redirect()->route('knjige.index');
    }
    public function show(Knjiga $knjiga, $id)
    {
        
        $knjiga=Knjiga::findOrFail($id);
        return view('knjige.show', compact('knjiga'));


    }
    public function edit(Knjiga $knjiga, $id)
    {
        $knjiga=Knjiga::findOrFail($id);
        return view('knjige.edit', compact('knjiga'));
    }

    public function update(Knjiga $knjiga, Request $request, $id)
    {
        $knjiga=Knjiga::findOrFail($id);
        $knjiga->update($request->all());
        return redirect()->route('knjige.index');
    }
    public function destroy(Knjiga $knjiga, $id)
    {
        $knjiga=Knjiga::findOrFail($id);
        if($knjiga->posudbe->count()>0)
        {
            return back()->with('error', 'Knjiga se ne moze ukloniti, jer je trenutno posudena!');
        }

        $knjiga->delete();
        return redirect()->route('knjige.index')->with('success', 'Knjiga je obrisana!');
    }

}

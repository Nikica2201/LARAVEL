<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clan;

class ClanKontroler extends Controller
{
    public function index()
    {
        $clanovi=Clan::all();//select* from clanovi
        return view('clanovi.index', compact('clanovi'));
    }

    public function create()
    {
        return view('clanovi.create');
    }
    public function store(Request $request)
    {
        
        Clan::create($request->all());
        return redirect()->route('clanovi.index');
    }
    public function show(Clan $clan, $id)
    {
        //dd($clan);
        $clan=Clan::findOrFail($id);
        return view('clanovi.show', compact('clan'));


    }
    public function edit(Clan $clan, $id)
    {
        $clan=Clan::findOrFail($id);
        return view('clanovi.edit', compact('clan'));
    }

    public function update(Clan $clan, Request $request, $id)
    {
        $clan=Clan::findOrFail($id);
        $clan->update($request->all());
        return redirect()->route('clanovi.index');
    }
    public function destroy(Clan $clan, $id)
    {
        $clan=Clan::findOrFail($id);
        $clan->delete();
        return redirect()->route('clanovi.index');
    }
}

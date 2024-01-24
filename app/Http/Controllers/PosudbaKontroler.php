<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posudba;
use App\Models\Clan;
use App\Models\Knjiga;

class PosudbaKontroler extends Controller
{
    public function index()
    {
        $posudbe=Posudba::with(['clan', 'knjiga'])->get();
        return view ('posudbe.index', compact('posudbe'));
    }

    public function create()
    {
        $clanovi=Clan::all();
        $knjiga=Knjiga::where('kolicina', '>',0)->get();
        return view ('posudbe.create', compact('clanovi', 'knjiga'));
    }

    public function store(Request $request)
    {   
        $request->validate(['clan_id'=>'required|exists:clanovi,id']);

        $knjiga=Knjiga::find($request->knjiga_id);
        if ($knjiga->kolicina>0)
        {
            $knjiga->decrement('kolicina');
            Posudba::create($request->all());
        }
        return redirect()->route('posudbe.index');
    }
    public function show(Posudba $posudba, $id)
    {
        $posudba=Posudba::with('clan', 'knjiga')->findOrFail($id);
        return view('posudbe.show', compact('posudba'));
    }
    public function edit($id)
    {
        $posudba=Posudba::with(['clan', 'knjiga'])->find($id);
        if(!$posudba)
        {
            return redirect()->route('posudbe.index');
        }
        $clanovi=Clan::all();
        $knjiga=Knjiga::all();

        return view('posudbe.edit', compact('posudba', 'clanovi', 'knjiga'));//sa ovim se moze editati i clan i knjiga i datum
    }
    public function update(Request $request, $id)
    {
        $posudba=Posudba::find($id);
        $posudba->update($request-all());
        return redirect()->route('posudbe.index');
    
    }
    public function destroy($id)
    {
        $posudba=Posudba::find($id);
        if ($posudba)
       {$posudba->delete();}
       return redirect()->route('posudbe.index');
    }

}

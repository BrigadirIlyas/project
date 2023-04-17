<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;


class SiswaContoller extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        return view('siswa.index', compact(['siswa']));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $data = siswa::create($request->except(['_token','submit']));
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('image/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
    }
    return redirect('/siswa');
}

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit',compact(['siswa']));
    }

    public function update($id, Request $request)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->except(['_token','submit']));
        return redirect('/siswa');
    }
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }
}

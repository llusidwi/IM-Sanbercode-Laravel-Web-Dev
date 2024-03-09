<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastController extends Controller
{
    public function index()
    {
        $casts = DB::table('casts')->get();
        return view('casts.index', compact('casts'));
    }

    public function create()
    {
        return view('casts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'umur' => 'required|integer',
            'bio' => 'required|string',
        ]);

        DB::table('casts')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/cast');
    }

    public function show($cast_id)
    {
        $cast = DB::table('casts')->find($cast_id);
        return view('casts.show', compact('cast'));
    }

    public function edit($cast_id)
    {
        $cast = DB::table('casts')->find($cast_id);
        return view('casts.edit', compact('cast'));
    }

    public function update(Request $request, $cast_id)
    {
        $request->validate([
            'nama' => 'required|string',
            'umur' => 'required|integer',
            'bio' => 'required|string',
        ]);

        DB::table('casts')
            ->where('id', $cast_id)
            ->update([
                'nama' => $request->nama,
                'umur' => $request->umur,
                'bio' => $request->bio,
                'updated_at' => now(),
            ]);

        return redirect('/cast');
    }

    public function destroy($cast_id)
    {
        DB::table('casts')->where('id', $cast_id)->delete();
        return redirect('/cast');
    }
}
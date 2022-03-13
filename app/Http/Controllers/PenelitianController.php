<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Manfaat,
    User,
};

class PenelitianController extends Controller
{
    public function index()
    {
        $manfaats = Manfaat::get();

        return view('publikasi', [
            'manfaats' => $manfaats,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'kategori' => 'required',
            'tempat' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'dokumen' => 'required|file',
            'manfaat' => 'required|array',
            'struktur' => 'required|array',
            'kadar' => 'required|array',
            'tumbuhan' => 'required|array',
            'dtumbuhan' => 'required|array',
        ]);

        $user = User::findOrFail(\Auth::user()->id);

        if ($request->hasFile('dokumen')) {
            $nam = time().'.pdf';
            $request->dokumen->storeAs('public/files', $nam);
            $request->merge(['file' => $nam]);
        }

        $penelitian = $user->penelitians()->create($request->only([
            'nama',
            'kategori',
            'tempat',
            'description',
            'file',
        ]));

        if ($request->hasFile('image')) {
            $name = time().'.jpg';
            $request->image->storeAs('public/images', $name);
            $penelitian->image()->create([
                'name' => $name
            ]);
        }

        foreach ($request->manfaat as $item) {
            $penelitian->manfaats()->attach($item);
        }

        for ($i=0; $i < count($request->struktur); $i++) { 
            $penelitian->strukturs()->create([
                'struktur' => $request->struktur[$i],
                'kadar' => $request->kadar[$i],
            ]);
        }

        for ($i=0; $i < count($request->tumbuhan); $i++) { 
            $penelitian->anatomis()->create([
                'struktur' => $request->tumbuhan[$i],
                'detail' => $request->dtumbuhan[$i],
            ]);
        }

        return redirect('/sukses-upload');
    }
}

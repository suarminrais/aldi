<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masukan;

class MasukanController extends Controller
{
    public function index()
    {
        $masukans = Masukan::latest()->get();

        return view('masukan', [
            'masukans' => $masukans,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'masukan' => 'required',
        ]);

        Masukan::create($request->all());

        return view('sukses-masukan');
    }

    public function delete($id)
    {
        $masukan = Masukan::findOrFail($id);
        $masukan->delete();

        return redirect()->back();
    }
}

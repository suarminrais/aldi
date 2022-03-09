<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User,
    Manfaat,
    Penelitian,
};

class AdminController extends Controller
{
    public function index()
    {
        $penelitians = Penelitian::latest()->get();
        if (\Auth::user()->type === 'admin') return view('admin', ['penelitians' => $penelitians]);
        return redirect('/');
    }

    public function manfaat()
    {
        $manfaats = Manfaat::latest()->get();
        if (\Auth::user()->type === 'admin') return view('manfaat', ['manfaats' => $manfaats]);
        return abort(404);
    }

    public function manfaatStore(Request $request)
    {
        if (\Auth::user()->type === 'admin')
        {
            $this->validate($request, [
                'nama' => 'required',
            ]);
            Manfaat::create($request->all());
            return redirect()->back();
        }
        return abort(404);
    }

    public function updatePenelitian($id)
    {
        $penelitian = Penelitian::findOrFail($id);
        $penelitian->update(['status' => true]);
        return redirect()->back();
    }

    public function deletePenelitian($id)
    {
        $penelitian = Penelitian::findOrFail($id);
        $penelitian->manfaats()->detach();
        $penelitian->delete();
        return redirect()->back();
    }

    public function deleteManfaat($id)
    {
        $manfaat = Manfaat::findOrFail($id);
        $manfaat->penelitians()->detach();
        $manfaat->delete();
        return redirect()->back();
    }
}

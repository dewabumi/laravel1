<?php

namespace App\Http\Controllers;

use App\Kota;
use App\OutletModel;
use App\ProgramModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class DaftarCont extends Controller
{
    public function index()
    {
        $cities = Kota::all();
        return view('daftar-front', compact(['cities']));
    }

    public function show(Request $request)
    {
        $jadwal = $request->jadwal_program;
        $outlet_id = $request->outlet_id;
        $outlet = OutletModel::where('id', $outlet_id)->firstOrFail();
        $program = ProgramModel::with('outlet')
            ->where('jadwal_program', 'like', "%" . $jadwal . "%")
            ->whereHas('outlet', function (Builder $q) use ($outlet_id) {
                $q->where('id', $outlet_id);
            })->orderBy('harga_program', 'ASC')->get();
        return view('hasil-pencarian', compact(['program', 'outlet', 'jadwal']));
    }
}

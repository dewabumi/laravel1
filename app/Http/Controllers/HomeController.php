<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\PendaftarModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $result = PendaftarModel::with('orders')->get();
        return view('home' , ['result' => $result]);
    }
	
	function list ()
	{
	$results = DB::select('select * from pendaftar_tabel where id = ?', array(1));	
	}
}

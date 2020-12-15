<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

use App\ProgramModel;
use App\OutletModel;

use App\Pendaftar_tabel;
use App\Pendaftar_order;


class DaftarController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->jadwal_program;
        $id_outlet = $request->id_outlet;
        $cities = DB::table('kota')->get();
        $program = DB::table('program')
            ->join('outlet', 'program.outlet', '=', 'outlet.id')
            ->where('jadwal_program', 'like', "%" . $cari . "%")
            ->where('outlet.id', $id_outlet)
            ->select(
                'outlet_name',
                'outlet_alamat',
                'outlet.id as idOutlet',
                'program.id as idProgram',
                'nama_program',
                'tingkat_program',
                'harga_program'
            )
            ->orderBy('harga_program', 'ASC')
            ->get();
        return view(
            'daftar',
            [
                'regencies' => $cities,
                'program'   => $program
            ]
        );
        
    }

    function outlet()
    {
        $id_regencies = $_POST['id_regencies'];
        if ($id_regencies == '') {
            exit;
        } else {
            $get_outlet = DB::table('outlet')->where('regencies', $id_regencies)->get();
            echo '<option selected disabled>--Pilih Outlet--</option>';
            foreach ($get_outlet as $outlet) {
                echo '<option value="' . $outlet->id . '">' . $outlet->outlet_name . '-' . $outlet->outlet_alamat . '</option>';
            }
        }
    }

    function program()
    {
        $id_outlet = $_POST['id_outlet'];
        if ($id_outlet == '') {
            exit;
        } else {
            $get_program = DB::table('program')
                ->where('outlet', $id_outlet)
                ->orderBy('id')
                ->groupBy('jadwal_program')
                ->get();
            echo '<option selected disabled>--Pilih Program--</option>';
            foreach ($get_program as $program) {
                echo '<option value="' . $program->jadwal_program . '"> ' . $program->jadwal_program . '</option>';
            }
        }
    }

    public function methodBaru($request) //bebas parameter variable nya mau apa namanya
    { 
        $a = ProgramModel::where('jadwal_program', $request)->get(); //bedanya disini, disini gausah pake where like, karena kita cuma mau ngambil apa yang di passing sama parameter
        return view('hasil-pencarian')->compact('a'); // nanti dipassing ke view nya gini. terus nanti di foreach kaya biasa pake foreach($a as $b)
    }

    public function daftarIni($id)
    {
        $data   = Crypt::decrypt($id);
        $kota   = DB::table('kota')->get();
        $kotas  = DB::table('program')
            ->join('outlet', 'program.outlet', '=', 'outlet.id')
            ->where('program.id', $data)
            ->first();

        $passId = ProgramModel::where('id', $data)
            ->firstOrFail();
            dd($passId);
        return view('form', [
            'passId'    => $passId,
            'kota'      => $kota,
            'kotas'     => $kotas
        ]);
    }

    public function storeDaftar(Request $request)
    {
        $message = [
            'required'      => 'Kolom :attribute harus di isi',
            'numeric'       => 'Kolom :attribute hanya boleh di isi angka',
            'email'         => ':attribute tidak valid',
            'digits'        => ':input tidak sesuai, :attribute maksimal 12 angka',
            'digits'        => ':input tidak sesuai, :attribute maksimal 5 angka'
        ];
        $this->validate($request, [
            'pendaftar_nama'                => 'required',
            'pendaftar_jenis_kelamin'       => 'required',
            'pendaftar_email'               => 'required|email',
            'pendaftar_telepon'             => 'required|numeric|min:12',
            'pendaftar_alamat_jalan'        => 'required',
            'pendaftar_alamat_kota'         => 'required',
            'pendaftar_alamat_postal'       => 'required|numeric|min:5',
            'pendaftar_lahir_kota'          => 'required',
            'pendaftar_lahir_kota'          => 'required',
            'pendaftar_ibu'                 => 'required',
            'pendaftar_sekolah'             => 'required',
        ], $message);
        $data1 = Pendaftar_tabel::create([
            'pendaftar_nama'                => $request->pendaftar_nama,
            'pendaftar_jenis_kelamin'       => $request->pendaftar_jenis_kelamin,
            'pendaftar_email'               => $request->pendaftar_email,
            'pendaftar_telepon'             => $request->pendaftar_telepon,
            'pendaftar_alamat_jalan'        => $request->pendaftar_alamat_jalan,
            'pendaftar_alamat_kota'         => $request->pendaftar_alamat_kota,
            'pendaftar_alamat_postal'       => $request->pendaftar_alamat_postal,
            'pendaftar_lahir_kota'          => $request->pendaftar_lahir_kota,
            'pendaftar_lahir'               => $request->pendaftar_lahir,
            'pendaftar_ibu'                 => $request->pendaftar_ibu,
            'pendaftar_sekolah'             => $request->pendaftar_sekolah,
            'pendaftar_pernah'              => $request->pendaftar_pernah
        ]);
        $data1_id = $data1->id;

        $unique = substr($request->pendaftar_telepon, -4);
        $random = mt_rand(100000, 9999999);
        Pendaftar_order::create([
            'id_pendaftar'                 => $data1_id,
            'id_program'                   => $request->pendaftar_program,
            'pendaftar_invoice'            => $unique . $random,
            'pendaftar_tagihan'            => $request->harga_program,
            'pendaftar_status_bayar'       => FALSE
        ]);
        $request->session()->flash('sukses', 'Terima kasih telah mendaftar, kamu akan dihubungi oleh admin GO segera untuk langkah selanjutnya');
        return redirect()->to('https://ganeshaoperation.com/');
    }

    function kecamatan()
    {
        $idKota = $_POST['pendaftar_alamat_kota'];
        if ($idKota == '') {
            exit;
        } else {
            $getKecamatan = DB::table('kecamatan')->where('kota_id', $idKota)->get();
            echo '<option selected disabled>--Pilih Kecamatan--</option>';
            foreach ($getKecamatan as $kecamatan) {
                if (old('pendaftar_alamat_kecamatan') == $kecamatan->id) {
                    echo '<option selected value="' . $kecamatan->id . '">' . $kecamatan->name . '</option>';
                } else {
                    echo '<option value="' . $kecamatan->id . '">' . $kecamatan->name . '</option>';
                }
            }
        }
    }

    function kelurahan()
    {
        $idKecamatan = $_POST['pendaftar_alamat_kecamatan'];
        if ($idKecamatan == '') {
            exit;
        } else {
            $getKelurahan = DB::table('kelurahan')->where('kecamatan_id', $idKecamatan)->get();
            echo '<option selected disabled>--Pilih Kelurahan--</option>';
            foreach ($getKelurahan as $kelurahan) {
                if (old('pendaftar_alamat_kelurahan') == $kelurahan->id) {
                    echo '<option selected value="' . $kelurahan->id . '">' . $kelurahan->name . '</option>';
                } else {
                    echo '<option value="' . $kelurahan->id . '">' . $kelurahan->name . '</option>';
                }
            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use File;
use Hash;
use Session;
use App\User;

use App\Voting;

use App\Jurusan;
use App\Pemilih;
use App\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function kandidat_ekonomi_detail()
    {
        return view('kandidat_ekonomi_detail');
    }

    public function kandidat_akutansi_detail()
    {
        return view('kandidat_akutansi_detail');
    }

    public function kandidat_manajemen_detail()
    {
        return view('kandidat_manajemen_detail');
    }

    public function voting_ekonomi()
    {
        return view('voting_ekonomi');
    }

    public function voting_akuntansi()
    {
        return view('voting_akuntansi');
    }

    public function voting_manajemen()
    {
        return view('voting_manajemen');
    }

    public function quickcount()
    {
        $kandidat = Kandidat::all();
        return view('quickcount', ['kandidat' => $kandidat]);
    }

    public function kandidat()
    {
        $kandidat = Kandidat::all();
        return view('kandidat', ['kandidat' => $kandidat]);
    }

    public function kandidat_detail()
    {
        $kandidat = Kandidat::find($id);
        return view('kandidat_detail', ['kandidat' => $kandidat]);
    }

    public function voting_panduan()
    {

        if(!Session::get('login')){
            // jika belum login
            // return view('login_siswa');
            return redirect(route('depan.login.siswa'))->with('alert','Silahkan login terlebih dulu untuk voting');
        }else{
            // jika sudah login
            // cek jika sudah voting
            $id_pemilih = Session::get('id');
            $cek = Voting::where('pemilih_id',$id_pemilih);
            if($cek->count() > 0){
                return view('voting_sudah');
            }else{
                // $kandidat = Kandidat::all();
                return view('voting_panduan');
            }
        }

    }

    public function voting()
    {

        if(!Session::get('login')){
            // jika belum login
            // return view('login_siswa');
            return redirect(route('depan.login.siswa'))->with('alert','Silahkan login terlebih dulu untuk voting');
        }else{
            // jika sudah login
            // cek jika sudah voting
            $id_pemilih = Session::get('id');
            $cek = Voting::where('pemilih_id',$id_pemilih);
            if($cek->count() > 0){
                return view('voting_sudah');
            }else{
                $kandidat = Kandidat::all();
                return view('voting', ['kandidat' => $kandidat]);
            }
        }

    }

    public function voting_aksi(Request $request)
    {
        // dd($request->kandidat);
        $kandidat_id = $request->kandidat;
        $pemilih_id = Session::get('id');

        Voting::create([
            'kandidat_id' => $kandidat_id,
            'pemilih_id' => $pemilih_id
        ]);

        return redirect(route('depan.login.siswa.logout'));
    }




    public function login_siswa()
    {
        return view('login_siswa');
    }

    public function register_siswa()
    {
        $jurusan = Jurusan::all();
        // dd($jurusan);
        return view('register_siswa', ['jurusan' => $jurusan]);
    }

    public function register_siswa_aksi(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            'nim' => 'required',
            'password' => 'required',
            'email' => 'required',
            'jurusan_id' => 'required',
            'status' => 'required',
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        Pemilih::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'jurusan_id' => $request->jurusan_id,
            'status' => $request->status,
        ]);
        return redirect( route('depan'))->with('success', 'Data Pemilih Berhasil Ditambahkan, Silahakan Menunggu Verifikasi Dari Panitia Selam 30 Menit');
    }

    public function login_siswa_aksi(Request $request){

        $nis = $request->nis;
        $password = $request->password;

        $data = Pemilih::where('nim',$nis)->first();

        if($data){
            // dd($data->status);
            if($data->status != 1){
                return redirect(route('depan.login.siswa'))->with('alert','Login gagal, Data kamu belum diverifikasi oleh panitia');
            }
            if(Hash::check($password,$data->password)){
                Session::put('id',$data->id);
                Session::put('nama',$data->nama);
                Session::put('nis',$data->nis);
                Session::put('jurusan_id',$data->jurusan_id);
                Session::put('login',TRUE);
                return redirect(route('depan.panduan.voting'));
            }else{
                return redirect(route('depan.login.siswa'))->with('alert','Login gagal!');
            }
        }
        else{
            return redirect(route('depan.login.siswa'))->with('alert','Login gagal!');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect(route('depan.login.siswa'))->with('alert','Kamu sudah logout');
    }

    public function arahan()
    {
        return view('arahan');
    }

}

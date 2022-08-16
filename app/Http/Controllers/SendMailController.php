<?php

namespace App\Http\Controllers;

use Mail;
use App\Pemilih;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function send(Request $request){

        $pemilih = Pemilih::find($request->id);
        $pemilih->status = $request->status;

        $pemilih->save();
        try{
            Mail::send('isiemail', array('pesan' => $request->pesan) , function($pesan) use($request){
                $pesan->to($request->penerima,'Verifikasi')->subject('Verifikasi Email');
                $pesan->from('pemilwajurusanfebub2021@gmail.com','Verifikasi Akun email anda');
            });
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
        return redirect(route('pemilih'))->with("success","Pemilih telah diupdate dan dikirim email!");
    }
}

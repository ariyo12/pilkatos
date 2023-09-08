<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class UserController extends Controller
{
    //
    public function index()
    {
        return view('user.index');
    }
    public function votinglogin()
    {
        return view('user.votinglogin');
    }

    public function cektoken(Request $data)
    {
        $token = $data->input('usertoken');
        $tanggal_lahir = $data->input('tanggal_lahir');

        $cek = DB::table('pemilih')->where(['username' => $token])->first();
        $status = DB::table('pemilih')->where(['username' => $token,
                                                'status' => 2 ])->first();
        
        if (!$cek) {
            Session::flash('Gagal','NIS Tidak Ditemukan');
            return redirect('/votinglogin');
        } else {
            if(!$status){
                Session::flash('Gagal','NIS Yang Di Input Telah Memilih Kandidat');
                return redirect('/votinglogin');
            }else{
                if ($status->tanggal_lahir == $tanggal_lahir) {
                   $data->session()->put('token',$token);
                   return redirect('/voting');
                }else{
                    Session::flash('Gagal','Tanggal Lahir Yang Di Input Tidak Sesuai Dengan Data Kami, Silahkan Hub Panitia Pilketos');
                    return redirect('/votinglogin');
                }
            }
        }
        
    }
      
    public function ApiCektoken(Request $data)
    {
        $token = $data->usertoken;

        $cek = DB::table('pemilih')->where(['username' => $token])->first();
        $status = DB::table('pemilih')->where(['username' => $token,
                                                'status' => 2 ])->first();
        
        if (!$cek) {
            return response()->json([
                'success' => '0',
                'message' => 'Token Tidak Ditemukan'
            ]);
        } else {
            if(!$status){
                return response()->json([
                    'success' => '0',
                    'message' => 'Token Telah Digunakan'
                ]);
            }else{
                return response()->json([
                    'success' => '1',
                    'message' => 'Berhasil Masuk',
                    'token'   => $token
                ]);
            }
        }
        
    }
}

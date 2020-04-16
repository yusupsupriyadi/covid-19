<?php

namespace App\Http\Controllers;
use DB;
use App\Uji;
use App\User;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index($id)
    {
    	$user = User::find($id);
    	$uji = DB::table('uji')->where('id_pengguna', $user->id)->first();

    	if(empty($uji->keterangan))
    	{
    		return redirect('/uji')->with('warning','Kamu harus melakukan tes terlebih dahulu agar bisa melihat hasil');
    	}

    	return view('hasil.index', compact('uji'));
    	
    }
}

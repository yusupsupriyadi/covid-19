<?php

namespace App\Http\Controllers;

use App\Uji;
use App\User;
use DB;
use Illuminate\Http\Request;

class UjiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uji.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {

        $j = $request->all();

        $request->validate([
        'JA1'=> 'required',
        'JA2'=> 'required',
        'JA3'=> 'required',
        'JA4'=> 'required',
        'JA5'=> 'required',
        'JA6'=> 'required',
        'JA7'=> 'required',
        'JA8'=> 'required',
        'JA9'=> 'required',
        'JA10'=> 'required',
        'JA11'=> 'required',
        'JA12'=> 'required',
        'JA13'=> 'required',
        'JA14'=> 'required',
        'JA15'=> 'required',
        'JA16'=> 'required',
        'JA17'=> 'required',
        'JA18'=> 'required',
        'JA19'=> 'required',
        'JA20'=> 'required',
        'JA21'=> 'required',
        ]);

        $yes = 0;
        $no = 0;
        foreach ($j as $item) {
            if ($item == "1") {
                $yes++;
            }else{
                $no++;
            }
        }
        if ($yes <= 7) {
            $hasil = "resiko rendah";
        }else if($yes <= 14 ){
            $hasil = "resiko sedang";
        }else if ($yes <= 21) {
            $hasil = "resiko tinggi";
        }

       
        $user = User::find($id);
        $uji = DB::table('uji')->where('id_pengguna', $user->id)->first();

        if (empty($uji->skor)) {
        $uji =  new \App\Uji; 
        $uji->id_pengguna = $user->id;
        $uji->skor = $yes;
        $uji->keterangan = $hasil; 
        $uji->save();
        }

        
        $uji = DB::table('uji')->where('id_pengguna', $user->id)->first();
        $update = Uji::find($uji->id);
        $update->update([
                'skor' => $yes,
                'keterangan' => $hasil,
            ]);
    


        
        



        return redirect('/uji')->with('sukses','Berhasil melakukan tesnya sekarang kamu bisa lihat di menu "HASIL TES"');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Uji  $uji
     * @return \Illuminate\Http\Response
     */
    public function show(Uji $uji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Uji  $uji
     * @return \Illuminate\Http\Response
     */
    public function edit(Uji $uji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Uji  $uji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Uji  $uji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uji $uji)
    {
        //
    }

    public function pengisian()
    {
        return view('uji.pengisian');
    }
}

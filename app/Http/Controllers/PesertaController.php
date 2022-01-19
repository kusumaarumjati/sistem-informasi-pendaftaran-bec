<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wali;
use App\Models\peserta;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//$peserta = peserta::all();
          $peserta = peserta::where('status','=',0)
                    ->where('STATUS_PESERTA','=',0)
                    ->get();
          $wali = wali::all();
        return view('pages/peserta', compact('peserta','wali'));
    }

    public function index_tidakaktif()
    {
        //$peserta = peserta::all();
          $peserta = peserta::where('status','=',0)
                    ->where('STATUS_PESERTA','=',1)
                    ->get();
          $wali = wali::all();
        return view('pages/pesertalulus', compact('peserta','wali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peserta = peserta::all();
        $wali = wali::all();
        return view('pages/pesertatambah', compact('peserta','wali'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            //'NO_PESERTA' => 'required',
            'NIK_AYAH' => 'required',
            'NAMA_PESERTA'=>'required',
            'ALAMAT_PESERTA'=>'required',
            'TELP_PESERTA'=>'required',
            'STATUS_PESERTA'=>'required',
            'PEKERJAAN'=>'required',
            'PENDIDIKAN'=>'required',
            'TEMPATLAHIR'=>'required',
            'TGL_LAHIR'=>'required',
            'USERNAME'=>'required',
             'PASSWORD'=>'required',
            'status'=>'required'

        ]);

      peserta::create([
            //'NO_PESERTA' => $request->NO_PESERTA,
            'NIK_AYAH' => $request->NIK_AYAH,
            'NAMA_PESERTA' => $request->NAMA_PESERTA,
            'ALAMAT_PESERTA' => $request->ALAMAT_PESERTA,
            'TELP_PESERTA' => $request->TELP_PESERTA,
            'STATUS_PESERTA' => $request->STATUS_PESERTA,
            'PEKERJAAN'=>$request->PEKERJAAN,
            'PENDIDIKAN'=>$request->PENDIDIKAN,
            'TEMPATLAHIR'=>$request->TEMPATLAHIR,
            'TGL_LAHIR'=>$request->TGL_LAHIR,
             'USERNAME' => $request->USERNAME,
            'PASSWORD' => $request->PASSWORD,
            'status' => $request->status
        ]);
        return redirect('/peserta')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = peserta::find($id);
        $wali = wali::all();
        return view('pages/pesertaedit', compact('peserta','wali'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    	//dd($request);
        $this->validate($request,[
            //'NO_PESERTA' => 'required',
            'NIK_AYAH' => 'required',
            'NAMA_PESERTA'=>'required',
            'ALAMAT_PESERTA'=>'required',
            'TELP_PESERTA'=>'required',
            'STATUS_PESERTA'=>'required',
            'PEKERJAAN'=>'required',
            'PENDIDIKAN'=>'required',
            'TEMPATLAHIR'=>'required',
            'TGL_LAHIR'=>'required',
            'USERNAME'=>'required',
             'PASSWORD'=>'required',
            'status'=>'required'
        ]);

        // dd($request);
      $peserta = peserta::find($request->NO_PESERTA);
      $peserta->NIK_AYAH = $request->NIK_AYAH;
            $peserta->NAMA_PESERTA = $request->NAMA_PESERTA;
             $peserta->ALAMAT_PESERTA = $request->ALAMAT_PESERTA;
              $peserta->TELP_PESERTA = $request->TELP_PESERTA;
               $peserta->STATUS_PESERTA = $request->STATUS_PESERTA;
                $peserta->PEKERJAAN = $request->PEKERJAAN;
                 $peserta->PENDIDIKAN = $request->PENDIDIKAN;
                  $peserta->TEMPATLAHIR = $request->TEMPATLAHIR;
                   $peserta->TGL_LAHIR = $request->TGL_LAHIR;
               $peserta->USERNAME = $request->USERNAME;
               $peserta->PASSWORD = $request->PASSWORD;
            $peserta->status = $request->status;
            
            $peserta->save();
        return redirect('/peserta')->with('info','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $peserta = peserta::find($id);
        $peserta->status = 1;
        $peserta->save();
        return redirect('/peserta')->with('danger','Data berhasil dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//$pegawai = pegawai::all();
          $pegawai = pegawai::where('status','=',0)
                    ->get();
        return view('pages/pegawai', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = pegawai::all();
        return view('pages/pegawaitambah', compact('pegawai'));
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
            //'NO_PEGAWAI' => 'required',
            'NAMA_PEG'=>'required',
            'JABATAN_PEG'=>'required',
            'ALAMAT_PEG'=>'required',
            'TELP_PEG'=>'required',
            'EMAIL_PEG'=>'required',
            'USERNAME'=>'required',
            'PASSWORD'=>'required',
            'status'=>'required'

        ]);

      pegawai::create([
            //'NO_PEGAWAI' => $request->NO_PEGAWAI,
            'NAMA_PEG' => $request->NAMA_PEG,
            'JABATAN_PEG' => $request->JABATAN_PEG,
            'ALAMAT_PEG' => $request->ALAMAT_PEG,
            'TELP_PEG' => $request->TELP_PEG,
            'EMAIL_PEG' => $request->EMAIL_PEG,
             'USERNAME' => $request->USERNAME,
            'PASSWORD' => $request->PASSWORD,
            'status' => $request->status
        ]);
        return redirect('/pegawai')->with('success','Data berhasil ditambahkan');
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
        $pegawai = pegawai::find($id);
        return view('pages/pegawaiedit', compact('pegawai'));
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
            //'NO_PEGAWAI' => 'required',
            'NAMA_PEG'=>'required',
            'JABATAN_PEG'=>'required',
            'ALAMAT_PEG'=>'required',
            'TELP_PEG'=>'required',
            'EMAIL_PEG'=>'required',
            'USERNAME'=>'required',
            'PASSWORD'=>'required',
            'status'=>'required'

        ]);

        // dd($request);
      $pegawai = pegawai::find($request->NO_PEGAWAI);
            $pegawai->NAMA_PEG = $request->NAMA_PEG;
            $pegawai->JABATAN_PEG = $request->JABATAN_PEG;
             $pegawai->ALAMAT_PEG = $request->ALAMAT_PEG;
              $pegawai->TELP_PEG = $request->TELP_PEG;
               $pegawai->EMAIL_PEG = $request->EMAIL_PEG;
               $pegawai->USERNAME = $request->USERNAME;
               $pegawai->PASSWORD = $request->PASSWORD;
            $pegawai->status = $request->status;
            
            $pegawai->save();
        return redirect('/pegawai')->with('info','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pegawai = pegawai::find($id);
        $pegawai->status = 1;
        $pegawai->save();
        return redirect('/pegawai')->with('danger','Data berhasil dihapus');
    }
}
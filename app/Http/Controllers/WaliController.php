<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wali;

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//$wali = wali::all();
          $wali = wali::where('status','=',0)
                    ->get();
        return view('pages/wali', compact('wali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wali = wali::all();
        return view('pages/walitambah', compact('wali'));
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
            'NIK_AYAH' => 'required',
            'NAMA_AYAH'=>'required',
            'PEKERJAAN_AYAH'=>'required',
            'PENDIDIKAN_AYAH'=>'required',
            'TELP_AYAH'=>'required',
            'NIK_IBU'=>'required',
             'NAMA_IBU'=>'required',
            'PEKERJAAN_IBU'=>'required',
            'PENDIDIKAN_IBU'=>'required',
            'TELP_IBU'=>'required',
            'status'=>'required'

        ]);

      wali::create([
            'NIK_AYAH' => $request->NIK_AYAH,
            'NAMA_AYAH' => $request->NAMA_AYAH,
            'PEKERJAAN_AYAH' => $request->PEKERJAAN_AYAH,
            'PENDIDIKAN_AYAH' => $request->PENDIDIKAN_AYAH,
            'TELP_AYAH' => $request->TELP_AYAH,
             'NIK_IBU' => $request->NIK_IBU,
            'NAMA_IBU' => $request->NAMA_IBU,
            'PEKERJAAN_IBU' => $request->PEKERJAAN_IBU,
            'PENDIDIKAN_IBU' => $request->PENDIDIKAN_IBU,
            'TELP_IBU' => $request->TELP_IBU,
            'status' => $request->status
        ]);
        return redirect('/wali')->with('success','Data berhasil ditambahkan');
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
        $wali = wali::find($id);
        return view('pages/waliedit', compact('wali'));
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
            'NIK_AYAH' => 'required',
            'NAMA_AYAH'=>'required',
            'PEKERJAAN_AYAH'=>'required',
            'PENDIDIKAN_AYAH'=>'required',
            'TELP_AYAH'=>'required',
             'NIK_IBU'=>'required',
             'NAMA_IBU'=>'required',
            'PEKERJAAN_IBU'=>'required',
            'PENDIDIKAN_IBU'=>'required',
            'TELP_IBU'=>'required',
            'status'=>'required'
        ]);

        // dd($request);
      $wali = wali::find($request->NIK_AYAH);
            $wali->NAMA_AYAH = $request->NAMA_AYAH;
             $wali->PEKERJAAN_AYAH = $request->PEKERJAAN_AYAH;
              $wali->PENDIDIKAN_AYAH = $request->PENDIDIKAN_AYAH;
               $wali->TELP_AYAH = $request->TELP_AYAH;
               $wali->NIK_IBU = $request->NIK_IBU;
               $wali->NAMA_IBU = $request->NAMA_IBU;
             $wali->PEKERJAAN_IBU = $request->PEKERJAAN_IBU;
              $wali->PENDIDIKAN_IBU = $request->PENDIDIKAN_IBU;
               $wali->TELP_IBU = $request->TELP_IBU;
            $wali->status = $request->status;
            
            $wali->save();
        return redirect('/wali')->with('info','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $wali = wali::find($id);
        $wali->status = 1;
        $wali->save();
        return redirect('/wali')->with('danger','Data berhasil dihapus');
    }
}
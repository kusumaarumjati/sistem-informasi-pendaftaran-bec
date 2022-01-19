<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//$kelas = kelas::all();
          $kelas = kelas::where('status','=',0)
                    ->get();
        return view('pages/kelas', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        return view('pages/kelastambah', compact('kelas'));
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
            //'NO_KELAS' => 'required',
            'NAMA_KELAS'=>'required',
            'status'=>'required'

        ]);

      kelas::create([
            //'NO_KELAS' => $request->NO_KELAS,
            'NAMA_KELAS' => $request->NAMA_KELAS,
            'status' => $request->status
        ]);
        return redirect('/kelas')->with('success','Data berhasil ditambahkan');
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
        $kelas = kelas::find($id);
        return view('pages/kelasedit', compact('kelas'));
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
            //'NO_KELAS' => 'required',
            'NAMA_KELAS'=>'required',
            'status'=>'required'
        ]);

        // dd($request);
       $kelas = kelas::find($request->NO_KELAS);
            $kelas->NAMA_KELAS = $request->NAMA_KELAS;
            $kelas->status = $request->status;
            
            $kelas->save();
        return redirect('/kelas')->with('info','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $kelas = kelas::find($id);
        $kelas->status = 1;
        $kelas->save();
        return redirect('/kelas')->with('danger','Data berhasil dihapus');
    }
}
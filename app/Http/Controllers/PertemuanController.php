<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tahunajar;
use App\Models\peserta;
use App\Models\kelas;
use App\Models\pegawai;
use App\Models\pertemuan;

class pertemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	  
          $pertemuan = pertemuan::where('status','=',0)
                    ->get();
          $peserta = peserta::all();
          $tahunajar = tahunajar::all();
          $kelas = kelas::all();
          $pegawai = pegawai::all();
        return view('pages/pertemuan', compact('pertemuan','peserta','tahunajar','kelas','pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pertemuan = pertemuan::all();
          $peserta = peserta::all();
          $tahunajar = tahunajar::all();
          $kelas = kelas::all();
          $pegawai = pegawai::all();
        return view('pages/pertemuantambah', compact('pertemuan','peserta','tahunajar','kelas','pegawai'));
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
            'NO_PERTEMUAN' => 'required',
            'NO_PESERTA' => 'required',
            'ID_TAHUNAJAR'=>'required',
            'NO_KELAS'=>'required',
            'NO_PEGAWAI'=>'required',
            'JUMLAH_PERTEMUAN' => 'required',
            'status'=>'required'

        ]);

      pertemuan::create([
            'NO_PERTEMUAN' => $request->NO_PERTEMUAN,
            'NO_PESERTA' => $request->NO_PESERTA,
            'ID_TAHUNAJAR' => $request->ID_TAHUNAJAR,
            'NO_KELAS' => $request->NO_KELAS,
            'NO_PEGAWAI' => $request->NO_PEGAWAI,
            'JUMLAH_PERTEMUAN' => $request->JUMLAH_PERTEMUAN,
            'status' => $request->status
        ]);
        return redirect('/pertemuan')->with('success','Data berhasil ditambahkan');
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
         $pertemuan = pertemuan::find($id);
         $peserta = peserta::all();
          $tahunajar = tahunajar::all();
          $kelas = kelas::all();
          $pegawai = pegawai::all();
        return view('pages/pertemuanedit', compact('pertemuan','peserta','tahunajar','kelas','pegawai'));
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
           //'NO_PERTEMUAN' => 'required',
            'NO_PESERTA' => 'required',
            'ID_TAHUNAJAR'=>'required',
            'NO_KELAS'=>'required',
            'NO_PEGAWAI'=>'required',
            'JUMLAH_PERTEMUAN' => 'required',
            'status'=>'required'
        ]);

        // dd($request);
      $pertemuan = pertemuan::find($request->NO_PERTEMUAN);
      $pertemuan->NO_PESERTA = $request->NO_PESERTA;
            $pertemuan->ID_TAHUNAJAR = $request->ID_TAHUNAJAR;
            $pertemuan->NO_KELAS = $request->NO_KELAS;
            $pertemuan->NO_PEGAWAI = $request->NO_PEGAWAI;
             $pertemuan->JUMLAH_PERTEMUAN = $request->JUMLAH_PERTEMUAN;
            $pertemuan->status = $request->status;
            
            $pertemuan->save();
        return redirect('/pertemuan')->with('info','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pertemuan = pertemuan::find($id);
        $pertemuan->status = 1;
        $pertemuan->save();
        return redirect('/pertemuan')->with('danger','Data berhasil dihapus');
    }
}
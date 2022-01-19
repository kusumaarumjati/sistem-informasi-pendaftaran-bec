<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembayaran;
use App\Models\pemesanan;
use App\Models\pegawai;
use App\Models\jenpem;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	  
          $pembayaran = pembayaran::orderBy('TGL_PEMBAYARAN','desc')
                        ->where('status','=',0)
                        ->where('STATUS_PEMBAYARAN','=',1)
                        ->get();
          $pemesanan = pemesanan::where('STATUS_PEMESANAN','=',0)
                    ->get();
          $pegawai = pegawai::all();
          $jenpem = jenpem::all();
        return view('pages/pembayaran', compact('pembayaran','pemesanan','pegawai','jenpem'));
    }

    public function index_blmlunas()
    {
          
          $pembayaran = pembayaran::where('status','=',0)
                        ->where('STATUS_PEMBAYARAN','=',0)
                        ->get();
          $pemesanan = pemesanan::where('STATUS_PEMESANAN','=',0)
                    ->get();
          $pegawai = pegawai::all();
          $jenpem = jenpem::all();
        return view('pages/pembayaran_blmlunas', compact('pembayaran','pemesanan','pegawai','jenpem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembayaran = pembayaran::all();
         $pemesanan = pemesanan::where('STATUS_PEMESANAN','=',0)
                    ->get();
          $pegawai = pegawai::all();
          $jenpem = jenpem::all();
        return view('pages/pembayarantambah', compact('pembayaran','pemesanan','pegawai','jenpem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request,[
            //'NO_PEMBAYARAN' => 'required',
            'NO_REGIS' => 'required',
            'NO_PEGAWAI'=>'required',
            'NO_JENPEM'=>'required',
            'TGL_PEMBAYARAN' => 'required',
            'TOTAL_PEMBAYARAN' => 'required',
            'STATUS_PEMBAYARAN' => 'required',
            'status'=>'required'

        ]);

      pembayaran::create([
            //'NO_PEMBAYARAN' => $request->NO_PEMBAYARAN,
            'NO_REGIS' => $request->NO_REGIS,
            'NO_PEGAWAI' => $request->NO_PEGAWAI,
            'NO_JENPEM' => $request->NO_JENPEM,
            'TGL_PEMBAYARAN' => $request->TGL_PEMBAYARAN,
            'TOTAL_PEMBAYARAN' => $request->TOTAL_PEMBAYARAN,
            'STATUS_PEMBAYARAN'=> $request->STATUS_PEMBAYARAN,
            'status' => $request->status
        ]);
        return redirect('/pembayaran')->with('success','Data berhasil ditambahkan');
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
         $pembayaran = pembayaran::find($id);
         $pemesanan = pemesanan::where('STATUS_PEMESANAN','=',0)
                    ->get();
          $pegawai = pegawai::all();
          $jenpem = jenpem::all();
        return view('pages/pembayaranedit', compact('pembayaran','pemesanan','pegawai','jenpem'));
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
           //'NO_PEMBAYARAN' => 'required',
            'NO_REGIS' => 'required',
            'NO_PEGAWAI'=>'required',
            'NO_JENPEM'=>'required',
            'TGL_PEMBAYARAN' => 'required',
            'TAGIHAN_PEMBAYARAN' => 'required',
            'TOTAL_PEMBAYARAN' => 'required',
            'STATUS_PEMBAYARAN' => 'required',
            'status'=>'required'
        ]);

        // dd($request);
      $pembayaran = pembayaran::find($request->NO_PEMBAYARAN);
      $pembayaran->NO_REGIS = $request->NO_REGIS;
            $pembayaran->NO_PEGAWAI = $request->NO_PEGAWAI;
            $pembayaran->NO_JENPEM = $request->NO_JENPEM;
            $pembayaran->STATUS_PEMBAYARAN = $request->STATUS_PEMBAYARAN;
             $pembayaran->TGL_PEMBAYARAN = $request->TGL_PEMBAYARAN;
             $pembayaran->TOTAL_PEMBAYARAN = $request->TOTAL_PEMBAYARAN;
            $pembayaran->status = $request->status;
            
            $pembayaran->save();
        return redirect('/pembayaran')->with('info','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pembayaran = pembayaran::find($id);
        $pembayaran->status = 1;
        $pembayaran->save();
        return redirect('/pembayaran')->with('danger','Data berhasil dihapus');
    }
}
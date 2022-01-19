<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesanan;
use App\Models\peserta;
use App\Models\program;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	  
          $pemesanan = pemesanan::orderBy('TGL_PEMESANAN','desc')
                    ->orderBy('NO_REGIS','desc')
                    ->where('status','=',0)
                    ->get();
          $peserta = peserta::all();
          $program = program::all();
        return view('pages/pemesanan', compact('pemesanan','peserta','program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemesanan = pemesanan::all();
         $peserta = peserta::all();
          $program = program::all();
        return view('pages/pemesanantambah', compact('pemesanan','peserta','program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $this->validate($request,[
            //'NO_REGIS' => 'required',
            'NO_PESERTA' => 'required',
            'NO_PROGRAM'=>'required',
            'TGL_PEMESANAN' => 'required',
            'TAGIHAN_PEMBAYARAN' => 'required',
            // 'TGL_MULAI' => 'required',
            'STATUS_PEMESANAN' => 'required',
            'status'=>'required'

        ]);

        
      pemesanan::create([
            //'NO_REGIS' => $request->NO_REGIS,
            'NO_PESERTA' => $request->NO_PESERTA,
            'NO_PROGRAM' => $request->NO_PROGRAM,
            'TGL_PEMESANAN' => $request->TGL_PEMESANAN,
            'TAGIHAN_PEMBAYARAN' => $request->TAGIHAN_PEMBAYARAN,
            // 'TGL_MULAI' => $request->TGL_MULAI,
            'STATUS_PEMESANAN' => $request->STATUS_PEMESANAN,
            'status' => $request->status
        ]);
        return redirect('/pemesanan')->with('success','Data berhasil ditambahkan');
    }

   public function submit(Request $request)
    {
        //dd($request);
        // $program1 = program::where('NO_PROGRAM', $NO_PROGRAM)->first();
        $data = new pemesanan;
        $data->NO_REGIS = $request->NO_REGIS;
        $data->NO_PESERTA = $request->NO_PESERTA;
        $data->NO_PROGRAM = $request->NO_PROGRAM;
        $data->TGL_PEMESANAN = $request->TGL_PEMESANAN;
        $data->TAGIHAN_PEMBAYARAN = ($request->TAGIHAN_PEMBAYARAN*$data->program->BIAYA_BULANAN)+($data->program->BIAYA_MASUK);
        $data->STATUS_PEMESANAN = $request->STATUS_PEMESANAN;
        $data->status = $request->status;
        $data->save();


         return redirect('/pemesanan')->with('success','Data berhasil ditambahkan');
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
         $pemesanan = pemesanan::find($id);
         $peserta = peserta::all();
          $program = program::all();
        return view('pages/pemesananedit', compact('pemesanan','peserta','program'));
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
            //'NO_REGIS' => 'required',
           'NO_PESERTA' => 'required',
            'NO_PROGRAM'=>'required',
            'TGL_PEMESANAN' => 'required',
            'TAGIHAN_PEMBAYARAN' => 'required',
            // 'TGL_MULAI' => 'required',
            'STATUS_PEMESANAN' => 'required',
            'status'=>'required'
        ]);

        // dd($request);
      $pemesanan = pemesanan::find($request->NO_REGIS);
      $pemesanan->NO_PESERTA = $request->NO_PESERTA;
            $pemesanan->NO_PROGRAM = $request->NO_PROGRAM;
             $pemesanan->TGL_PEMESANAN = $request->TGL_PEMESANAN;
             $pemesanan->TAGIHAN_PEMBAYARAN = $request->TAGIHAN_PEMBAYARAN;
            // $pemesanan->TGL_MULAI = $request->TGL_MULAI;
            $pemesanan->status = $request->status;
            
            $pemesanan->save();
        return redirect('/pemesanan')->with('info','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pemesanan = pemesanan::find($id);
        $pemesanan->status = 1;
        $pemesanan->save();
        return redirect('/pemesanan')->with('danger','Data berhasil dihapus');
    }

    public function bayar($id)
    {
         $pemesanan = pemesanan::find($id);
        $pemesanan->STATUS_PEMESANAN = 1;
        $pemesanan->save();
        return redirect('/pemesanan')->with('info','Data berhasil dibayar');
    }

    public function batalbayar($id)
    {
         $pemesanan = pemesanan::find($id);
        $pemesanan->STATUS_PEMESANAN = 0;
        $pemesanan->save();
        return redirect('/pemesanan')->with('danger','Data berhasil dibatalkan');
    }

    public function findHarga($id)
   {
       $data = program::select('BIAYA_BULANAN', 'BIAYA_MASUK')
       ->where('NO_PROGRAM',$id)
       ->get();
       return response()->json($data);
   }
}
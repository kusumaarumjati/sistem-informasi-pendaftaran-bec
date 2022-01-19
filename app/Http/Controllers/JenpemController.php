<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenpem;
//use Haruncpi\LaravelIdGenerator\IdGenerator;

class JenpemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//$jenpem = jenpem::all();
          $jenpem = jenpem::where('status','=',0)
                    ->get();
        return view('pages/jenpem', compact('jenpem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenpem = jenpem::all();
        return view('pages/jenpemtambah', compact('jenpem'));
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
            //'NO_JENPEM' => 'required',
            'NAMA_JENPEM'=>'required',
            'status'=>'required'

        ]);

        // $id = IdGenerator::generate(['table' => 'jenis_pembayaran', 'length' => 5, 'prefix' =>'7']);
        // //output: INV-000001 link article generate custom id laravel https://laravelarticle.com/laravel-custom-id-generator

      jenpem::create([
            //'NO_JENPEM' => $request->NO_JENPEM,
            'NAMA_JENPEM' => $request->NAMA_JENPEM,
            'status' => $request->status
        ]);

        //   $id = IdGenerator::generate(['table' => 'jenpem', 'length' => 5, 'prefix' =>'7']);
        // //output: INV-000001 link article generate custom id laravel https://laravelarticle.com/laravel-custom-id-generator

        // $data = new jenpem;
        // $data->NO_JENPEM= $id;
        // $data->NAMA_JENPEM = $request->NAMA_JENPEM;
        // $data->save();

        return redirect('/jenpem')->with('success','Data berhasil ditambahkan');
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
        $jenpem = jenpem::find($id);
        return view('pages/jenpemedit', compact('jenpem'));
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
            //'NO_JENPEM' => 'required',
            'NAMA_JENPEM'=>'required',
            'status'=>'required',
        ]);

        // dd($request);
       $jenpem = jenpem::find($request->NO_JENPEM);
            $jenpem->NAMA_JENPEM = $request->NAMA_JENPEM;
            $jenpem->status = $request->status;
            
            $jenpem->save();
        return redirect('/jenpem')->with('info','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $jenpem = jenpem::find($id);
        $jenpem->status = 1;
        $jenpem->save();
        return redirect('/jenpem')->with('danger','Data berhasil dihapus');
    }
}
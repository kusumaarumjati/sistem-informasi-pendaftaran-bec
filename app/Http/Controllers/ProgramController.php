<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\program;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//$program = program::all();
        $program = program::where('status','=',0)
                    ->get();
        return view('pages/program', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = program::all();
        return view('pages/programtambah', compact('program'));
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
            //'NO_PROGRAM' => 'required',
            'NAMA_PROGRAM'=>'required',
             'BIAYA_MASUK'=>'required',
             'BIAYA_BULANAN'=>'required',
            'status'=>'required'

        ]);

      program::create([
            //'NO_PROGRAM' => $request->NO_PROGRAM,
            'NAMA_PROGRAM' => $request->NAMA_PROGRAM,
            'BIAYA_MASUK' => $request->BIAYA_MASUK,
            'BIAYA_BULANAN' => $request->BIAYA_BULANAN,
            'status' => $request->status
        ]);
        return redirect('/program')->with('success','Data berhasil ditambahkan');
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
        $program = program::find($id);
        return view('pages/programedit', compact('program'));
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
            //'NO_PROGRAM' => 'required',
            'NAMA_PROGRAM'=>'required',
             'BIAYA_MASUK'=>'required',
             'BIAYA_BULANAN'=>'required',
            'status'=>'required'
        ]);

        // dd($request);
       $program = program::find($request->NO_PROGRAM);
            $program->NAMA_PROGRAM = $request->NAMA_PROGRAM;
            $program->BIAYA_MASUK = $request->BIAYA_MASUK;
            $program->BIAYA_BULANAN = $request->BIAYA_BULANAN;
            $program->status = $request->status;
            
            $program->save();
        return redirect('/program')->with('info','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $program = program::find($id);
        $program->status = 1;
        $program->save();
        return redirect('/program')->with('danger','Data berhasil dihapus');
    }
}
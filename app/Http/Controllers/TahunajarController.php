<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tahunajar;

class TahunajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//$tahunajar = tahunajar::all();
          $tahunajar = tahunajar::where('status','=',0)
                    ->get();
        return view('pages/tahunajar', compact('tahunajar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tahunajar = tahunajar::all();
        return view('pages/tahunajartambah', compact('tahunajar'));
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
            //'ID_TAHUNAJAR' => 'required',
            'TAHUNAJAR'=>'required',
            'status'=>'required'

        ]);

      tahunajar::create([
            //'ID_TAHUNAJAR' => $request->ID_TAHUNAJAR,
            'TAHUNAJAR' => $request->TAHUNAJAR,
            'status' => $request->status
        ]);
        return redirect('/tahunajar')->with('success','Data berhasil ditambahkan');
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
        $tahunajar = tahunajar::find($id);
        return view('pages/tahunajaredit', compact('tahunajar'));
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
            //'ID_TAHUNAJAR' => 'required',
            'TAHUNAJAR'=>'required',
            'status'=>'required'
        ]);

        // dd($request);
       $tahunajar = tahunajar::find($request->ID_TAHUNAJAR);
            $tahunajar->TAHUNAJAR = $request->TAHUNAJAR;
            $tahunajar->status = $request->status;
            
            $tahunajar->save();
        return redirect('/tahunajar')->with('info','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tahunajar = tahunajar::find($id);
        $tahunajar->status = 1;
        $tahunajar->save();
        return redirect('/tahunajar')->with('danger','Data berhasil dihapus');
    }
}
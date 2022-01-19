@extends('layout.main')

@section('pages_tittle','pembayaran')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Edit pembayaran</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/pembayaran')}}">pembayaran</a></li>
  <li class="breadcrumb-item active">Edit pembayaran</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data pembayaran</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="post" action="{{url('/pembayaran/update/'.$pembayaran->id)}}">
		 {{ csrf_field() }}
		 <div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NO PEMBAYARAN</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NO_PEMBAYARAN" value="{{ $pembayaran->NO_PEMBAYARAN }}" readonly="readonly" required="required">
			
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">JENIS PEMBAYARAN</label>
			<div class="col-sm-12 col-md-10">
				<select name="NO_JENPEM" id="NO_JENPEM" class="custom-select2 form-control">
					<option value="{{ $pembayaran->NO_JENPEM }}">{{ $pembayaran->jenpem->NAMA_JENPEM }}</option>
					 @foreach ($jenpem as $jp)
					 <option value="{{ $jp->NO_JENPEM }}">{{ $jp->NAMA_JENPEM }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				<select name="NO_PEGAWAI" id="NO_PEGAWAI" class="custom-select2 form-control">
					<option value="{{ $pembayaran->NO_PEGAWAI }}">{{ $pembayaran->pegawai->NAMA_PEG }}</option>
					 @foreach ($pegawai as $peg)
					 <option value="{{ $peg->NO_PEGAWAI }}">{{ $peg->NAMA_PEG }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NO PEMESANAN</label>
			<div class="col-sm-12 col-md-10">
				<select name="NO_REGIS" id="NO_REGIS" class="custom-select2 form-control">
					<option value="{{ $pembayaran->NO_REGIS }}">{{ $pembayaran->NO_REGIS }}</option>
					 @foreach ($pemesanan as $pem)
					 <option value="{{ $pem->NO_REGISNO_REGIS }}">{{ $pem->NO_REGIS }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>

		

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TOTAL PEMBAYARAN</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TOTAL_PEMBAYARAN" value="{{ $pembayaran->TOTAL_PEMBAYARAN }}" required="required">
			</div>
		</div>
		
		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TGL PEMBAYARAN</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="date" name="TGL_PEMBAYARAN" value="{{ $pembayaran->TGL_PEMBAYARAN }}" required="required">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">STATUS PEMBAYARAN</label>
			<div class="col-sm-12 col-md-10">
				 <select name="STATUS_PEMBAYARAN" id="STATUS_PEMBAYARAN" class="form-control">
            <option value="{{ $pembayaran->STATUS_PEMBAYARAN}}">
            	<?php
            	if ($pembayaran->STATUS_PEMBAYARAN == 0) {
            		echo "Belum Lunas";
            	} elseif ($pembayaran->STATUS_PEMBAYARAN == 1) {
            		echo " Lunas";
            	} 
                ?>  
            </option>
          <option value="0" > Belum Lunas </option>
          <option value="1" >  Lunas </option>  
          </select>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="status" value="{{ $pembayaran->status }}" required="required">
			</div>
		</div>
		
		<input type="submit" name="update" value="Update" class="btn btn-outline-primary" >
	</form>
</div>
</div>
@endsection

@section('js_custom')

@endsection

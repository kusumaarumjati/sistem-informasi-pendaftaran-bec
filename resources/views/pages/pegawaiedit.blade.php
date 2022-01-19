@extends('layout.main')

@section('pages_tittle','Pegawai')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Edit Pegawai</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/pegawai')}}">Pegawai</a></li>
  <li class="breadcrumb-item active">Edit Pegawai</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Pegawai</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="post" action="{{url('/pegawai/update/'.$pegawai->id)}}">
		 {{ csrf_field() }}
		 <div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NO PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NO_PEGAWAI" value="{{ $pegawai->NO_PEGAWAI }}" readonly="readonly" required="required">
			
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NAMA PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NAMA_PEG" value="{{ $pegawai->NAMA_PEG }}" required="required">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">JABATAN PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				 <select name="JABATAN_PEG" id="JABATAN_PEG" class="form-control">
            <option value="{{ $pegawai->JABATAN_PEG}}">
            	<?php
            	if ($pegawai->JABATAN_PEG == 0) {
            		echo "Admin";
            	} elseif ($pegawai->JABATAN_PEG == 1) {
            		echo " Pengajar";
            	} 
                ?>  
            </option>
          <option value="0" > Admin </option>
          <option value="1" >  Pengajar </option>  
          </select>
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">ALAMAT PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="ALAMAT_PEG" value="{{ $pegawai->ALAMAT_PEG }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TELP PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TELP_PEG" value="{{ $pegawai->TELP_PEG }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">EMAIL PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="EMAIL_PEG" value="{{ $pegawai->EMAIL_PEG }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">USERNAME </label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="USERNAME" value="{{ $pegawai->USERNAME }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PASSWORD</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PASSWORD" value="{{ $pegawai->PASSWORD }}" required="required">
			</div>
		</div>


		<div class="form-group row">
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="status" value="{{ $pegawai->status }}" required="required">
			</div>
		</div>
		
		<input type="submit" name="update" value="Update" class="btn btn-outline-primary" >
	</form>
</div>
</div>
@endsection

@section('js_custom')

@endsection

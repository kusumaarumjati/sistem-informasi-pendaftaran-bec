@extends('layout.main')

@section('pages_tittle','Pegawai')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Pegawai</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/pegawai')}}">Pegawai</a></li>
  <li class="breadcrumb-item active">Pegawai</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Pegawai</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="get" action="{{url('/pegawai/simpan/')}}">
		 {{ csrf_field() }}
		 <div class="form-group row">
		 	<!-- <label class="col-sm-12 col-md-2 col-form-label">NO PEGAWAI</label> -->
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="NO_PEGAWAI" placeholder="NO PEGAWAI">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NAMA PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NAMA_PEG" placeholder="NAMA PEGAWAI">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">JABATAN PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				 <select name="JABATAN_PEG" id="JABATAN_PEG" class="form-control">
            <option>JABATAN PEGAWAI</option>
          <option value="0" > Admin </option>
          <option value="1" >  Pengajar </option>  
          </select>
			</div>
		</div>

			<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">ALAMAT PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="ALAMAT_PEG" placeholder="ALAMAT PEGAWAI" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TELP PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TELP_PEG" placeholder="TELP PEGAWAI" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">EMAIL PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="EMAIL_PEG" placeholder="EMAIL PEGAWAI" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">USERNAME </label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="USERNAME" placeholder="USERNAME" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PASSWORD</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PASSWORD" placeholder="PASSWORD" required="required">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="status" value="0">
			</div>
		</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-outline-primary" >
	</form>
</div>
</div>
@endsection

@section('js_custom')

@endsection

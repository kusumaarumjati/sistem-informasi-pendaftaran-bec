@extends('layout.main')

@section('pages_tittle','Orang Tua Wali')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Orang Tua Wali</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/wali')}}">Orang Tua Wali</a></li>
  <li class="breadcrumb-item active">Tambah Jenis Pembayaran</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Orang Tua Wali</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="get" action="{{url('/wali/simpan/')}}">
		 {{ csrf_field() }}
		 <div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NIK WALI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NIK_WALI" placeholder="NIK">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NAMA AYAH</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NAMA_AYAH" placeholder="NAMA AYAH">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PEKERJAAN AYAH</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PEKERJAAN_AYAH" placeholder="PEKERJAAN AYAH">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PENDIDIKAN AYAH</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PENDIDIKAN_AYAH" placeholder="PENDIDIKAN AYAH">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TELEPON AYAH</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TELP_AYAH" placeholder="TELEPON AYAH">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NIK IBU</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NIK_IBU" placeholder="NIK IBU">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NAMA IBU</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NAMA_IBU" placeholder="NAMA IBU">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PEKERJAAN IBU</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PEKERJAAN_IBU" placeholder="PEKERJAAN IBU">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PENDIDIKAN IBU</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PENDIDIKAN_IBU" placeholder="PENDIDIKAN IBU">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TELEPON IBU</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TELP_IBU" placeholder="TELEPON IBU">
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

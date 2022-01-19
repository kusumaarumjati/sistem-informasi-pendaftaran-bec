@extends('layout.main')

@section('pages_tittle','Peserta')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Peserta</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/peserta')}}">Peserta</a></li>
  <li class="breadcrumb-item active">Pegawai</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Peserta</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="get" action="{{url('/peserta/simpan/')}}">
		 {{ csrf_field() }}
		  <div class="form-group row">
		  	<!-- <label class="col-sm-12 col-md-2 col-form-label">NO PESERTA</label> -->
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="NO_PESERTA" placeholder="NO_PESERTA" required="required">
			
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NIK WALI</label>
			<div class="col-sm-12 col-md-10">
				<select  name="NIK_AYAH" id="NIK_AYAH" class="custom-select2 form-control">
					<option>Pilih Wali</option>
					 @foreach ($wali as $w)
					 <option value="{{ $w->NIK_AYAH }}">{{ $w->NAMA_AYAH }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NAMA PESERTA</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NAMA_PESERTA" placeholder="NAMA_PESERTA" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">ALAMAT PESERTA</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="ALAMAT_PESERTA" placeholder="ALAMAT_PEG" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TELP PESERTA</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TELP_PESERTA" placeholder="TELP_PESERTA" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PEKERJAAN</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PEKERJAAN" placeholder="PEKERJAAN" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PENDIDIKAN</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PENDIDIKAN" placeholder="PENDIDIKAN" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TEMPAT LAHIR</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TEMPATLAHIR" placeholder="TEMPATLAHIR" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TGL_LAHIR</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="date" name="TGL_LAHIR" placeholder="TGL_LAHIR" required="required">
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
				<input class="form-control" type="hidden" name="STATUS_PESERTA" value="0" required="required">
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

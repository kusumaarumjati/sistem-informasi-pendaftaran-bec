@extends('layout.main')

@section('pages_tittle','Orang Tua Wali')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Edit Orang Tua Wali</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/wali')}}">Orang Tua Wali</a></li>
  <li class="breadcrumb-item active">Edit Orang Tua Wali</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Orang Tua Wali</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="post" action="{{url('/wali/update/'.$wali->id)}}">
		 {{ csrf_field() }}
		 <div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NIK AYAH</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NIK_AYAH" value="{{ $wali->NIK_AYAH }}" readonly="readonly" required="required">
			
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NAMA AYAH</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NAMA_AYAH" value="{{ $wali->NAMA_AYAH }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PEKERJAAN AYAH</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PEKERJAAN_AYAH" value="{{ $wali->PEKERJAAN_AYAH }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PENDIDIKAN AYAH</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PENDIDIKAN_AYAH" value="{{ $wali->PENDIDIKAN_AYAH }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TELEPON AYAH</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TELP_AYAH" value="{{ $wali->TELP_AYAH }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NIK IBU</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NIK_IBU" value="{{ $wali->NIK_IBU }}" required="required" readonly="">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NAMA IBU</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NAMA_IBU" value="{{ $wali->NAMA_IBU }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PEKERJAAN IBU</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PEKERJAAN_IBU" value="{{ $wali->PEKERJAAN_IBU }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PENDIDIKAN IBU</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PENDIDIKAN_IBU" value="{{ $wali->PENDIDIKAN_IBU }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TELEPON IBU</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TELP_IBU" value="{{ $wali->TELP_IBU }}" required="required">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="status" value="{{ $wali->status }}" required="required">
			</div>
		</div>
		
		<input type="submit" name="update" value="Update" class="btn btn-outline-primary" >
	</form>
</div>
</div>
@endsection

@section('js_custom')

@endsection

@extends('layout.main')

@section('pages_tittle','Kelas')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Tambah Program</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/program')}}">Program</a></li>
  <li class="breadcrumb-item active">Tambah Program</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Program</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="get" action="{{url('/program/simpan/')}}">
		 {{ csrf_field() }}
		 <div class="form-group row">
		 	<!-- <label class="col-sm-12 col-md-2 col-form-label">No Program</label> -->
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="NO_PROGRAM" placeholder="No Program">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Nama Program</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NAMA_PROGRAM" placeholder="Nama Program">
				<input class="form-control" type="hidden" name="status" value="0">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">BIAYA MASUK</label>
			<div class="col-sm-12 col-md-10">
				
				<input class="form-control" type="text" name="BIAYA_MASUK" placeholder="BIAYA MASUK" required="required">
				
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">BIAYA BULANAN</label>
			<div class="col-sm-12 col-md-10">
				
				<input class="form-control" type="text" name="BIAYA_BULANAN" placeholder="BIAYA BULANAN" required="required">
				
			</div>
		</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-outline-primary" >
	</form>
</div>
</div>
@endsection

@section('js_custom')

@endsection

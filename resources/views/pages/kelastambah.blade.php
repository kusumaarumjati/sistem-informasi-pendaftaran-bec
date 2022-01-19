@extends('layout.main')

@section('pages_tittle','Kelas')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Tambah Kelas</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/kelas')}}">Kelas</a></li>
  <li class="breadcrumb-item active">Tambah Kelas</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Kelas</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="get" action="{{url('/kelas/simpan/')}}">
		 {{ csrf_field() }}
		 <div class="form-group row">
		 	<!-- <label class="col-sm-12 col-md-2 col-form-label">No Kelas</label> -->
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="NO_KELAS" placeholder="No Kelas">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Nama Kelas</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NAMA_KELAS" placeholder="Nama Kelas">
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

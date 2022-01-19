@extends('layout.main')

@section('pages_tittle','Tahun Ajar')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Tahun Ajar</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/tahunajar')}}">Tahun Ajar</a></li>
  <li class="breadcrumb-item active">Tambah Tahun Ajar</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Tahun Ajar</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="get" action="{{url('/tahunajar/simpan/')}}">
		 {{ csrf_field() }}
		 <div class="form-group row"><!-- <label class="col-sm-12 col-md-2 col-form-label">ID Tahun Ajar</label> -->
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="ID_TAHUNAJAR" placeholder="ID_TAHUNAJAR">
			</div>
		</div>
		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Tahun Ajar</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TAHUNAJAR" placeholder="Tahun Ajar">
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

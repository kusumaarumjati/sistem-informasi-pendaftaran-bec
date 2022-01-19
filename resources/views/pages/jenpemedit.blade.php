@extends('layout.main')

@section('pages_tittle','Jenis Pembayaran')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Edit Jenis Pembayaran</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/jenpem')}}">Jenis Pembayaran</a></li>
  <li class="breadcrumb-item active">Edit Jenis Pembayaran</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Jenis Pembayaran</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="post" action="{{url('/jenpem/update/'.$jenpem->id)}}">
		 {{ csrf_field() }}
		 <div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">No Jenis Pembayaran</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NO_JENPEM" value="{{ $jenpem->NO_JENPEM }}" readonly="readonly" required="required">
			
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Jenis Pembayaran</label>
			<div class="col-sm-12 col-md-10">
				
				<input class="form-control" type="text" name="NAMA_JENPEM" value="{{ $jenpem->NAMA_JENPEM }}" required="required">
				<input class="form-control" type="hidden" name="status" value="{{ $jenpem->status }}" required="required">
			</div>
		</div>
		
		<input type="submit" name="update" value="Update" class="btn btn-outline-primary" >
	</form>
</div>
</div>
@endsection

@section('js_custom')

@endsection

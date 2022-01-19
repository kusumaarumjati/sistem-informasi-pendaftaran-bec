@extends('layout.main')

@section('pages_tittle','Tahun Ajar')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Edit Tahun Ajar</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/tahunajar')}}">Tahun Ajar</a></li>
  <li class="breadcrumb-item active">Edit Tahun Ajar</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Tahun Ajar</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="post" action="{{url('/tahunajar/update/'.$tahunajar->id)}}">
		 {{ csrf_field() }}
		 <div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">ID TAHUNAJAR</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="ID_TAHUNAJAR" value="{{ $tahunajar->ID_TAHUNAJAR }}" readonly="readonly" required="required">
			
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Tahun Ajar</label>
			<div class="col-sm-12 col-md-10">
				
				<input class="form-control" type="text" name="TAHUNAJAR" value="{{ $tahunajar->TAHUNAJAR }}" required="required">
				<input class="form-control" type="hidden" name="status" value="{{ $tahunajar->status }}" required="required">
			</div>
		</div>
		
		<input type="submit" name="update" value="Update" class="btn btn-outline-primary" >
	</form>
</div>
</div>
@endsection

@section('js_custom')

@endsection

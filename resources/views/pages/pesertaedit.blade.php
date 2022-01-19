@extends('layout.main')

@section('pages_tittle','Peserta')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Edit Peserta</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/peserta')}}">Peserta</a></li>
  <li class="breadcrumb-item active">Edit Peserta</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Peserta</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="post" action="{{url('/peserta/update/'.$peserta->id)}}">
		 {{ csrf_field() }}
		 <div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NO PESERTA</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NO_PESERTA" value="{{ $peserta->NO_PESERTA }}" readonly="readonly" required="required">
			
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NIK WALI</label>
			<div class="col-sm-12 col-md-10">
				<select name="NIK_AYAH" id="NIK_AYAH" class="custom-select2 form-control">
					<option value="{{ $peserta->NIK_AYAH }}">{{ $peserta->wali->NAMA_AYAH }}</option>
					 @foreach ($wali as $w)
					 <option value="{{ $w->NIK_AYAH }}">{{ $w->NAMA_AYAH }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NAMA PESERTA</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NAMA_PESERTA" value="{{ $peserta->NAMA_PESERTA }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">ALAMAT PESERTA</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="ALAMAT_PESERTA" value="{{ $peserta->ALAMAT_PESERTA }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TELP PESERTA</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TELP_PESERTA" value="{{ $peserta->TELP_PESERTA }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PEKERJAAN</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PEKERJAAN" value="{{ $peserta->PEKERJAAN }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PENDIDIKAN</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PENDIDIKAN" value="{{ $peserta->PENDIDIKAN }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TEMPAT LAHIR</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TEMPATLAHIR" value="{{ $peserta->TEMPATLAHIR }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TGL_LAHIR</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="date" name="TGL_LAHIR" value="{{ $peserta->TGL_LAHIR }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">USERNAME </label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="USERNAME" value="{{ $peserta->USERNAME }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PASSWORD</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="PASSWORD" value="{{ $peserta->PASSWORD }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">STATUS_PESERTA</label>
			<div class="col-sm-12 col-md-10">
				<!-- <input class="form-control" type="text" name="STATUS_PESERTA" value="{{ $peserta->STATUS_PESERTA }}" required="required"> -->
				  <select name="STATUS_PESERTA" id="STATUS_PESERTA" class="form-control">
            <option value="{{ $peserta->STATUS_PESERTA }}">
            	<?php
            	if ($peserta->STATUS_PESERTA == 0) {
            		echo "Aktif";
            	} elseif ($peserta->STATUS_PESERTA == 1) {
            		echo "Tidak Aktif";
            	} 
                ?>  
            </option>
          <option value="0" > Aktif </option>
          <option value="1" > Tidak Aktif </option>  
          </select>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="status" value="{{ $peserta->status }}" required="required">
			</div>
		</div>
		
		<input type="submit" name="update" value="Update" class="btn btn-outline-primary" >
	</form>
</div>
</div>
@endsection

@section('js_custom')

@endsection

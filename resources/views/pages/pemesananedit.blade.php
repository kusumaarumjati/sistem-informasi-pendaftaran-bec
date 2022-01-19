@extends('layout.main')

@section('pages_tittle','Pemesanan')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Edit Pemesanan</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/pemesanan')}}">Pemesanan</a></li>
  <li class="breadcrumb-item active">Edit Pemesanan</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Pemesanan</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="post" action="{{url('/pemesanan/update/'.$pemesanan->id)}}">
		 {{ csrf_field() }}
		 <div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NO REGIS</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NO_REGIS" value="{{ $pemesanan->NO_REGIS }}" readonly="readonly" required="required">
			
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Peserta</label>
			<div class="col-sm-12 col-md-10">
				<select name="NO_PESERTA" id="NO_PESERTA" class="custom-select2 form-control">
					<option value="{{ $pemesanan->NO_PESERTA }}">{{ $pemesanan->peserta->NAMA_PESERTA }}</option>
					 @foreach ($peserta as $pes)
					 <option value="{{ $pes->NO_PESERTA }}">{{ $pes->NAMA_PESERTA }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PROGRAM</label>
			<div class="col-sm-12 col-md-10">
				<select name="NO_PROGRAM" id="NO_PROGRAM" class="custom-select2 form-control">
					<option value="{{ $pemesanan->NO_PROGRAM }}">{{ $pemesanan->program->NAMA_PROGRAM }}</option>
					 @foreach ($program as $p)
					 <option value="{{ $p->NO_PROGRAM }}">{{ $p->NAMA_PROGRAM }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>
		
		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TGL PEMESANAN</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="date" name="TGL_PEMESANAN" value="{{ $pemesanan->TGL_PEMESANAN }}" required="required">
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TAGIHAN PEMBAYARAN</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TAGIHAN_PEMBAYARAN" value="{{ $pemesanan->TAGIHAN_PEMBAYARAN }}" required="required">
			</div>
		</div>

		<!-- <div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TGL MULAI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="date" name="TGL_MULAI" value="{{ $pemesanan->TGL_MULAI }}" required="required">
			</div>
		</div> -->

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">STATUS PEMESANAN</label>
			<div class="col-sm-12 col-md-10">
				 <select name="STATUS_PEMESANAN" id="STATUS_PEMESANAN" class="form-control">
            <option value="{{ $pemesanan->STATUS_PEMESANAN}}">
            	<?php
            	if ($pemesanan->STATUS_PEMESANAN == 0) {
            		echo "Belum Lunas";
            	} elseif ($pemesanan->STATUS_PEMESANAN == 1) {
            		echo " Lunas";
            	} 
                ?>  
            </option>
          <option value="0" > Lunas </option>
          <option value="1" > Belum Lunas </option>  
          </select>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="status" value="{{ $pemesanan->status }}" required="required">
			</div>
		</div>
		
		<input type="submit" name="update" value="Update" class="btn btn-outline-primary" >
	</form>
</div>
</div>
@endsection

@section('js_custom')

@endsection

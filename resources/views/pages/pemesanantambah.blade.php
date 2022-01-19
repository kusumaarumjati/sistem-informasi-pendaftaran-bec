@extends('layout.main')

@section('pages_tittle','Pemesanan')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Pemesanan</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/pemesanan')}}">Pemesanan</a></li>
  <li class="breadcrumb-item active">Tambah Pemesanan</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Peserta</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="get" action="{{url('/pemesanan/simpan/')}}">
		 {{ csrf_field() }}
		 <div class="form-group row">
		 	<!-- <label class="col-sm-12 col-md-2 col-form-label">NO REGIS</label> -->
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="NO_REGIS" placeholder="NO_REGIS"  required="required">
			
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Peserta</label>
			<div class="col-sm-12 col-md-10">
				<select name="NO_PESERTA" id="NO_PESERTA" class="custom-select2 form-control">
					<option>Peserta</option>
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
					<option>Program</option>
					 @foreach ($program as $p)
					 <option value="{{ $p->NO_PROGRAM }}">{{ $p->NAMA_PROGRAM }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>
		
		<div class="form-group row">
		<!-- <label class="col-sm-12 col-md-2 col-form-label">TGL PEMESANAN</label> -->
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="TGL_PEMESANAN" placeholder="TGL_PEMESANAN"  value="<?php
				 // date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d H:i:s')
				// $myinput='2005/15/09'; $sqldate=date('d-m-Y',strtotime($myinput)); echo $sqldate; 
				echo date('Y-m-d')
				  ?>" required="required" readonly>
			</div>
		</div>

		<div class="form-group row">
		<!-- <label class="col-sm-12 col-md-2 col-form-label">TAGIHAN PEMBAYARAN</label> -->
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="TAGIHAN_PEMBAYARAN" placeholder="TAGIHAN_PEMBAYARAN" readonly="readonly" required="required" value="6">
			</div>
		</div>

		<!-- <div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TGL MULAI</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="TGL_MULAI" placeholder="TGL_MULAI" required="required">
			</div>
		</div> -->

		<div class="form-group row">
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="STATUS_PEMESANAN" value="0">
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

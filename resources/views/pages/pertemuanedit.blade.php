@extends('layout.main')

@section('pages_tittle','Pertemuan')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Edit Pertemuan</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{url('/pertemuan')}}">Pertemuan</a></li>
  <li class="breadcrumb-item active">Edit Pertemuan</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Pertemuan</h2>
<div class="row">
<div class="col-12">
<br/>
	<form method="post" action="{{url('/pertemuan/update/'.$pertemuan->id)}}">
		 {{ csrf_field() }}
		 <div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">NO PERTEMUAN</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="NO_PERTEMUAN" value="{{ $pertemuan->NO_PERTEMUAN }}" required="required">
			
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Peserta</label>
			<div class="col-sm-12 col-md-10">
				<select name="NO_PESERTA" id="NO_PESERTA" class="custom-select2 form-control">
					<option value="{{ $pertemuan->NO_PESERTA }}">{{ $pertemuan->peserta->NAMA_PESERTA }}</option>
					 @foreach ($peserta as $pes)
					 <option value="{{ $pes->NO_PESERTA }}">{{ $pes->NAMA_PESERTA }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">TAHUN AJAR</label>
			<div class="col-sm-12 col-md-10">
				<select name="ID_TAHUNAJAR" id="ID_TAHUNAJAR" class="custom-select2 form-control">
					<option value="{{ $pertemuan->ID_TAHUNAJAR }}">{{ $pertemuan->tahunajar->TAHUNAJAR }}</option>
					 @foreach ($tahunajar as $ta)
					 <option value="{{ $ta->ID_TAHUNAJAR }}">{{ $ta->TAHUNAJAR }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">KELAS</label>
			<div class="col-sm-12 col-md-10">
				<select name="NO_KELAS" id="NO_KELAS" class="custom-select2 form-control">
					<option value="{{ $pertemuan->NO_KELAS }}">{{ $pertemuan->kelas->NAMA_KELAS }}</option>
					 @foreach ($kelas as $k)
					 <option value="{{ $k->NO_KELAS }}">{{ $k->NAMA_KELAS }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>

		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">PEGAWAI</label>
			<div class="col-sm-12 col-md-10">
				<select name="NO_PEGAWAI" id="NO_PEGAWAI" class="custom-select2 form-control">
					<option value="{{ $pertemuan->NO_PEGAWAI }}">{{ $pertemuan->pegawai->NAMA_PEG }}</option>
					 @foreach ($pegawai as $peg)
					 <option value="{{ $peg->NO_PEGAWAI }}">{{ $peg->NAMA_PEG }}
          			</option>
          			 @endforeach
          		</select>
			</div>
		</div>
		
		<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Pertemuan</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="JUMLAH_PERTEMUAN" value="{{ $pertemuan->JUMLAH_PERTEMUAN }}" required="required">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="hidden" name="status" value="{{ $pertemuan->status }}" required="required">
			</div>
		</div>
		
		<input type="submit" name="update" value="Update" class="btn btn-outline-primary" >
	</form>
</div>
</div>
@endsection

@section('js_custom')

@endsection

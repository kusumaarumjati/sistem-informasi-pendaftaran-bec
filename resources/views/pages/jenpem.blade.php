@extends('layout.main')

@section('pages_tittle','Jenis Pembayaran')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset ('assets')}}/vendors/styles/style.css">
@endsection

@section ('tittle')
<h4>Jenis Pembayaran</h4>
@endsection

@section('breadcrumb')
 <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Jenis Pembayaran</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Jenis Pembayaran</h2>
<div class="row">
<div class="col-12">
<div class="col-md-12 col-sm-12 text-right">
	<div class="dropdown">
		<a class="btn btn-info" href="{{url('/jenpem/tambah/')}}" role="button">Tambah Data</a>
		
	</div>
</div>
<br/>

<table class="data-table table stripe hover nowrap">
	<form>
		<thead>
			{{csrf_field()}}
			<tr>
				<th class="table-plus datatable-nosort">No Jenis Pembayaran</th>
				<th>Jenis Pembayaran</th>
				<th class="datatable-nosort">Action</th>
				</tr>
		</thead>
		<tbody>
			<!--NOTIFIKASI-->
			 @if (session('success'))
                <!-- <div class="alert-success">
                  <p>{{ session('success') }}</p>
                </div> -->
                <div class="alert alert-success  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>  
                    <strong>{{ session('success') }}</strong>
                </div>
                @endif

                @if (session('info'))
                <!-- <div class="alert-info">
                  <p>{{ session('info') }}</p>
                </div> -->
                 <div class="alert alert-info  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>  
                    <strong>{{ session('info') }}</strong>
                </div>
                @endif

                @if (session('danger'))
                <!-- <div class="alert-danger">
                  <p>{{ session('danger') }}</p>
                </div> -->
                 <div class="alert alert-danger  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>  
                    <strong>{{ session('danger') }}</strong>
                </div>
                @endif
                @if ($errors->any())
                <!-- <div class="alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    <p>Data tidak dapat ditambahkan karena data tidak lengkap</p>
                  </ul>
                </div> -->
                 <div class="alert alert-warning  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                    @foreach ($errors->all() as $error)
                    <!-- <li>{{ $error }}</li> -->
                    @endforeach
                    <!-- <p>Data tidak dapat ditambahkan karena data tidak lengkap</p> -->
                    <strong>Data tidak dapat ditambahkan karena data tidak lengkap</strong>
                  </ul>  
                    
                </div>
                @endif
                <!--END NOTIFIKASI-->
		 @foreach ($jenpem as $jp)
		 <tr>
		 	<td class="table-plus">{{$jp->NO_JENPEM}}</td>
			<td>{{$jp->NAMA_JENPEM}}</td>
			<td>
				<!-- <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
				<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a> -->
				<a class="" href="{{url('/jenpem/edit/'.$jp->NO_JENPEM)}}"><i class="dw dw-edit2"></i> Edit | </a>
				<a class="" href="{{url('/jenpem/hapus/'.$jp->NO_JENPEM)}}" onclick="return confirm('apakah anda yakin untuk menghapus?')"><i class="dw dw-delete-3"></i> Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
	</form>
</table>
</div>
</div>
@endsection

@section('js_custom')
<!-- js -->
	<script src="{{asset ('assets')}}/vendors/scripts/core.js"></script>
	<script src="{{asset ('assets')}}/vendors/scripts/script.min.js"></script>
	<script src="{{asset ('assets')}}/vendors/scripts/process.js"></script>
	<script src="{{asset ('assets')}}/vendors/scripts/layout-settings.js"></script>
	<script src="{{asset ('assets')}}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="{{asset ('assets')}}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{asset ('assets')}}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="{{asset ('assets')}}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="{{asset ('assets')}}/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="{{asset ('assets')}}/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="{{asset ('assets')}}/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="{{asset ('assets')}}/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="{{asset ('assets')}}/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="{{asset ('assets')}}/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="{{asset ('assets')}}/src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="{{asset ('assets')}}/vendors/scripts/datatable-setting.js"></script></body>
@endsection

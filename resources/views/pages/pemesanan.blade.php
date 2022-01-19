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
  <li class="breadcrumb-item active">Pemesanan</li>
@endsection

@section('content')
<h2 class="h4 mb-20">Data Pemesanan</h2>
<div class="row">
<div class="col-12">
<div class="col-md-12 col-sm-12 text-right">
	<div class="dropdown">
		<a class="btn btn-info" href="{{url('/pemesanan/tambah/')}}" role="button">Tambah Data</a>
		
	</div>
</div>
<br/>

<table class="data-table table stripe hover">
	<form>
		<thead>
			{{csrf_field()}}
			<tr>
				<th class="table-plus datatable-nosort">NO REGIS</th>
				<th>Peserta</th>
				<th>PROGRAM</th>
				<th>TGL PEMESANAN</th>
				<th>TAGIHAN PEMBAYARAN</th>
				<th>STATUS PEMESANAN</th>
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

		 @foreach ($pemesanan as $pem)
		 <!-- STATUS PEMESANAN BELUM LUNAS-->
		 <?php
            if($pem->STATUS_PEMESANAN == 0){
         ?>
		 <tr>
		 	<td class="table-plus">{{$pem->NO_REGIS}}</td>
			<td>{{$pem->peserta->NAMA_PESERTA}}</td>
			<td>{{$pem->program->NAMA_PROGRAM}}</td>
			<td>
				<?php
				 // date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y H:i:s')
				// $myinput='2005/15/09'; $sqldate=date('d-m-Y',strtotime($myinput)); echo $sqldate; 
				$myinput=$pem->TGL_PEMESANAN; 
				$sqldate=date('d-m-Y',strtotime($myinput)); echo $sqldate; 
				 ?>
			</td>
			<td>Rp. {{ number_format($pem->TAGIHAN_PEMBAYARAN) }}</td>
			<td scope="row">
                        <?php
                         if ($pem->STATUS_PEMESANAN == 0) {
                            echo "BELUM LUNAS";
                        } elseif ($pem->STATUS_PEMESANAN == 1) {
                            echo "LUNAS";
                        } 
                        ?>  
            </td>
			<td>
				<!-- <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
				<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a> -->
				<a class="" href="{{url('/pemesanan/edit/'.$pem->NO_REGIS)}}"><i class="dw dw-edit2"></i> Edit | </a>
				<a class="" href="{{url('/pemesanan/hapus/'.$pem->NO_REGIS)}}" onclick="return confirm('apakah anda yakin untuk menghapus?')"><i class="dw dw-delete-3"></i> Delete | </a>
				<a class="" href="{{url('/pemesanan/bayar/'.$pem->NO_REGIS)}}" onclick="return confirm('apakah anda yakin untuk membayar?')"><i class="dw dw-edit2"></i> Bayar</a>
			</td>
		</tr>
		<?php } 

		else{
			?>
			<!--APABILA STATUS PEMESANAN SUDAH LUNAS-->
			<tr>
		 	<td class="table-plus">{{$pem->NO_REGIS}}</td>
			<td>{{$pem->peserta->NAMA_PESERTA}}</td>
			<td>{{$pem->program->NAMA_PROGRAM}}</td>
			<td>
				<?php
				 // date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y H:i:s')
				// $myinput='2005/15/09'; $sqldate=date('d-m-Y',strtotime($myinput)); echo $sqldate; 
				$myinput=$pem->TGL_PEMESANAN; 
				$sqldate=date('d-m-Y',strtotime($myinput)); echo $sqldate; 
				 ?>
			</td>
			<td>Rp. {{ number_format($pem->TAGIHAN_PEMBAYARAN) }}</td> 
			<td scope="row">
                        <?php
                         if ($pem->STATUS_PEMESANAN == 0) {
                            echo "BELUM LUNAS";
                        } elseif ($pem->STATUS_PEMESANAN == 1) {
                            echo "LUNAS";
                        } 
                        ?>  
            </td>
            <td>
				<!-- <a class="" href="{{url('/pemesanan/batalbayar/'.$pem->NO_REGIS)}}" onclick="return confirm('apakah anda yakin untuk membatalkan?')"><i class="dw dw-edit2"></i> Batalkan Pembayaran</a> -->
				NO ACTION NEEDED
			</td>
			
		</tr>
		<?php }
		?>
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

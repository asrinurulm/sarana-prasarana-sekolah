<!DOCTYPE html>
<html lang="en">

<head>
  <title>.PDF</title>

<link href="{{ asset('img/prod.png') }}" rel="icon">
<link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('lib/advanced-datatable/css/jquery.dataTables.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/advanced-datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('lib/advanced-datatable/css/dataTables.bootstrap.css') }}" />
<link href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
<link href="{{ asset('css/dataTables.min.css') }}">
<link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
<link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<!-- Custom Sheila -->
<link href="{{ asset('css/select2.min.css') }}" rel="stylesheet"> 
<link href="{{ asset('css/sheila.css') }}" rel="stylesheet"> 


</head>

<body>
  <section id="container">
   
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->    
      <section class="wrapper site-min-height"> 
      <div class="col-md-12 col-sm-12 col-xs-12 content-panel">
	<div class="panel panel-default">
		<div class="panel-body" style="overflow-x: scroll;">
    <label>SMK Negeri 1 Cimahi</label>
    <center> <h2>Laporan Peminjaman Barang</h2> </center>
    <center> <h2>(LPB)</h2> </center>
    <br><br>
    <table class="table table-striped table-advance table-hover" id="table">
<thead>
<tr style="font-weight: bold;color:white;background-color:#2A3F54;">

    <th>No</th>
    <th>peminjam</th>
    <th>Nama Barang</th>
    <th>keterangan</th>
    <th class="text-center">jumlah pinjam</th>
    <th>Tanggal Pinjam</th>
    <th>Ruangan</th>

</tr>
</thead>

<tbody>
@php
  $no = 0;
@endphp
@foreach($pinjaman as $pj)
@if( $pj->status!='kembali' )
@if( $pj->persetujuan=='setuju' )
<tr style="background-color:white">
<td>{{ ++$no }}</td>
<td>{{ $pj->name}}</td>
<td>{{ $pj->nama}}</td>
<td>{{ $pj->keterangan}}</td>
<td>{{ $pj->jumlahpinjam}} Barang</td>
<td>{{ $pj->tanggal_pinjam}}</td>
<td>{{ $pj->nama_ruang}}</td>
</tr>
@endif
@endif
@endforeach
</tbody>
</table>
<br><br><br>
  <table ALIGN="right" class="table-bordered">
    <thead>
      <tr>
        <th class="text-center" colspan="2">Disetujui Oleh :</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-center">
        <td class="text-center"><br><br><br><br><br></td>
      </tr>
      <tr>
        <td class="text-center" width="35%">Operator Ruangan</td>
      </tr>
    </tbody>
  </table>
	  </div>
	</div>
</div>
        
      </section>
    <!--main content end-->

    
   <!-- sheila script -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script type="text/javascript" language="javascript" src="{{ asset('lib/advanced-datatable/js/jquery.dataTables.js') }}"></script>
  <script type="text/javascript" language="javascript" src="{{ asset('lib/advanced-datatable/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('lib/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('lib/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('lib/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <script src="{{ asset('lib/jquery.ui.touch-punch.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/common-scripts.js') }}"></script>
	<script src="{{ asset('lib/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/datatables.min.js') }}"></script>
  <script src="{{ asset('lib/dataTables.bootstrap4.min.css') }}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script src="{{ asset('js/notify.js') }}"></script>
  
  @yield('s');

  <script type="text/javascript">$('#Table').DataTable({
      "language": {
        "search": "Cari :",
        "lengthMenu": "Tampilkan _MENU_ data",
        "zeroRecords": "Tidak ada data",
        "emptyTable": "Tidak ada data",
        "info": "Menampilkan data _START_  - _END_  dari _TOTAL_ data",
        "infoEmpty": "Tidak ada data",
        "paginate": {
          "first": "Awal",
          "last": "Akhir",
          "next": ">",
          "previous": "<"
        }
      }
    });</script>

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    window.print()
  });
</script>

</body>

</html>

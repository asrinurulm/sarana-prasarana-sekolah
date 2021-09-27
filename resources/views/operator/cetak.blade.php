@extends('operator.tempoperator')

@section('title', 'Pengembalian Barang')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12 content-panel">
	<div class="panel panel-default">
		<div class="panel-heading">
    <h2><i class="fa fa-laptop"></i> Laporan Peminjaman</h2>
		</div>
		<div class="panel-body" style="overflow-x: scroll;">
    <label>SMK Negeri 1 Cimahi</label>
    <center> <h2>Laporan Peminjaman Barang</h2> </center>
    <br><br>
    <table class="table table-striped table-advance table-hover" id="Table">
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

<script src="../vendors/jquery/dist/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    window.print()
  });
</script>
@endsection
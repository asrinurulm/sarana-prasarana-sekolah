@extends('admin.tempadmin')

@section('title', 'Pengembalian Barang')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12 content-panel">
	<div class="panel panel-default">
		<div class="panel-heading">
    <h2><i class="fa fa-laptop"></i> Catatan Peminjaman</h2>
    <a href="{{ route('print') }}" class=""><button name="submit" type="button" value="cetak" class="btn btn-block btn-primary">cetak</button></a>
    {{csrf_field()}}
		
		</div>
		<div class="panel-body" style="overflow-x: scroll;">
    <table class="Table table-striped table-advance table-hover" id="Table">
<thead>
<tr style="font-weight: bold;color:white;background-color:#2A3F54;">

    <th>No</th>
    <th>peminjam</th>
    <th>Nama Barang</th>
    <th>Kode Inventaris</th>
    <th>kondisi barang</th>
    <th>keterangan</th>
    <th>Kode / nama ruangan</th>
    <th class="text-center">jumlah pinjam</th>
    <th>Tanggal Pinjam</th>

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
<td>{{ $pj->kode_inventaris}}</td>
<td>{{ $pj->kondisi}}</td>
<td>{{ $pj->keterangan}}</td>
<td>{{ $pj->kode_ruang}}/{{ $pj->nama_ruang}}</td>
<td>{{ $pj->jumlahpinjam}} Barang</td>
<td>{{ $pj->tanggal_pinjam}}</td>
</tr>
@endif
@endif
@endforeach
</tbody>
</table>
	  </div>
	</div>
</div>
@endsection
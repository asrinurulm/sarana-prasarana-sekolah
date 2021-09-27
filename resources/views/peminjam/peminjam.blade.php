@extends('peminjam.temppeminjam')

@section('title', 'Dasboard')

@section('content')

<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
    	<h2>Stok Barang Tersedia</h2>
	  </div>
  </div>
  <div class="panel-body" style="overflow-x: scroll;">
  <div class="form-group">
  <table class="table table-striped table-advance table-hover" id="Table">
<thead>
<tr style="font-weight: bold;color:white;background-color:#2A3F54;">

    <th>No</th>
    <th>Nama Barang</th>
    <th>Kondisi</th>
    <th class="text-center">Keterangan</th>
    <th class="text-center">Jenis</th>
    <th>Ruangan</th>
		<th>Stok tersedia</th>

</tr>
</thead>

<tbody>
@php
  $no = 0;
@endphp
@foreach($invent as $invent)
<tr style="background-color:white">
<td>{{ ++$no }}</td>
<td>{{ $invent->nama}}</td>
<td>{{ $invent->kondisi}}</td>
<td>{{ $invent->keterangan}}</td>
<td>{{ $invent->nama_jenis}}</td>
<td>{{ $invent->nama_ruang}}</td>
<td>{{ $invent->jumlah}} Barang</td>
</tr>
@endforeach
</tbody>
</table>
  </div>
  </div>
</div>

@endsection


@extends('admin.tempadmin')

@section('title', 'Data Barang')

@section('content')

@if (session('status'))
        <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('status') }}
        </div>
        </div>
        @elseif(session('error'))
        <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('error') }}
        </div>
        </div>
        @endif

<div class="col-md-12 col-sm-12 col-xs-12 content-panel">
	<div class="panel panel-default">
		<div class="panel-heading">
    <h2><i class="fa fa-laptop"></i> Data Barang
    <a href="{{ route('print') }}" class=""><button name="submit" type="button" value="cetak" class="btn btn-block btn-primary">cetak</button></a>
    {{csrf_field()}}
       </div>
		<div class="panel-body" style="overflow-x: scroll;">
    <table class="table table-striped table-advance table-hover" id="Table">
<thead>
<tr style="font-weight: bold;color:white;background-color:#2A3F54;">

    <th>No</th>
    <th>Nama Barang</th>
    <th>Kondisi</th>
    <th>jumlah</th>
    <th class="text-center">Jenis</th>
    <th>Tanggal Masuk</th>
    <th>Ruangan</th>
    <th>Kode</th>
    <th>pinjam</th>
    <th>Stok</th>
		<th></th>

</tr>
</thead>

<tbody>
@php
  $no = 0;
@endphp
@foreach($inven as $invent)
<tr style="background-color:white">
<td>{{ ++$no }}</td>
<td>{{ $invent->nama}}</td>
<td>{{ $invent->kondisi}}</td>
<td>{{ $invent->jumlah + $invent->pinjam}}</td>
<td>{{ $invent->nama_jenis}}</td>
<td>{{ $invent->tanggal_register}}</td>
<td>{{ $invent->nama_ruang}}</td>
<td>{{ $invent->kode_inventaris }}</td>
<td>{{ $invent->pinjam }}</td>
<td>{{  $invent->jumlah }}</td>

</tr>
@endforeach
</tbody>
</table>
	  </div>
	</div>
</div>
@endsection
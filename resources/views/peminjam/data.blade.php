@extends('peminjam.temppeminjam')

@section('title', 'Data Barang')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="form-panel">

<table class="table table-striped table-advance table-hover" id="Table">
<thead>
<tr style="font-weight: bold;color:white;background-color:#2A3F54;">

    <th>No</th>
    <th>Nama Barang</th>
    <th>Kondisi baik</th>
		<th>Kondisi kurang baik</th>
    <th class="text-center">Keterangan</th>
    <th>jumlah</th>
    <th class="text-center">Jenis</th>
    <th>Tanggal Masuk</th>
    <th>Ruangan</th>
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
<td>{{ $invent->kondisi_baik}}</td>
<td>{{ $invent->kurang_baik}}</td>
<td>{{ $invent->keterangan}}</td>
<td>{{ $invent->jumlah}}</td>
<td>{{ $invent->id_jenis}}</td>
<td>{{ $invent->tanggal_register}}</td>
<td>{{ $invent->id_ruang}}</td>

<td class="text-center">

    {{csrf_field()}}
    <a class="btn btn-warning" href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
    <a class="btn btn-info" href="" data-toggle="tooltip" title="Show"><i class="fa fa-eye"></i></a>
    
    <a class="btn btn-danger" href="" data-toggle="tooltip" title="Block"><i class="fa fa-trash-o"></i></a>
   

</td>
</tr>
@endforeach
</tbody>
</table>

</div>
</div>
</div>

@endsection
@extends('admin.tempadmin')

@section('title', 'Pengembalian Barang')

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
    <h2><i class="fa fa-laptop"></i> Data Pemgembalian Barang</h2>
		</div>
		<div class="panel-body" style="overflow-x: scroll;">
    <table class="Table table-striped table-advance table-hover" id="Table">
<thead>
<tr style="font-weight: bold;color:white;background-color:#2A3F54;">

    <th>No</th>
    <th>peminjam</th>
    <th>Nama Barang</th>
    <th>keterangan</th>
    <th class="text-center">jumlah pinjam</th>
    <th>Tanggal Pinjam</th>
		<th></th>

</tr>
</thead>

<tbody>
@php
  $no = 0;
@endphp
@foreach($pinjam as $pj)
@if( $pj->persetujuan=='kirim' )
<tr style="background-color:white">
<td>{{ ++$no }}</td>
<td>{{ $pj->name}}</td>
<td>{{ $pj->nama}}</td>
<td>{{ $pj->keterangan}}</td>
<td>{{ $pj->jumlahpinjam}} Barang</td>
<td>{{ $pj->tanggal_pinjam}}</td>

<td class="text-center">

    <form id="demo-form2" action="/list/{{$pj->id_peminjaman}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
    <input type="text" value="setuju" name="setuju" id="setuju" hidden>
    <input type="text" value="{{ $pj->id_peminjam }}" name="peminjam" id="peminjam" hidden>
    <button type="submit" class="btn btn-info"><i class="fa fa-check"></i> Setuju</button>
    {{csrf_field()}}
    </form>

    <form id="demo-form2" action="/tolak/{{$pj->id_peminjaman}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
    <input type="text" value="tolak" name="tolak" id="tolak" hidden>
    <input type="text" value="{{ $pj->id_peminjam }}" name="peminjam" id="peminjam" hidden>
    <button type="submit" class="btn btn-danger"><i class="fa fa-check"></i> Tolak</button>
    {{csrf_field()}}
    </form>

</td>
</tr>
@endif
@endforeach
</tbody>
</table>
	  </div>
	</div>
</div>
@endsection
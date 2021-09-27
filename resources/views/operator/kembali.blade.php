@extends('operator.tempoperator')

@section('title', 'Pengembalian Barang')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12 content-panel">
	<div class="panel panel-default">
		<div class="panel-heading">
    <h2><i class="fa fa-laptop"></i> Data Pemgembalian Barang</h2>
		</div>
		<div class="panel-body" style="overflow-x: scroll;">
    <table class="table table-striped table-advance table-hover" id="Table">
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
@if( $pj->persetujuan=='setuju' )
@if( $pj->status!='kembali' )
<tr style="background-color:white">
<td>{{ ++$no }}</td>
<td>{{ $pj->name}}</td>
<td>{{ $pj->nama}}</td>
<td>{{ $pj->keterangan}}</td>
<td>{{ $pj->jumlahpinjam}} Barang</td>
<td>{{ $pj->tanggal_pinjam}}</td>

<td class="text-center">

    <form id="demo-form2" action="/kembaliinop/{{$pj->id_inventaris}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
    <input type="text" value="{{ $pj->jumlahpinjam}}" name="kembali" id="kembali" hidden>
    <input type="text" value="kembali" name="status" id="status" hidden>
    <button type="submit" class="btn btn-info"><i class="fa fa-check"></i> Kembali</button>
    {{csrf_field()}}
    </form>

</td>
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
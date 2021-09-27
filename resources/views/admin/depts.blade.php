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
        <i style="margin-left : 650px;"></i> <a href="{{ route('inventaris')}}" type="submit" class="btn btn-success fa fa-plus"> Tambah Inventaris Barang</a>  </h2>
		</div>
		<div class="panel-body" style="overflow-x: scroll;">
    <table class="Table table-striped table-advance table-hover" id="Table">
<thead>
<tr style="font-weight: bold;color:white;background-color:#2A3F54;">

    <th>No</th>
    <th>Nama Barang</th>
    <th>Kondisi</th>
    <th class="text-center">Keterangan</th>
    <th>jumlah</th>
    <th class="text-center">Jenis</th>
    <th>Tanggal Masuk</th>
    <th>Ruangan</th>
    <th>Kode</th>
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
<td>{{ $invent->keterangan}}</td>
<td>{{ $invent->jumlah}}</td>
<td>{{ $invent->nama_jenis}}</td>
<td>{{ $invent->tanggal_register}}</td>
<td>{{ $invent->nama_ruang}}</td>
<td>{{ $invent->kode_inventaris }}</td>

<td class="text-center">


 <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#ayoedit{{$invent->id_inven}}"></button>  
							    <!-- modal info -->
                  <div class="modal fade" id="ayoedit{{ $invent->id_inven }}" role="dialog" aria-labelledby="NWModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="NWModalLabel">Edit Data Barang </h4>
            </div>
            <div class="modal-body" style="overflow-x: scroll;">
						<div class="col-md-12 col-sm-12 col-xs-12" >
        <div class="panel panel-default">
    <div class="panel-heading">
    	<h2><i class="fa fa-edit"> Edit Data</i style="margin-left : 700px;"> </h2>
	  </div>
	  <div class="panel-body">
    <form class="form-horizontal form-label-left" method="POST" action="{{url('/editbarang')}}/{{$invent->id_inven}}" novalidate>
    <input type="hidden" name="storage" maxlength="45" required="required" value="{{$invent->id_inven}}" class="form-control col-md-7 col-xs-12">
        <div class="item form-group">
          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Barang</label>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="Text" id="barang" value="{{ $invent->nama}}" name="barang" value="" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
          </div>
        </div> 
        <div class="item form-group">
          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Jumlah</label>
          <div class="col-md-12 col-sm-6 col-xs-12">
          <input type="Text" id="jumlah" value="{{ $invent->jumlah}}" name="jumlah" value="" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Kondisi</label>
          <div class="col-md-12 col-sm-6 col-xs-12">
          <input type="Text" id="kondisi" value="{{ $invent->kondisi}}" name="kondisi" value="" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
          </div>
        </div><br><br>
        <button type="submit" class="btn btn-info fa fa-check"> Simpan perubahan</button>
        {{ csrf_field() }}
				</div>
        </form>
        </div>
        </div>
        </div>
      </div>
    </div>
    </div>
    <!-- Modal info selesai -->
    
    <a class="btn btn-danger" href="{{ route('deletebarang', $invent->id_inven) }}" onclick="return confirm('Are You Sure ?')" data-toggle="tooltip" title="Block"><i class="fa fa-trash-o"></i></a>
    {{csrf_field()}}

</td>
</tr>
@endforeach
</tbody>
</table>
	  </div>
	</div>
</div>
@endsection
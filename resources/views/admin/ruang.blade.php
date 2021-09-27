@extends('admin.tempadmin')

@section('title', 'Data Ruang')

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
    <h2><i class="fa fa-laptop"></i> Data Ruangan
        <i style="margin-left : 680px;"></i> <a href="{{route('tambahruang')}}" type="submit" class="btn btn-success fa fa-plus"> Tambah Data Ruang</a> </h2>
		</div>
		<div class="panel-body" style="overflow-x: scroll;">
    <table id="ex" class="table">
<thead>
<tr style="font-weight: bold;color:white;background-color:#2A3F54;">

    <th>No</th>
    <th>Ruangan</th>
    <th>Status</th>
    
    <th class="text-center">Keterangan</th>
	<th></th>

</tr>
</thead>

<tbody>
@php
  $no = 0;
@endphp
@foreach($ruang as $ru)
<tr style="background-color:white">
<td>{{ ++$no }}</td>
<td>{{ $ru->nama_ruang}}</td>
@if($ru->status =='tersedia')
  <td class="text-center"><span class="labell label-info ">{{ $ru->status }}</span></td>
 	@elseif($ru->status=='tidak tersedia')
  <td class="text-center"><span class="labell label-danger ">{{ $ru->status }}</span></td>
  @endif
<td>{{ $ru->keterangan}}</td>

<td class="text-center">

    
    <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#ayoedit{{$ru->id_ruang}}"></button>  
							    <!-- modal info -->
                  <div class="modal fade" id="ayoedit{{ $ru->id_ruang }}" role="dialog" aria-labelledby="NWModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="NWModalLabel">Edit Data Ruangan </h4>
            </div>
            <div class="modal-body" style="overflow-x: scroll;">
						<div class="col-md-12 col-sm-12 col-xs-12" >
        <div class="panel panel-default">
    <div class="panel-heading">
    	<h2><i class="fa fa-edit"> Edit Data</i style="margin-left : 700px;"> </h2>
	  </div>
	  <div class="panel-body">
    <form class="form-horizontal form-label-left" method="POST" action="{{url('/editruang')}}/{{$ru->id_ruang}}" novalidate>
    <input type="hidden" name="storage" maxlength="45" required="required" value="{{$ru->id_id_ruang}}" class="form-control col-md-7 col-xs-12">
        <div class="item form-group">
          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Ruang</label>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="Text" id="ruang" name="ruang" value="{{ $ru->nama_ruang}}" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
          </div>
        </div> 
        <div class="item form-group">
          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Keterangan</label>
          <div class="col-md-12 col-sm-6 col-xs-12">
          <input type="Text" id="keterangan" name="keterangan" value="{{ $ru->keterangan}}" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
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
    <a href="{{ route('deleteruang', $ru->id_ruang) }}" class="btn btn-danger fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Hapus"></a>
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
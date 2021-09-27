@extends('operator.tempoperator')

@section('title', 'Dasboard')

@section('content')

@if (session('status'))
<div class="col-lg-12 col-md-12 col-sm-12">
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('status') }}
        </div>
</div>
@endif

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="panel panel-default">
    <div class="panel-heading">
    	<h2>Stok Barang Tersedia</h2>
	  </div>
  </div>
  <div class="panel-body" style="overflow-x: scroll;">
  <div>
  <table class="table table-striped table-advance table-hover" id="Table">
<thead>
<tr style="font-weight: bold;color:white;background-color:#2A3F54;">

    <th>No</th>
    <th>Nama Barang</th>
    <th>Ruangan</th>
    <th>Jenis</th>
		<th>Stok tersedia</th>
    <th>Aksi</th>

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
<td>{{ $invent->nama_ruang}}</td>
<td>{{ $invent->nama_jenis}}</td>
<td>{{ $invent->jumlah}} Barang</td>
@if($invent->jumlah!=0)
<td><button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#exampleModal{{ $invent->id_inven }}" data-toggle="tooltip" data-placement="top" title="Edit"></button>
              <div class="modal fade" id="exampleModal{{ $invent->id_inven }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content text-left ">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLabel">Pinjam Barang
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button><h3>
                    </div>
                    <div class="modal-body">
                    <form id="demo-form2" action="{{url('/pinjamop')}}/{{$invent->id_inven}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
<div class="form-group">
           <label class="control-label ">Kategori Barang</label><br>
           <input id="jumlah" class="form-control col-md-7 col-xs-12" value="{{ $invent->nama_jenis}}" type="text" disabled name="jenis" style="width:550px"><br>
  <input type="text" value="{{ $invent->id_inven }}" name="inven" id="inven" hidden><br><br>
     <input id="jumlah" class="form-control col-md-7 col-xs-12" value="{{ $invent->nama }}" disabled type="text" name="barang" style="width:550px">
   </div>
 <div class="form-group">
   <label for="middle-name" class="control-label">Jumlah</label><br>
     <input id="stokk" class="form-control col-md-7 col-xs-12" required type="number" name="stokk" style="width:550px">
 </div>
 <div class="form-group">
   <label for="middle-name" class="control-label">Tanggal Peminjaman</label><br>
   <input id="date" class="form-control col-md-7 col-xs-12" required type="date" name="date" style="width:550px">
 </div>
 <div class="form-group">
   <label for="middle-name" class="control-label">Keterangan</label><br>
     <textarea name="keterangan" id="keterangan" requared style="width:550px"></textarea>
 </div><br><br>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      {!!csrf_field()!!}
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              @elseif($invent->jumlah=0)
      
      @endif
      </td>
</tr>
@endforeach
</tbody>
</table>
  </div>
  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('s')
<script type="text/javascript">
$('#jenis').select2();
$('#barang').select2();
$(document).ready(function(){
        // Get data
        $('#jenis').on('change', function(){
                var myId = $(this).val();
                if(myId){
                        $.ajax({
                            url: '{{URL::to('getbarang')}}/'+myId,
                            type: "GET",
                            dataType: "json",
                            beforeSend: function(){
                                $('#loader').css("visibility", "visible");
                            },

                            success:function(data){
                                $('#barang').empty();
                                $.each(data, function(key, value){
                                    $('#barang').append('<option value="'+ key +'">' + value + '</option>');
                                });                                
                            },
                            complete: function(){
                                $('#loader').css("visibility","hidden");
                            }
                        });
                }
                else{
                    $('#barang').empty();
                }           
        });

});

</script>
@endsection
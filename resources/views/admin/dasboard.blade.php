@extends('admin.tempadmin')

@section('title', 'Dasboard')

@section('content')


<div class="animated flipInY col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-mail"></i></div>
                  @foreach($peminjaman as $p)
                  <h5> {{ $p->pesan }}</h5>
                  @endforeach
                </div>
              </div>

<div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-tasks"></i></div>
                  <div class="count">{{ $inven }}</div>
                  <h3>Jenis Barang</h3>
                  <p>jumlah jenis barang yang dimiliki sekolah</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count">{{ $users }}</div>
                  <h3>Anggota</h3>
                  <p>Jumlah anggota</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sign-out"></i></div>
                  <div class="count">{{ $pinjam }}</div>
                  <h3>Barang Di Pinjam</h3>
                  <p>Jumlah barang yang dipinjam</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-clipboard"></i></div>
                  <div class="count">{{ $masuk }}</div>
                  <h3>Barang Masuk</h3>
                  <p>Laporan barang masuk</p>
                </div>
              </div>
</div>

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
    <th class="text-center">Jenis</th>
    <th>Tanggal Masuk</th>
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
<td>{{ $invent->nama_jenis}}</td>
<td>{{ $invent->tanggal_register}}</td>
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


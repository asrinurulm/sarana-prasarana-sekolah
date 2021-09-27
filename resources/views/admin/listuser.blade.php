@extends('admin.tempadmin')

@section('title', 'Data User')

@section('content')

<div class="row">
<div class="col-md-3 col-sm-3 col-xs-12 content-panel">
	<div class="panel panel-default">
		<div class="panel-heading">
    <h2><i class="fa fa-user"></i> Info User</h2>
		</div>
		<div class="panel-body" style="overflow-x: scroll;">
    <table class="table table-striped table-advance table-hover" id="Table">
    <thead>
      <tr style="font-weight: bold;color:white;background-color:#2A3F54;">
        <td>No</td>
        <td>User</td>
        <td>Jumlah</td>
      </tr>
    </thead>
    <tbody>
      <tr style="background-color:white"><td>1</td><td>Admin</td><td>{{ $useradmin }}</td></tr>
      <tr style="background-color:white"><td>2</td><td>Operator</td><td>{{ $useroperator }}</td></tr>
      <tr style="background-color:white"><td>3</td><td>Peminjam</td><td>{{ $userpeminjam }}</td></tr>
      
      
    </tbody>
  </table>
</div>

</div>
</div>

<div class="col-md-9 col-sm-9 col-xs-12 content-panel">
	<div class="panel panel-default">
		<div class="panel-heading">
    <h2><i class="fa fa-users"></i> List User</h2>
		</div>
		<div class="panel-body" style="overflow-x: scroll;">
    <table class="table table-striped table-advance table-hover bordered" id="Table">
<thead>
<tr style="font-weight: bold;color:white;background-color:#2A3F54;">
    <th>No</th>
    <th>Nama</th>

    <th>Username</th>

    <th>Email</th>

    <th class="text-center">Keterangan</th>

    <th>Level</th>

    <th class="text-center">Action</th>

</tr>
</thead>

<tbody>
@php
  $no = 0;
@endphp
@foreach ($users as $user)
@if($user->status =='active' || $user->status =='nonactive')

<tr style="background-color:white">
<td>{{ ++$no }}</td>
<td>{{ $user->name}}</td>

<td>{{ $user->username}}</td>

<td>{{ $user->email}}</td>

<td class="text-center">{{ $user->departement}}</td>

<td>{{ $user->role->namaRule}}</td>


<td class="text-center">

    {{csrf_field()}}
    <a class="btn btn-info" href="{{ route('showuser',$user->id) }}" data-toggle="tooltip" title="Show"><i class="fa fa-eye"></i></a>
    @if($user->status == 'active')
    <a class="btn btn-danger" href="{{ route('userblok',$user->id) }}" data-toggle="tooltip" title="Block"><i class="fa fa-trash-o"></i></a>
    @elseif($user->status == 'nonactive')
    <a class="btn btn-primary" href="{{ route('openblok',$user->id) }}">Buka Blokir</a>
    @endif

</td>
</tr>
@endif
@endforeach
</tbody>
</table>
	  </div>
	</div>
</div>
</div>
</div>
@endsection
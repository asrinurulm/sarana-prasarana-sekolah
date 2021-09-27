@extends('admin.tempadmin')

@section('title', 'Inventaris')

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
                  <div class="x_title">
                    <h2>Form Inventaris</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" action="{{ route('insert') }}" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    
                    <input type="hidden" id="kode" value="B{{$kode}}" required="required" class="form-control col-md-7 col-xs-12" name="kode">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Barang
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama" required="required" class="form-control col-md-7 col-xs-12" name="nama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kondisi Barang
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="kondisi" name="kondisi" class="form-control" >
                              <option>---><---</option>
                              <option value="baik">Baik</option>
                              <option value="kurang baik">KurangBaik</option>
                          </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ruang simpan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="ruang" name="ruang" class="form-control" >
                        <option>---><---</option>
                              @foreach($ruang as $ruang)
                              <option value="{{  $ruang->id_ruang }}">{{ $ruang->nama_ruang }}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="jumlah" class="form-control col-md-7 col-xs-12" type="number" name="jumlah">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Barang</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="jenis" name="jenis" class="form-control" >
                        <option>---><---</option>
                              @foreach($jenis as $jen)
                              <option value="{{  $jen->id_jenis }}">{{ $jen->nama_jenis }}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Register
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tgl" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date" name="tgl">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                        <a href="{{ route('userapproval') }}" type="submit" class="btn btn-danger">Cencel</a>
						  <button class="btn btn-warning" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                          {{ csrf_field() }}
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


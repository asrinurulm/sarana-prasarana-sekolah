@extends('admin.tempadmin')

@section('title', 'Tambah ruang')

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
                    <h2>Form Tambah Ruangan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" action="{{route('addruang')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" id="kode" value="R{{$kode}}" required="required" class="form-control col-md-7 col-xs-12" name="kode">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ruangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ruang" required="required" class="form-control col-md-7 col-xs-12" name="ruang">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="keterangan" id="keterangan" class="col-md-12 col-sm-12 col-xs-12"></textarea>
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


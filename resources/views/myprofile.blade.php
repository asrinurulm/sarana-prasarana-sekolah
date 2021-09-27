<!DOCTYPE html>
<html lang="en">
<head>

<title>My Profile</title>
<link href="{{ asset('images/logo.png') }}" rel="icon">
<link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
<link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
</head>

  <body class="nav-md">

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/ikhwan.png" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ route('MyProfile') }}"> Profile</a></li>
                    <li><a href="{{ route('signout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Report <small>Activity report</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-2 col-sm-2 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="../images/ikhwan.png" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3 class="text-center">{{ Auth::user()->name }}</h3>
                      <h6 class="text-center">Last update : {{ $users->updated_at}}</h6>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                   

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Profile {{ Auth::user()->name }}</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Edit Profile {{ Auth::user()->name }}</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <div class="col-md-9 profile-text mt mb centered" valign="center">
                <div class="right-divider hidden-sm hidden-xs">
                <br>
                          <input disabled class="form-control" id="name" name="name" placeholder="nama" value="{{ $users->name }}" type="text" minlength="2" autofocus required/>
                          <br>
                          <input disabled class="form-control" id="username" name="username" placeholder="username" value="{{ $users->username }}" type="text" minlength="6" maxlength="12" required/>
                          <br>
                          <input disabled class="form-control" id="email" name="email" placeholder="E-mail" value="{{ $users->email }}" type="email" required/>
                          <br>
                          <input disabled class="form-control" id="email" name="email" placeholder="E-mail" value="{{ $users->role->namaRule}}" type="email" required/>
                          <br>
                          <input disabled class="form-control" id="email" name="email" placeholder="E-mail" value="{{ $users->departement}}" type="email" required/>
                          <br>
                          
                          @if(auth()->user()->role->namaRule === 'admin')
        <a class="btn btn-primary" href="{{ route('userapproval') }}"><i class="fa fa-back"></i>Kembali</a></li>
        @elseif(auth()->user()->role->namaRule === 'operator')
        <a class="btn btn-primary" href="{{ route('operator') }}"><i class="fa fa-back"></i>Kembali</a></li>
        @elseif(auth()->user()->role->namaRule === 'peminjam')
        <a class="btn btn-primary" href="{{ route('peminjam') }}"><i class="fa fa-back"></i>Kembali</a></li>
        @endif

                         </div>
              </div>

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <div class="col-md-7 centered">
                  <div class="col-lg-11 etailed">
                      <div class="form">
                        <form class="cmxform form-horizontal style-form" method="POST" action="{{ route('updateprof') }}">
                          <br>
                          <input class="form-control" id="name" name="name" placeholder="nama" value="{{ $users->name }}" type="text" minlength="2" autofocus required/>
                          <br>
                          <input class="form-control" id="username" name="username" placeholder="username" value="{{ $users->username }}" type="text" minlength="6" maxlength="12" required/>
                          <br>
                          <input class="form-control" id="password" name="password" placeholder="password" type="password" minlength="6" maxlength="12" required/>
                          <br>
                          <input class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm_password" type="password" required/>
                          <br>
                          <input class="form-control" id="email" name="email" placeholder="E-mail" value="{{ $users->email }}" type="email" required/>
                          <br>
                          <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-edit"></i> Simpan Perubahan</button>
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            @include('formerrors')
                        </form>
                      </div>   
                  </div>
                </div>
              </div>

                          </div>
                     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>

        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
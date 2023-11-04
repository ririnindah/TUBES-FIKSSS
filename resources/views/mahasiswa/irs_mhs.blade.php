@extends('template') @section('content') <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="display: flex; align-items: center;">
              <a href="{{ route('dashboard_mhs') }}">
                  <img style="margin-left: -5px;" src="https://i.ibb.co/yBG6mSK/Simone-4.png" width="50" height="50" alt="">
              </a>
            </a>
        </div>

        {{-- logout --}}
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope"></i>
                <b class="caret"></b>
              </a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                    <a href="#">
                        <div class="media">
                        <span class="pull-left">
                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                        </span>
                        <div class="media-body">
                            <h5 class="media-heading">
                            <strong>Mahasiswa</strong>
                            </h5>
                            <p class="small text-muted">
                            <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                        </div>
                    </a>
                    </li>
                    <li class="message-preview">
                    <a href="#">
                        <div class="media">
                        <span class="pull-left">
                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                        </span>
                        <div class="media-body">
                            <h5 class="media-heading">
                            <strong>Deepartemen</strong>
                            </h5>
                            <p class="small text-muted">
                            <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                        </div>
                    </a>
                    </li>
                    <li class="message-preview">
                    <a href="#">
                        <div class="media">
                        <span class="pull-left">
                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                        </span>
                        <div class="media-body">
                            <h5 class="media-heading">
                            <strong>Mahasiswa</strong>
                            </h5>
                            <p class="small text-muted">
                            <i class="fa fa-clock-o"></i> Yesterday at 4:32 PM
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                        </div>
                    </a>
                    </li>
                    <li class="message-footer">
                    <a href="#">Read All New Messages</a>
                    </li>
                </ul>

                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu alert-dropdown">
                    <li>
                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span>
                    </a>
                    </li>
                    <li>
                    <a href="#">Alert Name <span class="label label-primary">Alert Badge</span>
                    </a>
                    </li>
                    <li>
                    <a href="#">Alert Name <span class="label label-success">Alert Badge</span>
                    </a>
                    </li>
                    <li>
                    <a href="#">Alert Name <span class="label label-info">Alert Badge</span>
                    </a>
                    </li>
                    <li>
                    <a href="#">Alert Name <span class="label label-warning">Alert Badge</span>
                    </a>
                    </li>
                    <li>
                    <a href="#">Alert Name <span class="label label-danger">Alert Badge</span>
                    </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                    <a href="#">View All</a>
                    </li>
                </ul>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i> {{ $attribute -> nama }} <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li>
                    <a href="/logout">
                        <i class="fa fa-fw fa-power-off"></i> Log Out </a>
                    </li>
                </ul>
                </li>
            </ul>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="{{ route('dashboard_mhs') }}">
                    <i class="fa fa-fw fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-fw fa-columns"></i> IRS </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-fw fa-file-text-o"></i> KHS </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-fw fa-tasks"></i> PKL </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-fw fa-newspaper-o"></i> Skripsi </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"> Isian Rencana Studi</h1>
            <ol class="breadcrumb">
              <li class="active">
                <i class="fa fa-dashboard"></i> <a href="{{ route('dashboard_mhs') }}">Dashboard/</a> <i class="fa fa-tasks"></i> <a href="{{ route('generate') }}"></a>Isian Rencana Studi
              </li>
            </ol>
          </div>
        </div>
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
        <!-- Page Heading -->

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <div class="row">
        <div class="col-lg-11">
          <section>
            <div class="card1">
              <div class="cardkhs ">
                <div class="right-container">
                    <form action="">
                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Semester:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="semester" style="width: 16cm">
                                    <option> </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">SKS diambil:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="status" style="width: 16cm">
                            </div>
                        </div>
                        <br>


                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Status:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="status" style="width: 16cm">
                                    <option> </option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Mangkir">Mangkir</option>
                                    <option value="DO">DO</option>
                                </select>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="scan" class="col-sm-2 col-form-label">Scan:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="scan" >
                            </div>

                        </div>
                        <div class=" submit form-group row " style="margin-left: auto;">
                            <button type="submit" name="submit" value="submit" class="btn " type="button">Simpan</button>
                        </div>
                    </form>
                </div>
              </div>

              <br>
              <div class="panel panel-red">
                <div class="panel-heading">
                  <div>
                    <i class="fa fa-fw fa-columns fa-3x"></i>
                  </div>
                </div>
                  <div class="panel-footer">
                    <span class="pull-right">
                        <a href="{{ route('irs_mhs') }}">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <h4>Semester 1 </h4>
                    <p> Jumlah SKS : 24</p>
                    <p> Status : Aktif</p>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
          </section>
        </div>
      </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div> @endsection

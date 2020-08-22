 @extends('wrapper.master')
 @section('navigasi', 'Dashboard')

@section('content')
 <div id="page-content">
                    <div class="row">
                            <div class="col-lg-12 grid">
                                <!-- Simple Panel -->
                                <!--===================================================-->
                                <div class="panel panel-bordered panel-primary">
                                    <!--Panel heading-->
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Default Panel</h3>
                                    </div>
                                    <!--Panel body-->
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                        <div class="row">
                            <div class="col-md-3 eq-box-md grid">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-10">
                                                <h3 class="mar-no"> <span class="counter">50.5 GB</span></h3>
                                                <p class="mar-ver-5"> Traffic this month </p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-shopping-cart fa-3x text-danger"></i> </div>
                                        </div>
                                        <div class="progress progress-striped progress-xs">
                                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-danger"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <p> 4% higher than last month </p>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-10">
                                                <h3 class="mar-no"> <span class="counter">50.5 GB</span></h3>
                                                <p class="mar-ver-5"> Traffic this month </p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-shopping-cart fa-3x text-success"></i> </div>
                                        </div>
                                        <div class="progress progress-striped progress-xs">
                                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-success"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <p> 4% higher than last month </p>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-10">
                                                <h3 class="mar-no"> <span class="counter">50.5 GB</span></h3>
                                                <p class="mar-ver-5"> Traffic this month </p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-shopping-cart fa-3x text-primary"></i> </div>
                                        </div>
                                        <div class="progress progress-striped progress-xs">
                                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-primary"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <p> 4% higher than last month </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 eq-box-md grid">
                                <div class="panel">
                                    <div class="panel-body">
                                        <!--Flot Spline Chart placeholder -->
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                        <div id="demo-negativebar" style="height:250px"></div>
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    </div>
                                </div>
								<div class="bg-light">
                                    <ul class="nav nav-section nav-justified">
                                        <li>
                                            <div class="section">
                                                <h4 class="text-left"> HDD 1 <i class="fa fa-caret-up text-success"></i></h4>
												<p class="text-left"> Traffic this month </p>
                                                <div class="progress progress-striped progress-xs">
                                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar"> <span class="sr-only">60% Complete</span> </div>
                                                </div>
                                                <p class="text-left">Health: <span class="text-success">Good</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="section">
                                                <h4 class="text-left"> HDD 2 <i class="fa fa-caret-down text-danger"></i></h4>
												<p class="text-left"> Traffic this month </p>
                                                <div class="progress progress-striped progress-xs">
                                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar"> <span class="sr-only">60% Complete</span> </div>
                                                </div>
                                                <p class="text-left">Health: <span class="text-danger">Bad</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="section">
                                                <h4 class="text-left"> HDD 3 <i class="fa fa-caret-up text-success"></i></h4>
												<p class="text-left"> Traffic this month </p>
                                                <div class="progress progress-striped progress-xs">
                                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar"> <span class="sr-only">60% Complete</span> </div>
                                                </div>
                                                <p class="text-left">Health: <span class="text-success">Good</span></p>
                                            </div>
                                        </li>
                                    </ul>
							    </div>
                            </div>
                            <div class="col-md-4 eq-box-md grid">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div id="carousel-example-vertical" class="carousel vertical slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <div class="ticker-headline">
                                                        <div class="media">
                                                            <span class="pull-left"><i class="fa fa-twitter fa-4x text-azure"></i></span>
                                                            <div class="media-body">
                                                                <div class="h4"><strong>Semantha Schwarz</strong> <small>1 hour ago</small></div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod. Suspendisse id nunc sed massa cursus efficitur.Suspendisse id nunc sed massa cursus efficitur.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ticker-headline">
                                                        <div class="media">
                                                            <span class="pull-left"><i class="fa fa-facebook fa-4x text-primary"></i></span>
                                                            <div class="media-body">
                                                                <div class="h4"><strong>Semantha Schwarz</strong> <small>1 hour ago</small></div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod. Suspendisse id nunc sed massa cursus efficitur. Suspendisse id nunc sed massa cursus efficitur.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ticker-headline">
                                                        <div class="media">
                                                            <span class="pull-left"><i class="fa fa-google-plus fa-4x text-danger"></i></span>
                                                            <div class="media-body">
                                                                <div class="h4"><strong>Semantha Schwarz</strong> <small>1 hour ago</small></div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod. Suspendisse id nunc sed massa cursus efficitur. Suspendisse id nunc sed massa cursus efficitur.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Controls -->
                                            <a class="up carousel-control" href="#carousel-example-vertical" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="down carousel-control" href="#carousel-example-vertical" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel papernote">
                                    <div class="panel-body">
                                        <div class="carousel slide" id="c-slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <h4>This is my note #1</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod.
                                                        Suspendisse id nunc sed massa cursus efficitur.
                                                    </p>
                                                </div>
                                                <div class="item">
                                                    <h4>This is my note #2</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod.
                                                        Suspendisse id nunc sed massa cursus efficitur.
                                                    </p>
                                                </div>
                                                <div class="item">
                                                    <h4>This is my note #3</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id quam elementum odio tristique euismod.
                                                        Suspendisse id nunc sed massa cursus efficitur.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="panel">
                                    <div class="panel-body">
                                       <ul class="nav nav-section nav-justified">
                                          <li>
                                             <div class="section">
                                               <h4 class="nm"> 67 GB </h4>
                                                <p class="text-muted">Total Usage</p>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="section">
                                               <h4 class="nm"> 320 GB </h4>
                                                <p class="text-muted">Total Space</p>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="section">
                                               <h4 class="nm"> 58% </h4>
                                                <p class="text-muted">CPU</p>
                                             </div>
                                          </li>
                                       </ul>
                                        <!--Flot Area Chart placeholder-->
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                        <div id="demo-realtime" class="height-sm"></div>
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <!--Flot Line Chart placeholder-->
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                        <div id="demo-site-statistics" style="height:175px"></div>
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-body">
                                        <!--Flot Line Chart placeholder-->
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                        <div id="demo-sales-statistics" style="height:175px"></div>
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection

@push('chart')
        <script src="{{asset('admin/plugins/flot-charts/jquery.flot.min.js')}}"></script>
        <script src="{{asset('admin/plugins/flot-charts/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('admin/plugins/flot-charts/jquery.flot.spline.js')}}"></script>
        <script src="{{asset('admin/plugins/flot-charts/jquery.flot.pie.min.js')}}"></script>
        <script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('admin/plugins/moment-range/moment-range.js')}}"></script>
        <script src="{{asset('admin/plugins/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
        <!--Flot Order Bars Chart [ OPTIONAL ]-->
        <script src="{{asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
        <!--ricksaw.js [ OPTIONAL ]-->
        <script src="{{asset('admin/plugins/jquery-ricksaw-chart/js/raphael-min.js')}}"></script>
        <script src="{{asset('admin/plugins/jquery-ricksaw-chart/js/d3.v2.js')}}"></script>
        <script src="{{asset('admin/plugins/jquery-ricksaw-chart/js/rickshaw.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jquery-ricksaw-chart/ricksaw.js')}}"></script>

@endpush

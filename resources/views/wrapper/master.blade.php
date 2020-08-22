<!DOCTYPE html>
<html lang="en">
@include('wrapper.header')
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>

        <!--<div id="container" class="effect mainnav-sm navbar-fixed mainnav-fixed">-->
        <div id="container" class="effect navbar-fixed mainnav-fixed mainnav-in">
            <!--NAVBAR-->
            <!--===================================================-->
        @include('wrapper.headnav')
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">
                <div class="pageheader hidden-xs">
                  <h3><i class="fa fa-home"></i> Dashboard </h3>
                    <div class="breadcrumb-wrapper">
                      <span class="label">You are here:</span>
                         <ol class="breadcrumb">
                         <li> <a href="{{route('index')}}"> Home </a> </li>
                            <li class="active"> @yield('navigasi') </li>
                         </ol>
                    </div>
                </div>
                    <!--Page content-->
                    <!--===================================================-->
                    @yield('content')
                    <!--===================================================-->
                    <!--End page content-->
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                    @include('wrapper.navbar')
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <!-- <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>-->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <p class="pad-lft">&#0169; 2020 Forum Sanbercode</p>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="{{asset('admin/js/jquery-2.1.1.min.js')}}"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{asset('admin/plugins/fast-click/fastclick.min.js')}}"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="{{asset('admin/plugins/nanoscrollerjs/jquery.nanoscroller.min.js')}}"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="{{asset('admin/plugins/metismenu/metismenu.min.js')}}"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="{{asset('admin/js/scripts.js')}}"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="{{asset('admin/plugins/switchery/switchery.min.js')}}"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="{{asset('admin/plugins/parsley/parsley.min.js')}}"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="{{asset('admin/plugins/jquery-steps/jquery-steps.min.js')}}"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{{asset('admin/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <script src="{{asset('admin/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="{{asset('admin/plugins/masked-input/bootstrap-inputmask.min.js')}}"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="{{asset('admin/plugins/bootstrap-validator/bootstrapValidator.min.js')}}"></script>
        <!--Flot Chart [ OPTIONAL ]-->
        @stack('chart')
        <!--Summernote [ OPTIONAL ]-->
        <script src="{{asset('admin/plugins/summernote/summernote.min.js')}}"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{asset('admin/plugins/screenfull/screenfull.js')}}"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="{{asset('admin/js/demo/wizard.js')}}"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="{{asset('admin/js/demo/form-wizard.js')}}"></script>
        <script src="{{asset('admin/js/demo/dashboard-v2.js')}}"></script>

    </body>
</html>

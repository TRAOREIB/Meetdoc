<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/picture.jpg" type="image/jpg" />

        <title>MeetDoc</title>

        <!-- Bootstrap -->
        <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo e(asset('css/nprogress.css')); ?>" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo e(asset('css/green.css')); ?>" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="<?php echo e(asset('css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?php echo e(asset('css/jqvmap.min.css')); ?>" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="<?php echo e(asset('css/daterangepicker.css')); ?>" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo e(asset('css/custom.min.css')); ?>" rel="stylesheet">
        <?php echo $__env->yieldContent('script'); ?>
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class=""></i> <span>MeetDoc</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                       
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo e(url('deconnecte')); ?>">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="nav navbar-nav">
                            <ul class=" navbar-right">
                                <li class="nav-item dropdown open" style="padding-left: 15px;">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                        <img src="images/img.jpg" alt=""><?php echo e(session("nom")); ?>

                                    </a>

                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Tous droits reservés à NETFA @2020
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
       <!--<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>-->
         <!--<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>-->
        <!-- Bootstrap -->
        <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo e(asset('js/fastclick.js')); ?>"></script>
         <!--<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>-->
        <!-- NProgress -->
        <script src="<?php echo e(asset('js/nprogress.js')); ?>"></script>
        <!-- Chart.js -->
        <!--<script src="<?php echo e(asset('js/Chart.min.js')); ?>"></script>-->
        <!-- gauge.js -->
        <!--<script src="<?php echo e(asset('js/gauge.min.js')); ?>"></script>-->
        <!-- bootstrap-progressbar -->
        <script src="<?php echo e(asset('js/bootstrap-progressbar.min.js')); ?>"></script>
        <!-- iCheck -->
        <script src="<?php echo e(asset('js/icheck.min.js')); ?>"></script>
        <!-- Skycons -->
        <script src="<?php echo e(asset('js/skycons.js')); ?>"></script>
        <!-- Flot -->
        <!--<script src="<?php echo e(asset('js/jquery.flot.js')); ?>"></script>-->
        <!--<script src="<?php echo e(asset('js/jquery.flot.pie.js')); ?>"></script>-->
        <!--<script src="<?php echo e(asset('/js/jquery.flot.time.js')); ?>"></script>-->
        <!--<script src="<?php echo e(asset('js/jquery.flot.stack.js')); ?>"></script>-->
        <!--<script src="<?php echo e(asset('js/jquery.flot.resize.js')); ?>"></script>-->
        <!-- Flot plugins -->
        <!--<script src="<?php echo e(asset('js/jquery.flot.orderBars.js')); ?>"></script>-->
        <!--<script src="<?php echo e(asset('js/jquery.flot.spline.min.js')); ?>"></script>-->
        <!--<script src="<?php echo e(asset('js/curvedLines.js')); ?>"></script>-->
        <!-- DateJS -->
        <script src="<?php echo e(asset('js/date.js')); ?>"></script>
        <!-- JQVMap -->
        <script src="<?php echo e(asset('js/jquery.vmap.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.vmap.world.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/jquery.vmap.sampledata.js')); ?>"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="<?php echo e(asset('js/moment.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/daterangepicker.js')); ?>"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?php echo e(asset('js/custom.min.js')); ?>"></script>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\montest6\resources\views/gentelella-master2/production/templateinscription.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cas Client First</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Dash Able bootstrap admin template suitable for any project backend need. It comes with lots of UI components, pages, plugins with easy to use well structured code." />
    <meta name="keywords" content="admin template, bootstrap admin template, bootstrap dashboard, admin theme, dashboard template, bootstrap dashboard template, bootstrap admin panel, dashboard theme, best admin template, dashboard theme, website templates, bootstrap 4 admin template" />
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?= site_url(); ?>assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= site_url() ?>assets/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?= site_url(); ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/icon/feather/css/feather.css">
    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/pages/notification/notification.css">    
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/bower_components/animate.css/css/animate.css">    
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/css/font-awesome-n.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= site_url(); ?>assets/css/pages.css">
	


</head>

<body themebg-pattern="theme1">
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- [ Header ] start -->
            <nav class="navbar header-navbar pcoded-header" header-theme="themelight1">
                <div class="navbar-wrapper">
                    <div class="navbar-logo" logo-theme="theme1">
                        <a href="index.html">
                            <img class="img-fluid" src="<?= site_url(); ?>assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- [ chat user list ] start -->
        </div>
        <!-- Menu header end -->
        <section class="login-block">
            <!-- Container-fluid starts -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Authentication card start -->
                        <form id="login" action="#" class="md-float-material form-material m-t-40 m-b-40">
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Masuk</h3>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group form-primary">
                                        <input type="text" name="email" class="form-control" required="" autocomplete="off">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Username</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required="" autocomplete="off">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Sandi</label>
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary d-">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon fas fa-check txt-primary"></i></span>
                                                    <span class="text-inverse">Ingatkan saya</span>
                                                </label>
                                            </div>
                                            <div class="forgot-phone text-right float-right">
                                                <a href="auth-reset-password.html" class="text-right f-w-600"> Lupa Sandi?</a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <a href="<?=  base_url('cas/login') ?>" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</a>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="text-inverse text-left m-b-0">Thank you.</p>
                                            <p class="text-inverse text-left"><a href="index.html"><b>Back to website</b></a></p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="<?= site_url(); ?>assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Authentication card end -->
                    </div>
                    <!-- end of col-sm-12 -->
                </div>
                <!-- end of row -->
                <div class="notifications" style="display: none;">
					<button id="err" class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="right"></button>              
				</div>
            </div>
            <!-- end of container-fluid -->

        </section>
    </div>


    <div class="footer">
        <p class="text-center m-b-0">Copyright &copy; 2017 FLAT UI ADMIN , All rights reserved.</p>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?= site_url(); ?>assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?= site_url(); ?>assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?= site_url(); ?>assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?= site_url(); ?>assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?= site_url(); ?>assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->    
    <script type="text/javascript" src="<?= site_url() ?>assets/bower_components/jquery/js/jquery.min.js"></script>    
    <script type="text/javascript">
        var base_url = "<?php echo site_url(); ?>";
    </script>    
    <script type="text/javascript" src="<?= site_url() ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= site_url() ?>assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= site_url() ?>assets/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= site_url() ?>assets/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= site_url(); ?>assets/js/pace.min.js"></script>
    <!-- waves js -->
    <script src="<?= site_url(); ?>assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= site_url() ?>assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= site_url() ?>assets/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="<?= site_url() ?>assets/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?= site_url(); ?>assets/js/common-pages.js"></script>
    <!-- notification js -->
    <script type="text/javascript" src="<?= site_url(); ?>assets/js/bootstrap-growl.min.js"></script>
	<script type="text/javascript" src="<?= site_url(); ?>assets/pages/notification/notification.js"></script>    


</body>

</html>

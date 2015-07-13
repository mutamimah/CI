<!DOCTYPE html>
<html>
<!-- Mirrored from envato.megadrupal.com/html/kickstars/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 06 Jun 2013 09:21:02 GMT -->
<head>
    <title>DreamUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/kickstars/css/responsive.css"/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/kickstars/css/normalize.css"/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/kickstars/css/jquery.sidr.light.css"/>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/kickstars/css/animate.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/kickstars/css/md-slider.css"/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/kickstars/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css"/> 
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="css/ie7.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie8.css"/>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/kickstars/js/twitter.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/kickstars/js/raphael-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/kickstars/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/kickstars/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/kickstars/js/jquery.touchwipe.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/kickstars/js/md_slider.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/kickstars/js/jquery.sidr.min.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url()?>assets/kickstars/js/twitter.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/kickstars/js/pie.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/kickstars/js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <form class="form-horizontal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrasi</h4>
        
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" >
            </div>
           </div>
           <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" >
            </div>
           </div>
           <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">No Telp</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" >
            </div>
           </div>
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" >
            </div>
           </div>
           <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Kota</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" >
            </div>
           </div>
           <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Kampus</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" >
            </div>
           </div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  </form>
</div>
  <!-- Modal login-->
<div class="modal fade" id="myModal0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
      </div>
    
    </div>
  </div>
</div>
  
</div>
<div id="wrapper">
    <header id="header">
        <div class="wrap-top-menu">
            <div class="container_12 clearfix">
                <div class="grid_12">
                    <nav class="top-menu">
                        <!--<ul id="main-menu" class="nav nav-horizontal clearfix">
                            <li class="active"><a href="index-2.php">Beranda</a></li>
                            <li class="sep"></li>
                            <li><a href="proyek.html">Proyek</a></li>
                            <li class="sep"></li>
                            <li><a href="how-it-work.html">Profil</a></li>
                            <li class="sep"></li>
                            <li><a href="contact.html">kontak</a></li>
                        </ul>
                        <!--<a id="btn-toogle-menu" class="btn-toogle-menu" href="#alternate-menu">
                            <span class="line-bar"></span>
                            <span class="line-bar"></span>
                            <span class="line-bar"></span>
                        </a>
                        <div id="right-menu">
                            <ul class="alternate-menu">
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="all-pages.html">All Pages</a></li>
                                <li><a href="how-it-work.html">Help</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    
                    <!--<div class="top-message clearfix">
                        <i class="icon iFolder"></i>
                        <span class="txt-message">Nulla egestas nulla ac diam ultricies id viverra nisi adipiscing.</span>
                        <i class="icon iX"></i>
                        <div class="clear"></div>
                    </div>
                    <i id="sys_btn_toggle_search" class="icon iBtnRed make-right"></i>
                </div>
            </div>
        </div><!-- end: .wrap-top-menu -->
        <div class="container_12 clearfix">
            <div class="grid_12 header-content">
                <div id="sys_header_left" class="header-left">
                    <ul id="main-menu" class="nav nav-horizontal clearfix">
                            <li class="active"><a href="http://localhost/ci"><span style="color: orange; font-size: 20px;">Beranda</a></li>
                            <li class="sep"></li>
                            <li><a href="http://localhost/ci/index.php/proyek"><span style="color: orange; font-size: 20px;">Proyek</a></li>
                            <li class="sep"></li>
                            <li><a href="http://localhost/ci/index.php/profil"><span style="color: orange; font-size: 20px;">Profil</a></li>
                            <li class="sep"></li>
                            <li><a href="http://localhost/ci/index.php/kontak"><span style="color: orange; font-size: 20px;">Kontak</a></li>
                        </ul>
                </div>
                <div id="sys_header_right" class="header-right">
                    <div class="account-panel">
                        <a href="#" class="btn btn-red" data-toggle="modal" data-target="#myModal">Register</a>
                        <!--<a href="#" class="btn btn-black sys_show_popup_login">Login</a>-->
                    </div>
                <div id="sys_header_right" class="header-right">
                    <div class="account-panel">
                        <a href="#" class="btn btn-red" data-toggle="modal" data-target="#myModal0">Login</a>
                        <!--<a href="#" class="btn btn-black sys_show_popup_login">Login</a>-->
                    </div>
                    <div class="form-search">
                        <form action="#">
                            <label for="sys_txt_keyword">
                                <input id="sys_txt_keyword" class="txt-keyword" type="text" placeholder="Search projects"/>
                            </label>
                            <button class="btn-search" type="reset"><i class="icon iMagnifier"></i></button>
                            <button class="btn-reset-keyword" type="reset"><i class="icon iXHover"></i></button>
                        </form>
                    </div>
                </div>
                <!--<div class="header-left">

                    <h1 id="logo">
                        <a href="index-2.html"><img src="images/logo3.jpg" alt="$DREAM_UP"/></a>
                    </h1>
                    <div class="main-nav clearfix">
                        <!--<div class="nav-item">
                            <a href="category.html" class="nav-title">Discover</a>
                            <p class="rs nav-description">Great Projects</p>
                        </div>
                        <span class="sep"></span>
                        <div class="nav-item">
                            <a href="#" class="nav-title">Start</a>
                            <p class="rs nav-description">Your Project</p>
                        </div>-->
                    </div>
                    </nav>
                </div>
            </div>
        </div>
    </header><!--end: #header -->
    <!--<div class="popup-common" id="sys_popup_common">
    <div class="overlay-bl-bg"></div>
    <div class="container_12 pop-content">
        <div class="grid_12 wrap-btn-close ta-r">
            <i class="icon iBigX closePopup"></i>
        </div>
        <div class="grid_6 prefix_1">
            <div class="form login-form">
                <form action="#">
                    <h3 class="rs title-form">Register</h3>
                    <div class="box-white">
                        <h4 class="rs title-box">Membuat akun baru?</h4>
                        <p class="rs">A Kickstars account is required to continue.</p>
                        <div class="form-action">
                            <label for="txt_name">
                                <input id="txt_nama" class="txt fill-width" type="nama" placeholder="ketik nama"/>
                            </label>
                            <div class="wrap-2col clearfix">
                                <div class="col">
                                    <label for="txt_email">
                                        <input id="txt_email" class="txt fill-width" type="email" placeholder="alamat e-mail"/>
                                    </label>
                                    <label for="txt_no">
                                        <input id="txt_no" class="txt fill-width" type="no" placeholder="No telp"/>
                                    </label>
                                    <label for="txt_alamat">
                                        <input id="txt_alamat" class="txt fill-width" type="alamat" placeholder="Alamat"/>
                                    </label>
                                    <label for="txt_kota">
                                        <input id="txt_kota" class="txt fill-width" type="kota" placeholder="Kota"/>
                                    </label>
                                    <label for="txt_kampus">
                                        <input id="txt_kampus" class="txt fill-width" type="kampus" placeholder="Asal kampus"/>
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="txt_password">
                                        <input id="txt_password" class="txt fill-width" type="password" placeholder="Enter password"/>
                                    </label>-->
                                    <!--<label for="txt_re_password">
                                        <input id="txt_re_password" class="txt fill-width" type="password" placeholder="Re-enter password"/>
                                    </label>
                                </div>
                            </div>
                            <p class="rs pb10">By signing up, you agree to our <a href="#" class="fc-orange">terms of use</a> and <a href="#" class="fc-orange">privacy policy</a>.</p>
                            <p class="rs ta-c">
                                <button class="btn btn-red btn-submit" type="submit">Register</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="grid_4">
            <div class="form login-form">
                <form action="#">
                    <h3 class="rs title-form">Login</h3>
                    <div class="box-white">
                        <h4 class="rs title-box">Already Have an Account?</h4>
                        <p class="rs">Please log in to continue.</p>
                        <div class="form-action">
                            <label for="txt_email_login">
                                <input id="txt_email_login" class="txt fill-width" type="email" placeholder="Enter your e-mail address"/>
                            </label>
                            <label for="txt_password_login">
                                <input id="txt_password_login" class="txt fill-width" type="password" placeholder="Enter password"/>
                            </label>

                            <label for="chk_remember" class="rs pb20 clearfix">
                                <input id="chk_remember" type="checkbox" class="chk-remember"/>
                                <span class="lbl-remember">Remember me</span>
                            </label>
                            <p class="rs ta-c pb10">
                                <button class="btn btn-red btn-submit" type="submit">Login</button>
                            </p>
                            <p class="rs ta-c">
                                <a href="#" class="fc-orange">I forgot my password</a>
                            </p>-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-20585382-5', 'megadrupal.com');
  ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from envato.megadrupal.com/html/kickstars/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 06 Jun 2013 09:23:06 GMT -->
</html>
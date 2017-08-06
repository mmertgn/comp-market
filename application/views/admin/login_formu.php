
<!DOCTYPE html>
<html lang="tr">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Pınar Çelik Yönetim Paneli</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Pınar Çelik">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="<?= base_url() ?>admintemp/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>admintemp/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="<?= base_url() ?>admintemp/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="<?= base_url() ?>admintemp/css/style-responsive.css" rel="stylesheet">
    <link href='<?= base_url() ?>admintemp/http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?= base_url() ?>admintemp/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="<?= base_url() ?>admintemp/css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="<?= base_url() ?>admintemp/css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>admintemp/img/favicon.ico">
    <!-- end: Favicon -->

    <style type="text/css">
        body { background: url(<?= base_url() ?>admintemp/img/bg-login.jpg) !important; }
    </style>



</head>

<body>
<div class="container-fluid-full">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="login-box">
                <div class="icons">
                    <a href="<?= base_url() ?>admintemp/admin/login"><i class="halflings-icon home"></i></a>
                    <a href="#"><i class="halflings-icon cog"></i></a>
                </div>
                <h2>Hesabınıza Giriş Yapın</h2>
                <form class="form-horizontal" action="<?= base_url()?>admin/login/login_ol" method="post">
                    <fieldset>
                        <div class="input-prepend" title="Username">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="email" id="username" type="email" placeholder="Email Adresi"/>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="password" id="password" type="password" placeholder="Parola"/>
                        </div>
                        <div class="clearfix"></div>

                        <label class="remember" for="remember"><input type="checkbox" id="remember" />Beni Hatırla</label>

                        <div class="button-login">
                            <button type="submit" class="btn btn-primary">Giriş</button>
                        </div>
                        <div class="clearfix"></div>
                </form>
            </div><!--/span-->
        </div><!--/row-->


    </div><!--/.fluid-container-->

</div><!--/fluid-row-->
<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <ul class="list-inline item-details">
            <li><a href="<?= base_url() ?>admintemp/http://themifycloud.com">Admin templates</a></li>
            <li><a href="<?= base_url() ?>admintemp/http://themescloud.org">Bootstrap themes</a></li>
        </ul>
    </div>
</div>
<!-- start: JavaScript-->

<script src="<?= base_url() ?>admintemp/js/jquery-1.9.1.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery-migrate-1.0.0.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.ui.touch-punch.js"></script>

<script src="<?= base_url() ?>admintemp/js/modernizr.js"></script>

<script src="<?= base_url() ?>admintemp/js/bootstrap.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.cookie.js"></script>

<script src='<?= base_url() ?>admintemp/js/fullcalendar.min.js'></script>

<script src='<?= base_url() ?>admintemp/js/jquery.dataTables.min.js'></script>

<script src="<?= base_url() ?>admintemp/js/excanvas.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.flot.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.flot.pie.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.flot.stack.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.flot.resize.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.chosen.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.uniform.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.cleditor.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.noty.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.elfinder.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.raty.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.iphone.toggle.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.uploadify-3.1.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.gritter.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.imagesloaded.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.masonry.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.knob.modified.js"></script>

<script src="<?= base_url() ?>admintemp/js/jquery.sparkline.min.js"></script>

<script src="<?= base_url() ?>admintemp/js/counter.js"></script>

<script src="<?= base_url() ?>admintemp/js/retina.js"></script>

<script src="<?= base_url() ?>admintemp/js/custom.js"></script>
<!-- end: JavaScript-->

</body>
</html>

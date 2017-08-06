<!DOCTYPE html>
<html lang="tr">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title><?= $veri[0]->sirketadi ?> Yönetim Paneli</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="<?= $veri[0]->sirketadi ?>">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>
    <script src="https://use.fontawesome.com/de617230ed.js"></script>
    <link id="bootstrap-style" href="<?= base_url() ?>admintemp/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>admintemp/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="<?= base_url() ?>admintemp/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="<?= base_url() ?>admintemp/css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="<?= base_url() ?>admintemp/css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="<?= base_url() ?>admintemp/css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>maintemp/images/logo1.png" type="image/x-icon">
    <!-- end: Favicon -->




</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?=base_url()?>admin/home"><span><?= $veri[0]->sirketadi ?></span></a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> <?=$this->session->logged_in['adsoy']?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            <li><a href="<?php echo base_url();
                                ?>admin/kullanici/duzenle/<?=$this->session->logged_in['id']?>"><i class="halflings-icon user"></i> Profil</a></li>
                            <li><a href="<?php echo base_url(); ?>admin/login/logout"><i class="halflings-icon off"></i> Çıkış Yap</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->


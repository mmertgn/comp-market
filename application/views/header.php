<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php
    if ($this->uri->segment(2) == "urun_detayi" && $this->uri->segment(1) == "home") {
        ?>
        <title><?= $urundetay[0]->adi ?></title>
        <meta name="description" content="<?= $urundetay[0]->aciklama ?>">
        <meta name="keywords" content="<?= $urundetay[0]->keywords ?>">
        <?php
    }elseif($this->uri->segment(1) == "kategori") {
        ?>
        <title><?= $katsecili[0]->kat_adi ?></title>
        <meta name="description" content="<?= $katsecili[0]->kat_aciklama ?>">
        <meta name="keywords" content="<?= $katsecili[0]->kat_keywords ?>">
        <?php
    }
    else {
        ?>
        <title><?= $ayar[0]->sirketadi ?></title>
        <meta name="description" content="<?= $ayar[0]->aciklama ?>">
        <meta name="keywords" content="<?= $ayar[0]->keywords ?>">
        <?php
    }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?= base_url() ?>mainsite/img/favicon-icon/icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>mainsite/img/favicon-icon/icon.png">

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/css/meanmenu.min.css">
    <!-- nivo slider css -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/lib/css/preview.css" type="text/css" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/css/owl.carousel.css">
    <!-- font-awesome css -->
    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?= base_url() ?>mainsite/css/responsive.css">
    <!-- modernizr js -->
    <script src="<?= base_url() ?>mainsite/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--header top area start-->
<div class="header_area">
    <div class="header_border">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="header_heaft_area">
                        <div class="header_left_all"></div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
                    <div class="header_right_area">
                        <ul>
                            <?php
                            if($this->session->kullanici_data['adsoy']) {
                            ?>
                            <li>
                                <a class="account"><?= $this->session->kullanici_data['adsoy'] ?></a>
                            </li>
                                <li>
                                <a class="account" href="<?= base_url() ?>home/profil">Hesabım</a>
                            </li>
                            <li>
                                <a class="wishlist" href="<?= base_url() ?>home/istek_listesi">İstek Listem</a>
                            </li>
                            <li>
                                <a class="Shopping cart" href="<?= base_url() ?>siparis/siparisgecmisi">Siparişlerim</a>
                            </li>
                            <li>
                                <a class="Cikis" href="<?= base_url() ?>home/cikis">Çıkış Yap</a>
                            </li>
                                <?php
                            }else {
                                ?>
                                <li><a class="wishlist" href="<?= base_url()?>home/login">Kullanıcı Girişi</a></li>
                                <li>
                                    <a class="wishlist" href="<?= base_url() ?>home/istek_listesi">İstek Listesi</a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top area end-->
    <!--header middle area start-->
    <div class="header_middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo_area">
                        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>mainsite/img/logo-pic/logo2.png" alt="" height="70" width="296" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="header_all search_box_area">
                        <form class="new_search" action="<?= base_url() ?>home/arama" method="post">
                            <input id="mix_search" class="search-field" placeholder="Arama Yapabilirsiniz Örneğin: Nvidia GTX1060" value="" name="search" title="Search for:" type="search">
                            <input value="Search" type="submit">
                        </form>
                    </div>
                    <div class="header_all shopping_cart_area">
                        <div class="widget_shopping_cart_content">
                            <div class="topcart">
                                <a class="cart-toggler" href="">
                                    <i class="icon"></i>
                                    <span class="my-cart">Sepetiniz</span>
                                    <?php
                                    if ($sepetsayi > 0){?>
                                        <span class="qty"><?= $sepetsayi ?> Ürün</span>
                                    <?php
                                    }else{?>
                                        <span class="qty">Sepet Boş</span>
                                    <?php
                                    }
                                    ?>

                                    <span class="fa fa-angle-down"></span>
                                </a>
                                <div class="new_cart_section">
                                    <ol class="new-list">
                                        <?php
                                        $toplam = 0;
                                        if($sepetsayi>0) {
                                        foreach ($headersepet as $rs) {
                                        $toplam = $toplam + $rs->urunfiyat;
                                        ?>
                                        <!-- single item -->
                                        <li class="wimix_area">
                                            <a class="pix_product" href="">
                                                <img alt="<?= $rs->urunadi ?>" src="<?= base_url() ?>uploads/<?= $rs->urunresim ?>">
                                            </a>
                                            <div class="product-details">
                                                <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urunid ?>"><?= $rs->urunadi ?></a>
                                                <span class="sig-price">Fiyat: <?= $rs->urunfiyat ?> TL</span>
                                            </div>
                                            <div class="cart-remove">
                                                <a class="action" href="<?= base_url() ?>home/sepetsil/<?= $rs->id ?>">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <!-- single item -->
                                            <?php
                                        }
                                        }else {
                                        ?>
                                            <li class="wimix_area">
                                                <div class="product-details">
                                                    <h3>Sepetinizde Ürün Bulunmamaktadır.</h3>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ol>
                                    <?php
                                    if($sepetsayi>0) {
                                    ?>
                                    <div class="top-subtotal">
                                        Toplam = <span class="sig-price"><?= $toplam ?> TL</span>
                                    </div>
                                        <?php
                                    }
                                    ?>
                                    <div class="cart-button">
                                        <ul>
                                            <li>
                                                <a href="<?= base_url() ?>home/sepet">
                                                    Sepete Git
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header bottom area start-->
    <div class="all_menu_area all_menu_area_2 ">
        <div class="menu_inner">
            <div class="container">
                <div class="full_menu full_menu_2 clearfix">
                    <div class="new_menu">
                        <div class="drp-menu">
                            <div class="col-md-3 pr pl">
                                <div class="all_catagories all_catagories_2">
                                    <div class="enable_catagories enable_catagories_2">
                                        <i class="fa fa-bars"></i>
                                        <span>Tüm Kategoriler</span>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="catagory_menu_area">
                                    <div class="catagory_mega_menu">
                                        <div class="cat_mega_start">
                                            <ul class="list">
                                                <?php
                                                foreach ($kategori as $rs) {
                                                ?>
                                                <li class="next_area">
                                                    <a class="item_link" href="<?= base_url() ?>kategori/liste/<?= $rs->id ?>">
                                                        <i class="fa fa-television" aria-hidden="true"></i>
                                                        <span class="link_content">
                                                            <span class="link_text">
                                                            <?= $rs->kat_adi ?>
                                                            <span class="link_descr"><?= $rs->kat_aciklama ?> </span>
                                                            </span>
                                                            </span>
                                                    </a>
                                                    <ul class="electronics_drpdown">
                                                        <li class="parent">
                                                            <a href="#"></a>
                                                            <div class="mega_menu">
                                                                <?php
                                                                foreach ($altkategori as $rs2) {
                                                                if ($rs->id == $rs2->kat_id) {
                                                                ?>
                                                                <div class="mega_menu_coloumn">
                                                                    <ul>
                                                                        <li><a href="<?= base_url() ?>altkategori/liste/<?= $rs2->id ?>"><?= $rs2->adi ?></a></li>
                                                                    </ul>
                                                                </div>
                                                                    <?php
                                                                }
                                                                }
                                                                ?>
                                                                <div class="mega_menu_coloumn">
                                                                    <ul>
                                                                        <br>
                                                                    </ul>
                                                                </div>
                                                                <div class="mega_menu_coloumn">
                                                                    <ul>
                                                                        <br>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--menu area start-->
                            <div class="col-md-9 pl">
                                <div class="menu_area">
                                    <div class="menu">
                                        <nav>
                                            <ul>
                                                <li class="">
                                                    <a href="<?= base_url() ?>">Anasayfa <i class="" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a class="flexiable_new" href="<?= base_url() ?>sihirbaz">PC Sihirbazı <span class="link_descr_2">Yeni </span> <i aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url() ?>sikcasorulansorular">Sık Sorulan Sorular <i  aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="pg_1">
                                                    <a href="<?= base_url() ?>hakkimizda">Hakkımızda <i aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="port_1">
                                                    <a href="<?= base_url() ?>bizeulasin">Bİze Ulaşın <i aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li class="port_1">
                                                    <a href="<?= base_url() ?>iletisim">İletİşİm <i aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
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
<!-- mobile-menu-area-start -->
<div class="mobile-menu-area hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul id="nav">
                            <li><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li><a href="#">Kategoriler</a>
                                <ul>
                                    <?php
                                    foreach ($kategori as $rs) {
                                        ?>
                                        <li>
                                            <a href="<?= base_url() ?>kategori/liste/<?= $rs->id ?>"><?= $rs->kat_adi ?></a>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="<?= base_url() ?>sihirbaz">Pc Sihirbazı</a>
                            <li><a href="<?= base_url() ?>sikca-sorulan-sorular">Sıkça Sorulan Sorular</a>

                            </li>
                            <li>
                                <a href="<?= base_url() ?>hakkimizda">Hakkımızda</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>bizeyazin">Bize Ulaşın</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<!-- mobile-menu-area-end -->
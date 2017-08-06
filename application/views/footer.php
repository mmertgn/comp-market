<!--footer top area start-->
<div class="footer_area footer_area_2">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer_menu footer_menu_4">
                    <div class="news_heading_2 news_heading_4">
                        <h3>BİLGİ </h3>
                    </div>
                    <div class="footer_menu">
                        <ul>
                            <li>
                                <a href="<?= base_url() ?>hakkimizda">Hakkimizda</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>icerik/sartlar">Şartlar ve Koşullar</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>icerik/sozlesme">Mesafeli Satış Sözleşmesi</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>sikcasorulansorular">Sıkça Sorulan Sorular</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>icerik/gizlilik">Gizlilik Politikası</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_menu footer_menu_4">
                    <div class="news_heading_2 news_heading_4">
                        <h3>Sipariş Süreçleri </h3>
                    </div>
                    <div class="footer_menu">
                        <ul>
                            <li>
                                <a href="<?= base_url() ?>home/login">Üyelik</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>">Ödeme ve Güvenlik</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>">Kargo</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>">İade İşlemleri</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>">Sipariş ve Teslimat İşlemleri</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_menu footer_menu_4">
                    <div class="news_heading_2 news_heading_4">
                        <h3> Hesabım </h3>
                    </div>
                    <div class="footer_menu">
                        <ul>
                            <li>
                                <a href="<?= base_url() ?>home/login">Siteye Giriş</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>home/sepet">Sepetim</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>home/istek_listesi">Takip Listem</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>iletisim">Müşteri Destek</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>bizeulasin">Bize Ulaşın</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_menu footer_menu_2 footer_menu_5 ">
                    <div class="news_heading_2 news_heading_4">
                        <h3> İletişim Bilgileri </h3>
                    </div>
                    <ul>
                        <li>
                            <i class="fa fa-home"></i>
                            <p><?= $ayar[0]->adres ?></p>
                            <p><?= $ayar[0]->sehir ?></p>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <p>Telefon: <?= $ayar[0]->tel ?></p>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <p>Email: <?= $ayar[0]->email ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--footer top area end-->
    <!--footer middle area start-->
    <div class="footer_middle">
        <div class="container">
            <div class="fotter_inner fotter_inner_2">
                <div class="middele_pic">
                    <img src="<?= base_url() ?>mainsite/img/icon/payment-300x30.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer middle area end-->
<!--footer bottom area start-->
<div class="footer-bottom">
    <div class="container">
        <div class="widget-copyright text-center">
            Copyright © 2017
            <a href="#">Pınar Çelik</a> Tüm Hakları Saklıdır.
        </div>
    </div>
</div>
<!--footer bottom area end-->



<!-- all js here -->
<!-- jquery latest version -->
<script src="https://use.fontawesome.com/de617230ed.js"></script>
<script src="<?= base_url() ?>mainsite/js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="<?= base_url() ?>mainsite/js/bootstrap.min.js"></script>
<!-- nivo slider js -->
<script src="<?= base_url() ?>mainsite/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="<?= base_url() ?>mainsite/lib/home.js" type="text/javascript"></script>
<!-- owl.carousel js -->
<script src="<?= base_url() ?>mainsite/js/owl.carousel.min.js"></script>
<!-- meanmenu js -->
<script src="<?= base_url() ?>mainsite/js/jquery.meanmenu.js"></script>
<!-- jquery-ui js -->
<script src="<?= base_url() ?>mainsite/js/jquery-ui.min.js"></script>
<!-- easing js -->
<script src="<?= base_url() ?>mainsite/js/jquery.easing.1.3.js"></script>
<!-- mixitup js -->
<script src="<?= base_url() ?>mainsite/js/jquery.mixitup.min.js"></script>
<!-- jquery.countdown js -->
<script src="<?= base_url() ?>mainsite/js/jquery.countdown.min.js"></script>
<!-- wow js -->
<script src="<?= base_url() ?>mainsite/js/wow.min.js"></script>
<!-- popup js -->
<script src="<?= base_url() ?>mainsite/js/jquery.magnific-popup.min.js"></script>
<!-- plugins js -->
<script src="<?= base_url() ?>mainsite/js/plugins.js"></script>
<!-- main js -->
<script src="<?= base_url() ?>mainsite/js/main.js"></script>
</body>
</html>
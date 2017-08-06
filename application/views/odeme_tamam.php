<!-- shop area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop_menu">
                    <ul class="cramb_area cramb_area_2 ">
                        <li><a href="<?= base_url() ?>">Anasayfa / </a></li>
                        <li><a href="#">Siparişi Tamamla</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop area end-->
<div class="shopping_cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="account_heading account_heading_ah">
                    <h1>Siparişi Tamamla</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- order-complete start -->
                        <div class="tab-pane active" id="order-complete">
                            <div class="order-complete-content box-shadow">
                                <div class="thank-you p-30 text-center">
                                    <h3 class="text-black-5 mb-0">Teşekkürler. Siparişiniz Başarılı Olarak Alınmıştır.</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <!-- our order -->
                                    <div class="col-md-6">
                                        <div class="payment-details p-30">
                                            <h3>Sipariş Detayı</h3>
                                            <hr>
                                            <table>
                                                <?php
                                                $sepettoplami = 0;
                                                $kargoucreti = 3.99;
                                                foreach ($siparissonuc as $rs) {
                                                    $sepettoplami = $rs->urunfiyat + $sepettoplami;
                                                    ?>
                                                    <tr>
                                                        <td class="td-title-1"><?= $rs->urunadi ?></td>
                                                        <td class="td-title-2"><?= $rs->urunfiyat ?> TL</td>
                                                    </tr>
                                                    <?php
                                                }
                                                $geneltoplam = $sepettoplami + $kargoucreti;
                                                ?>
                                                <tr>
                                                    <td class="td-title-1">Sepet Toplamı</td>
                                                    <td class="td-title-2"><?= $sepettoplami ?> TL</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title-1">Kargo Ücreti</td>
                                                    <td class="td-title-2"><?= $kargoucreti ?> TL</td>
                                                </tr>
                                                <tr>
                                                    <td class="order-total">Genel Toplam</td>
                                                    <td class="order-total-price"><?= $geneltoplam ?> TL</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bill-details p-30">
                                            <h3 >Kişisel Bilgiler</h3>
                                            <ul class="bill-address">
                                                <li>
                                                    <span>Ad Soyad:</span>
                                                    <?= $siparissonuc[0]->adsoy ?>
                                                </li>
                                                <li>
                                                    <span>Telefon:</span>
                                                    <?= $siparissonuc[0]->tel ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <br>
                                        <div class="bill-details pl-30">
                                            <h3>Adres Bilgileri</h3>
                                            <ul class="bill-address">
                                                <li>
                                                    <span>Adres:</span>
                                                    <?= $siparissonuc[0]->adres ?>
                                                </li>
                                                <li>
                                                    <span>Sehir:</span>
                                                    <?= $siparissonuc[0]->sehir ?>
                                                </li>
                                                <li>
                                                    <span>İlçe:</span>
                                                    <?= $siparissonuc[0]->ilce ?>
                                                </li>
                                                <li>
                                                    <span>Postakodu:</span>
                                                    <?= $siparissonuc[0]->postkod ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- order-complete end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

</section>
<!-- End page content -->

<br><br><br>
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
<!-- coupon-area end -->
<!-- checkout-area start -->
<div class="checkout-area">
    <div class="container">
        <div class="row">
            <div class="new_chek_cart">
                <form action="<?= base_url() ?>siparis/siparistamamislem" method="post">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkbox-form">
                            <h3>Teslimat Bilgileri</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Ad Soyad <span class="required">*</span></label>
                                        <input type="text" name="adsoy"  placeholder="Ad Soyad...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Telefon Numaranız <span class="required">*</span></label>
                                        <input type="text" name="tel"  placeholder="Telefon Numaranız...">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Şehir </label>
                                        <input type="text" name="sehir"  placeholder="Şehir...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>İlçe <span class="required">*</span></label>
                                        <input type="text" name="ilce"  placeholder="İlçe...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Posta Kodu <span class="required">*</span></label>
                                        <input type="text" name="postkod"  placeholder="Postakodu...">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Adres <span class="required">*</span></label>
                                        <textarea style="width: 100%; height: 75px;" class="custom-textarea" name="adres" placeholder="Adresiniz..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="your-order">
                            <h3 class="new_text_doc">Sepetinizdeki Ürünler</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product-name">Ürün</th>
                                        <th class="product-total">Toplam</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if($sepetsayi>0) {
                                    $sepettoplami = 0;
                                    $kargoucreti = 3.99;
                                    $urunsira=1;
                                    foreach ($sepet as $rs) {
                                    $sepettoplami = $rs->urunfiyat + $sepettoplami;
                                    ?>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            <?= $rs->urunadi ?>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount"><?= $rs->urunfiyat ?> TL</span>
                                        </td>
                                        <input type="hidden" name="urun_id<?= $urunsira ?>" value="<?= $rs->urunid ?>">
                                    </tr>
                                        <?php
                                        $urunsira = $urunsira+1;
                                    }
                                        $geneltoplam = $sepettoplami + $kargoucreti;
                                    }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                    <tr class="cart-subtotal">
                                        <th> Sepet Toplamı</th>
                                        <td><span class="amount_new"><?= $sepettoplami ?> TL</span></td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th> Kargo Ücreti</th>
                                        <td><span class="amount_new"><?= $kargoucreti ?> TL</span></td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th> Genel Toplam</th>
                                        <td><span class="amount_new"><?= $geneltoplam ?> TL</span></td>
                                        <input type="hidden" name="geneltoplam" value="<?= $geneltoplam ?>">
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <button style="margin-top: 15px" class="btn btn-success" type="submit">Siparişi Tamamla</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- checkout-area end -->
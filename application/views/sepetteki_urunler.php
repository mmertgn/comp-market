<!-- shop area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop_menu">
                    <ul class="cramb_area cramb_area_2 ">
                        <li><a href="<?= base_url() ?>">Anasayfa /</a></li>
                        <li><a href="#">Sepet</a></li>
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
                    <h1>Sepetim</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="all_wis_frm">
                <div class="col-md-12">
                    <div class="wishlist-content wishlist-content-2">
                        <form action="<?= base_url() ?>siparis/siparisodeme" method="post">
                            <div class="wishlist-table wishlist-table-2 table-responsive">
                                <table>
                                    <?php
                                    if($sepetsayi>0) {
                                    ?>
                                    <thead>
                                    <tr>
                                        <th class="product-remove"><span class="nobr">Sil</span></th>
                                        <th class="product-thumbnail product-thumbnail-2"></th>
                                        <th class="product-name product-name_2"><span class="nobr">Ürün Adı</span></th>
                                        <th class="product-price"><span class="nobr"> Fiyat </span></th>
                                        <th class="product-stock-stauts"><span class="nobr"> Adet </span></th>
                                        <th class="product-add-to-cart"><span class="nobr">Toplam</span></th>
                                    </tr>
                                    </thead>
                                        <?php
                                    }
                                    ?>
                                    <tbody>
                                    <?php
                                    if($sepetsayi>0) {
                                    $sepettoplami = 0;
                                    $kargoucreti = 5.99;
                                    foreach ($sepet as $rs) {
                                    $sepettoplami = $rs->urunfiyat + $sepettoplami;
                                    ?>
                                    <tr>
                                        <td class="product-remove product-remove_2"><a href="<?= base_url() ?>home/sepetsil/<?= $rs->id ?>">×</a></td>
                                        <td class="product-thumbnail product-thumbnail-2"><a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urunid ?>"><img src="<?= base_url() ?>uploads/<?= $rs->urunresim ?>" alt="<?= $rs->urunadi ?>" /></a></td>
                                        <td class="product-name product-name_2"><a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urunid ?>"><?= $rs->urunadi ?></a></td>
                                        <td class="product-price"><?= $rs->urunfiyat ?> TL</td>
                                        <td class="product-stock-status">
                                            <div class="latest_es_from_2">
                                                <input type="number" value="1">
                                            </div>
                                        </td>
                                        <td class="product-price"><?= $rs->urunfiyat ?> TL</td>
                                    </tr>
                                        <?php
                                    }
                                        $geneltoplam = $sepettoplami + $kargoucreti;
                                    }else {
                                    $sepettoplami = 0;
                                    $kargoucreti = 0;
                                    $geneltoplam = 0;
                                    ?>
                                        <div class="section-title  text-center mb-40">
                                            <h2 class="uppercase mb-30">Sepetİnİzde ÜrÜn Bulunmamaktadır.</h2>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="6">
                                            <div class="coupon">
                                                <label for="coupon_code"></label>
                                                <input id="coupon_code" class="input-text" type="text" placeholder="Kodu Buraya Girin." value="" name="coupon_code">
                                                <a class="button_act button_act_3 button_act_333 button_act_tp " href="#">Kullan</a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="cart_totals ">
                                    <h2>Ödeme Detayları</h2>
                                    <table class="shop_table shop_table_responsive">
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Sepet Toplamı</th>
                                            <td data-title="Subtotal">
                                                            <span class="woocommerce-Price-amount amount">
                                                            <?= $sepettoplami ?> TL
                                                            </span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Kargo Ücreti</th>
                                            <td data-title="Total">
                                                <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                            <?= $kargoucreti ?> TL
                                                            </span>
                                                </strong>
                                            </td>
                                        </tr><tr class="order-total">
                                            <th>Genel Toplam</th>
                                            <td data-title="Total">
                                                <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                            <?= $geneltoplam ?> TL
                                                            </span>
                                                </strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <button class="button_act button_act-tc ">	Alışverişi Tamamla</button>
                                    </div>
                        </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
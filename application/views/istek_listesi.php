<!-- shop area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop_menu shop_menu_tk">
                    <ul class="cramb_area cramb_area_2 cramb_area_3 cramb_area_ktp">
                        <li><a href="<?= base_url() ?>">Anasayfa /</a></li>
                        <li>İstek Listesi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop area end-->
<!--wishlist area start-->
<div class="wishlist_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="account_heading">
                    <h1>İstek Listem</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="all_wis_frm">
                <div class="col-md-12">
                    <div class="wishlist-content">
                            <div class="wishlist-table table-responsive">
                                <table>
                                    <?php
                                    if($isteksayi>0) {
                                        ?>
                                    <thead>
                                    <tr>
                                        <th class="product-remove"><span class="nobr"></span></th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name"><span class="nobr">Ürün</span></th>
                                        <th class="product-price"><span class="nobr"> Fİyat </span></th>
                                        <th class="product-stock-stauts"><span class="nobr"> Stok Sayısı </span></th>
                                        <th class="product-add-to-cart"><span class="nobr"></span></th>
                                    </tr>
                                    </thead>
                                    <?php
                                    }
                                    ?>
                                    <tbody>
                                    <?php
                                    if($isteksayi>0) {
                                    foreach ($isteklist as $rs) {
                                    ?>
                                    <tr>
                                        <td class="product-remove"><a href="<?= base_url() ?>home/isteksil/<?= $rs->id ?>">×</a></td>
                                        <td class="product-thumbnail"><a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urunid ?>"><img src="<?= base_url() ?>uploads/<?= $rs->urunresim ?>" alt="<?= $rs->urunadi ?>" /></a></td>
                                        <td class="product-name"><a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urunid ?>"><?= $rs->urunadi ?></a></td>
                                        <td class="product-price"><span class="amount-list"> <?= $rs->urunfiyat ?> TL </span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock"><?= $rs->urunmiktar ?></span></td>
                                        <td class="product-add-to-cart"><a class="button_act button_act_3 button_act_333" href="<?= base_url() ?>home/sepeteekle/<?= $rs->urunid ?>">Sepete Ekle</a></td>
                                    </tr>
                                        <?php
                                    }
                                    }
                                    else {
                                        ?>
                                        <div class="section-title  text-center mb-40">
                                            <h2 class="uppercase mb-30">İstek Listenizde Ürün Bulunmamaktadır.</h2>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="6">
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<!-- shop area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop_menu">
                    <ul class="cramb_area cramb_area_5">
                        <li><a href="<?= base_url() ?>">Anasayfa / </a></li>
                        <li class="br-active">Arama Sayfası</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--bar area start-->
        <div class="row">
            <div class="col-md-12">
                <?php if($this->session->flashdata("sonuc")) {
                    ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                        <strong>Arama Başarılı!</strong> Aradığınız kelime <strong><?= $aranan ?></strong>.
                    </div>
                    <?php
                }
                ?>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="row">
                            <?php
                            foreach ($arama_sonucu as $rs) {
                                ?>
                                <div class="col-md-4 col-sm-4">
                                    <div class="all-pros all-pros-2 all-pros-latest">
                                        <div class="sinle_pic">
                                            <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>">
                                                <img class="primary-img" src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>" />
                                                <img class="secondary-img" src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>" />
                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <div class="usal_pro">
                                                <div class="product_name_2">
                                                    <h2>
                                                        <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>"><?= $rs->adi ?></a>
                                                    </h2>
                                                </div>
                                                <div class="price_box">
                                                    <span class="spical-price"><?= $rs->y_fiyat ?> TL</span>
                                                </div>
                                                <div class="last_button_area">
                                                    <ul class="add-to-links clearfix">
                                                        <li class="addwishlist">
                                                            <div class="yith-wcwl-add-button show">
                                                                <a class="add_to_wishlist" href="<?= base_url() ?>home/istekekle/<?= $rs->id ?>" rel="nofollow"
                                                                   data-product-id="45" data-product-type="external"
                                                                   data-toggle="tooltip" title="İstek Listesi"
                                                                   data-original-title="İstek Listesine Ekle"><i
                                                                            class="fa fa-heart"></i></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="new_act">
                                                                <a class="button_act" data-quick-id="45" href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>"
                                                                   title="" data-toggle="tooltip"
                                                                   data-original-title="Ürüne Git">Gözat</a>
                                                            </div>
                                                        </li>
                                                        <li class="addcompare">
                                                            <div class="woocommerce product">
                                                                <a class="compare button" href="<?= base_url() ?>home/sepeteekle/<?= $rs->id ?>" data-product_id="45"
                                                                   rel="nofollow" data-toggle="tooltip" title=""
                                                                   data-original-title="Sepete Ekle"><i
                                                                            class="fa fa-shopping-cart"></i></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--shop area end-->
<!--brand area end-->
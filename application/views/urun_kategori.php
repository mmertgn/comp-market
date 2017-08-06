<!-- shop area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop_menu">
                    <ul class="cramb_area cramb_area_5">
                        <li><a href="<?= base_url() ?>">Anasayfa / </a></li>
                        <li class="br-active"><?= $katsecili[0]->kat_adi ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--bar area start-->
        <div class="row">
            <div class="col-md-3">
                <div class="category-widget-menu">
                    <h2 class="cat-menu-title text-uppercase">Kategoriler</h2>
                    <div class="menu-categories-container">
                        <ul class="menu-categories">
                            <?php
                            foreach ($kategori as $rs) {
                            if ($rs->id == $katsecili[0]->id ) {
                            ?>
                                <li class="active" >
                                    <a style="color:red;" href="<?= base_url() ?>kategori/liste/<?= $rs->id ?>"><?= $rs->kat_adi ?></a>
                                </li>
                                <?php
                            }
                            else{
                            ?>
                                <li>
                                    <a href="<?= base_url() ?>kategori/liste/<?= $rs->id ?>"><?= $rs->kat_adi ?></a>
                                </li>
                                <?php
                            }
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="category-widget-menu">
                    <h2 class="cat-menu-title text-uppercase"><?= $katsecili[0]->kat_adi ?> Markaları</h2>
                    <div class="menu-categories-container">
                        <ul class="menu-categories">
                            <?php
                            foreach ($urun_altkat as $rs) {?>
                                <li>
                                    <a href="<?= base_url() ?>altkategori/liste/<?= $rs->id ?>"><?= $rs->adi ?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="category-widget-menu">
                            <h2 class="cat-menu-title text-uppercase">Çok Satanlar</h2>
                            <?php
                            foreach ($coksatan as $rs) {
                            ?>
                            <div class="all-pros-ex all-pros-ex-2">
                                <div class="llc_pro">
                                    <div class="sinle_pic_3">
                                        <a style="margin-left: 10px;" href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>">
                                            <img class="primary-img" src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>" />
                                        </a>
                                    </div>
                                </div>
                                <div class="product_content_2">
                                    <div class="usal_pro">
                                        <div class=" product_name_new">
                                            <h2>
                                                <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"><?= $rs->adi ?></a>
                                            </h2>
                                        </div>
                                        <div class="product_price product_price_new product_price_new_3">
                                        </div>
                                        <div class="price_box price_box_new price_box_new_3">
                                            <span class="spical-price"><?= $rs->y_fiyat ?> TL</span>
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
            <div class="col-md-9">
                <div class="bar">

                    <div class="right_area">
                        <!-- Nav tabs -->
                        <ul class="retabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab"><i class="fa fa-th"> Tablo</i></a></li>
                            <li role="presentation"><a href="#profile" role="tab" data-toggle="tab"><i class="fa fa-list"> Liste</i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="row">
                            <?php
                            foreach ($urun_kat as $rs) {
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
                                            <div class="product_price">
                                                <div class="price_rating">
                                                    <?php
                                                    $rating = $rs->puan / $rs->oysayisi;
                                                    if($rating==0) {
                                                        ?>
                                                        <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <?php
                                                    }
                                                    elseif($rating>0 && $rating<1 )
                                                    {?>
                                                        <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-half"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <?php
                                                    }
                                                    elseif($rating==1)
                                                    {?>
                                                        <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <?php
                                                    }
                                                    elseif($rating>1 && $rating<2 )
                                                    {?>
                                                        <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-half"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <?php
                                                    }
                                                    elseif($rating==2)
                                                    {?>
                                                        <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <?php
                                                    }
                                                    elseif($rating>2 && $rating<3 )
                                                    {?>
                                                        <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-half"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <?php
                                                    }
                                                    elseif($rating==3)
                                                    {?>
                                                        <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <?php
                                                    }
                                                    elseif($rating>3 && $rating<4 )
                                                    {?>
                                                        <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-half"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <?php
                                                    }
                                                    elseif($rating==4)
                                                    {?>
                                                        <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                                                        <?php
                                                    }
                                                    elseif($rating>4 && $rating<5 )
                                                    {?>
                                                        <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star-half"></i></a>
                                                        <?php
                                                    }
                                                    elseif($rating==5 )
                                                    {?>
                                                        <a href="<?=  base_url()?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <a href="<?=  base_url()?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
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
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <?php
                        foreach ($urun_kat as $rs) {
                            ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="all-pros br-ntf">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 pl pr">
                                                <div class="sngl-pro">
                                                    <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                        <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>">
                                                            <img class="primary-img"
                                                                 src="<?= base_url() ?>uploads/<?= $rs->resim ?>"
                                                                 alt="<?= $rs->adi ?>"/>
                                                            <img class="secondary-img"
                                                                 src="<?= base_url() ?>uploads/<?= $rs->resim ?>"
                                                                 alt="<?= $rs->adi ?>"/>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8 pl pr">
                                                <div class="product_content product_content_nx">
                                                    <div class="usal_pro">
                                                        <div class="product_name_2 product_name_3 prnm">
                                                            <h2>
                                                                <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>"><?= $rs->adi ?></a>
                                                            </h2>
                                                            <div class="pro_discrip">
                                                                <p><?= $rs->aciklama ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="action actionmm">
                                                            <div class="product_price  product_price_tz">
                                                                <div class="price_rating">
                                                                    <?php
                                                                    $rating = $rs->puan / $rs->oysayisi;
                                                                    if ($rating == 0) {
                                                                        ?>
                                                                        <a href="<?= base_url() ?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <?php
                                                                    } elseif ($rating > 0 && $rating < 1) {
                                                                        ?>
                                                                        <a href="<?= base_url() ?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-half"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <?php
                                                                    } elseif ($rating == 1) {
                                                                        ?>
                                                                        <a href="<?= base_url() ?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <?php
                                                                    } elseif ($rating > 1 && $rating < 2) {
                                                                        ?>
                                                                        <a href="<?= base_url() ?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-half"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <?php
                                                                    } elseif ($rating == 2) {
                                                                        ?>
                                                                        <a href="<?= base_url() ?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <?php
                                                                    } elseif ($rating > 2 && $rating < 3) {
                                                                        ?>
                                                                        <a href="<?= base_url() ?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-half"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <?php
                                                                    } elseif ($rating == 3) {
                                                                        ?>
                                                                        <a href="<?= base_url() ?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <?php
                                                                    } elseif ($rating > 3 && $rating < 4) {
                                                                        ?>
                                                                        <a href="<?= base_url() ?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-half"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <?php
                                                                    } elseif ($rating == 4) {
                                                                        ?>
                                                                        <a href="<?= base_url() ?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-o"></i></a>
                                                                        <?php
                                                                    } elseif ($rating > 4 && $rating < 5) {
                                                                        ?>
                                                                        <a href="<?= base_url() ?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star-half"></i></a>
                                                                        <?php
                                                                    } elseif ($rating == 5) {
                                                                        ?>
                                                                        <a href="<?= base_url() ?>home/puanver/1/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/2/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/3/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/4/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <a href="<?= base_url() ?>home/puanver/5/<?= $rs->id ?>/<?= $rs->oysayisi ?>/<?= $rs->puan ?>"
                                                                           tabindex="0"><i class="fa fa-star"></i></a>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="price_box price_box_tz ">
                                                                <span class="spical-price"><?= $rs->y_fiyat ?> TL</span>
                                                            </div>
                                                            <div class="last_button_area">
                                                                <ul class="add-to-links clearfix">
                                                                    <li>
                                                                        <div class="new_act">
                                                                            <a class="button_act button_act_2 button_act_hts" href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>"
                                                                               data-quick-id="45" title=""
                                                                               data-toggle="tooltip"
                                                                               data-original-title="Gözat">Gözat</a>
                                                                        </div>
                                                                    </li>
                                                                    <li class="addwishlist">
                                                                        <div class="yith-wcwl-add-button  show">
                                                                            <a class="add_to_wishlist_3 add_to_wishlist_tz"
                                                                               href="<?= base_url() ?>home/istekekle/<?= $rs->id ?>" rel="nofollow"
                                                                               data-product-id="45"
                                                                               data-product-type="external"
                                                                               data-toggle="tooltip" title=""
                                                                               data-original-title="İstek Listene Ekle"><i
                                                                                    class="fa fa-heart"></i></a>
                                                                        </div>
                                                                    </li>
                                                                    <li class="addcompare">
                                                                        <div class="woocommerce product compare-button">
                                                                            <a class="compare_3 compare_3r button"
                                                                               href="<?= base_url() ?>home/sepeteekle/<?= $rs->id ?>" data-product_id="45"
                                                                               rel="nofollow" data-toggle="tooltip"
                                                                               title="Sepete Ekle" data-original-title="Sepete Ekle"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                        </div>
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
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--shop area end-->
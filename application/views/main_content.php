<!--social design arae start-->
<div class="link_area">
    <div class="container">
        <div class="row">
            <div class="social_design on_right">
                <ul>
                    <li>
                        <a class="facebook" target="_blank" href="#facebook">
                                <span>
                                <i class="fa fa-facebook"></i>
                                <span class="social-text">Follow via Facebook</span>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" target="_blank" href="#twitter.com">
                                <span>
                                <i class="fa fa-twitter"></i>
                                <span class="social-text">Follow via Twitter</span>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a class="google-plus" target="_blank" href="#google-plus">
                                <span>
                                <i class="fa fa-google-plus"></i>
                                <span class="social-text">Follow via Google +</span>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a class="youtube" target="_blank" href="#youtube">
                                <span>
                                <i class="fa fa-youtube"></i>
                                <span class="social-text">Follow via Youtube</span>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a class="pinterest" target="_blank" href="#pinterest">
                                <span>
                                <i class="fa fa-pinterest"></i>
                                <span class="social-text">Follow via Pinterest</span>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a class="mail-to" target="_blank" href="mailto:lionthemes88@gmail.com">
                                <span>
                                <i class="fa fa-envelope-o"></i>
                                <span class="social-text">Mail To Us</span>
                                </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--social design arae end-->
<!--product catagory area start-->
<div class="catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="visible_product">
                    <div class="new_product">
                        <div class="product_heading">
                            <i class="fa fa-star"></i>
                            <span>Teknobackup Hazır Sistemler</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                <div class="my-tabs">
                    <!-- Nav tabs -->
                    <ul class="favtabs" role="tablist">
                        <li role="presentation" class="active"><a href="#elec" aria-controls="elec" role="tab" data-toggle="tab">Masaüstü PC</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="elec">
                            <div class="row">
                                <div class="feature-carousel indicator-brand-3">
                                    <?php
                                    foreach ($hazirsistem as $rs) {
                                        ?>
                                        <div class="col-md-12">
                                            <div class="all-pros animated fadeInUp">
                                                <div class="single_product">
                                                    <span>Yeni</span>
                                                </div>
                                                <div class="sinle_pic">
                                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>">
                                                        <img class="primary-img"
                                                             src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                                        <img class="secondary-img"
                                                             src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                                    </a>
                                                </div>
                                                <div class="product_content">
                                                    <div class="usal_pro">
                                                        <div class="product_name_2">
                                                            <h2 style="height: 117px">
                                                                <a  href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>"><?= $rs->adi ?></a>
                                                            </h2>
                                                            <h5><?= $rs->altkatadi ?></h5>
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
    </div>
</div>
<!--catagory area end-->

<!--product area start-->
<section class="product_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="all_product animated fadeInUp">
                    <div class="new_product">
                        <div class="product_heading">
                            <i class="fa fa-play-circle"></i>
                            <span>Yeni Eklenen Ürünler</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="product_2 indicator-brand indicator-brand-8">
                            <?php
                            foreach ($yeniurun as $rs) {
                                ?>
                                <div class="col-md-12">
                                    <div class="all-pros animated fadeInUp" style="height: 511px">
                                        <div class="single_product">
                                            <span>Yeni</span>
                                        </div>
                                        <div class="sinle_pic">
                                            <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>">
                                                <img class="primary-img"
                                                     src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                                <img class="secondary-img"
                                                     src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <div class="usal_pro">
                                                <div class="product_name_2">
                                                    <h2 style="height: 117px">
                                                        <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>"><?= $rs->adi ?></a>
                                                    </h2>
                                                    <h5><?= $rs->altkatadi ?></h5>
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
</section>
<!--product area end-->
<!--product catagory area start-->
<div class="catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="visible_product">
                    <div class="new_product">
                        <div class="product_heading">
                            <i class="fa fa-star"></i>
                            <span>Ürünler</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                <div class="my-tabs">
                    <!-- Nav tabs -->
                    <ul class="favtabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Sizin İçin Seçtiklerimiz</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Günün Fırsatları</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Çok Satanlar</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="feature-carousel indicator-brand-3">
                                    <?php
                                    foreach ($secili as $rs) {
                                        ?>
                                        <div class="col-md-12">
                                            <div class="all-pros animated fadeInUp">
                                                <div class="sinle_pic">
                                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>">
                                                        <img class="primary-img" src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                                        <img class="secondary-img"
                                                             src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"/>
                                                    </a>
                                                </div>
                                                <div class="product_content">
                                                    <div class="usal_pro">
                                                        <div class="product_name_2">
                                                            <h2 style="height: 117px">
                                                                <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"><?= $rs->adi ?></a>
                                                            </h2>
                                                            <h5><?= $rs->altkatadi ?></h5>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="spical-price"><?= $rs->y_fiyat ?> TL</span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button show">
                                                                        <a class="add_to_wishlist" href="<?= base_url() ?>home/istekekle/<?= $rs->urun_id ?>" rel="nofollow"
                                                                           data-product-id="45" data-product-type="external"
                                                                           data-toggle="tooltip" title="İstek Listesi"
                                                                           data-original-title="İstek Listesine Ekle"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act" data-quick-id="45" href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"
                                                                           title="" data-toggle="tooltip"
                                                                           data-original-title="Ürüne Git">Gözat</a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product">
                                                                        <a class="compare button" href="<?= base_url() ?>home/sepeteekle/<?= $rs->urun_id ?>" data-product_id="45"
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
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="row">
                                <div class="feature-carousel indicator-brand-3">
                                    <?php
                                    foreach ($firsat as $rs) {
                                        ?>
                                        <div class="col-md-12">
                                            <div class="all-pros all-pros-2 animated fadeInUp">
                                                <div class="sinle_pic">
                                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>">
                                                        <img class="primary-img" src="<?= base_url() ?>uploads/<?= $rs->resim ?>"
                                                             alt=""/>
                                                        <img class="secondary-img"
                                                             src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product_content">
                                                    <div class="usal_pro">
                                                        <div class="product_name_2">
                                                            <h2 style="height: 117px">
                                                                <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->id ?>"><?= $rs->urun_adi ?></a>
                                                            </h2>
                                                            <h5><?= $rs->altkatadi ?></h5>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="spical-price"><?= $rs->kampfiyat ?> TL</span>
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
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <div class="row">
                                <div class="feature-carousel indicator-brand-3">
                                    <?php
                                    foreach ($coksatan as $rs) {
                                        ?>
                                        <div class="col-md-12">
                                            <div class="all-pros all-pros-2 animated fadeInU">
                                                <div class="sinle_pic">
                                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>">
                                                        <img class="primary-img" src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>"
                                                             alt=""/>
                                                        <img class="secondary-img"
                                                             src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product_content">
                                                    <div class="usal_pro">
                                                        <div class="product_name_2">
                                                            <h2 style="height: 117px">
                                                                <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"><?= $rs->adi ?></a>
                                                            </h2>
                                                            <h5><?= $rs->altkatadi ?></h5>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="spical-price"><?= $rs->y_fiyat ?> TL</span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button show">
                                                                        <a class="add_to_wishlist" href="<?= base_url() ?>home/istekekle/<?= $rs->urun_id ?>" rel="nofollow"
                                                                           data-product-id="45" data-product-type="external"
                                                                           data-toggle="tooltip" title="İstek Listesi"
                                                                           data-original-title="İstek Listesine Ekle"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act" data-quick-id="45" href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"
                                                                           title="" data-toggle="tooltip"
                                                                           data-original-title="Ürüne Git">Gözat</a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product">
                                                                        <a class="compare button" href="<?= base_url() ?>home/sepeteekle/<?= $rs->urun_id ?>" data-product_id="45"
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
    </div>
</div>
<!--catagory area end-->
<!--newsletter area start-->
<div class="all_news_letter all_news_letter_2 all_news_letter_yf ">
    <div class="news_letter">
        <div class="news_middele">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="news_heading">
                            <h3> E-Bülten Aboneliği </h3>
                        </div>
                        <div class="full_form full_form_2">
                            <form id="form-newsletter1" class="widget_wysija" method="post" action="#wysija">
                                <p class="wysija-paragraph">
                                    <input name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Enter Your Mail..." placeholder="Email adresinizi giriniz..." value="" id="form-validation-field-0" style="" type="text">
                                </p>
                                <input class="wysija-submit wysija-submit-field" value="Abone Ol!" type="submit">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="news_right">
                            <div class="news_heading news_heading_3">
                                <h3>Bizi Takip Edin: </h3>
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <a class="facebook social-icon" href="#facebook" title="" target="_blank" data-toggle="tooltip" data-original-title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter social-icon" href="#twitter.com" title="" target="_blank" data-toggle="tooltip" data-original-title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="youtube social-icon" href="#youtube" title="" target="_blank" data-toggle="tooltip" data-original-title="Youtube">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="social-icon instagram" href="#" title="" target="_blank" data-toggle="tooltip" data-original-title="instagram">
                                        <i class="fa fa-instagram"></i>
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
<!--newsletter area end-->
<style type="text/css">

    /*****************globals*************/
    body {
        font-family: 'open sans';
        overflow-x: hidden; }

    img {
        max-width: 100%; }

    .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column; }
    @media screen and (max-width: 996px) {
        .preview {
            margin-bottom: 20px; } }

    .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1; }

    .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px; }
    .preview-thumbnail.nav-tabs li {
        width: 18%;
        margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block; }
    .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0; }

    .tab-content {
        overflow: hidden; }
    .tab-content img {
        width: 100%;
        -webkit-animation-name: opacity;
        animation-name: opacity;
        -webkit-animation-duration: .3s;
        animation-duration: .3s; }

    .card {
        margin-top: 50px;
        background: #eee;
        padding: 3em;
        line-height: 1.5em; }

    @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex; } }

    .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column; }

    .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1; }

    .product-title, .price, .sizes, .colors {
        text-transform: UPPERCASE;
        font-weight: bold; }

    .checked, .price span {
        color: #ff9f1a; }

    .product-title, .rating, .product-description, .price, .vote, .sizes {
        margin-bottom: 15px; }

    .product-title {
        margin-top: 0; }

    .size {
        margin-right: 10px; }
    .size:first-of-type {
        margin-left: 40px; }

    .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px; }
    .color:first-of-type {
        margin-left: 20px; }

    .add-to-cart, .like {
        background: #ff9f1a;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
        transition: background .3s ease; }
    .add-to-cart:hover, .like:hover {
        background: #b36800;
        color: #fff; }

    .not-available {
        text-align: center;
        line-height: 2em; }
    .not-available:before {
        font-family: fontawesome;
        content: "\f00d";
        color: #fff; }

    .orange {
        background: #ff9f1a; }

    .green {
        background: #85ad00; }

    .blue {
        background: #0076ad; }

    .tooltip-inner {
        padding: 1.3em; }

    @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1); } }

    @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1); } }

    /*# sourceMappingURL=style.css.map */
</style>
<!-- shop area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop_menu shop_menu_2">
                    <ul class="cramb_area cramb_area_6">
                        <li><a href="<?= base_url() ?>">Anasayfa /</a></li>
                        <li><a href="<?= base_url() ?>kategori/liste/<?= $urundetay[0]->katId ?>"><?= $urundetay[0]->katadi ?> /</a></li>
                        <li class="br-active"><a href="<?= base_url() ?>altkategori/liste/<?= $urundetay[0]->altKatId ?>"><?= $urundetay[0]->altkatadi ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--zoom elavator area one start-->
<div class="elavator_area">
    <div class="container">
        <?php if($this->session->flashdata("puan")) {
            ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                <strong>Üzgünüm!</strong> Ürüne Puan Verebilmek için <a href="<?= base_url() ?>home/login" class="alert-link">Buradan</a> Giriş Yapmalısınız!
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="<?= base_url() ?>uploads/<?= $urundetay[0]->resim ?>" /></div>
                        <?php
                        $a = 1;
                        foreach ($galeri as $rs) {
                        ?>
                        <div class="tab-pane" id="pic-<?= $a ?>"><img src="<?= base_url() ?>galeriuploads/<?= $rs->resim ?>" alt="<?= $urundetay[0]->adi ?>" /></div>
                            <?php
                            $a++;
                        }
                        ?>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <?php
                        $a = 1;
                        foreach ($galeri as $rs) {
                        ?>
                        <li><a data-target="#pic-<?= $a ?>" data-toggle="tab"><img src="<?= base_url() ?>galeriuploads/<?= $rs->resim ?>" alt="<?= $urundetay[0]->adi ?>" /></a></li>
                            <?php
                            $a++;
                        }
                        ?>
                    </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="elav_titel">
                    <div class="elv_heading">
                        <h3><?= $urundetay[0]->adi ?></h3>
                        <h6 class="brand-name-2"><?= $urundetay[0]->altkatadi ?></h6>
                    </div>
                    <div class="price_rating">
                        <?php
                        $rating = $urundetay[0]->puan / $urundetay[0]->oysayisi;
                        if($rating==0) {
                            ?>
                            <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <?php
                        }
                        elseif($rating>0 && $rating<1 )
                        {?>
                            <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-half"></i></a>
                            <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <?php
                        }
                        elseif($rating==1)
                        {?>
                            <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <?php
                        }
                        elseif($rating>1 && $rating<2 )
                        {?>
                            <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-half"></i></a>
                            <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <?php
                        }
                        elseif($rating==2)
                        {?>
                            <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <?php
                        }
                        elseif($rating>2 && $rating<3 )
                        {?>
                            <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-half"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <?php
                        }
                        elseif($rating==3)
                        {?>
                            <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <?php
                        }
                        elseif($rating>3 && $rating<4 )
                        {?>
                            <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-half"></i></a>
                            <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <?php
                        }
                        elseif($rating==4)
                        {?>
                            <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-o"></i></a>
                            <?php
                        }
                        elseif($rating>4 && $rating<5 )
                        {?>
                            <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star-half"></i></a>
                            <?php
                        }
                        elseif($rating==5 )
                        {?>
                            <a href="<?=  base_url()?>home/puanver/1/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/2/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/3/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/4/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <a href="<?=  base_url()?>home/puanver/5/<?= $urundetay[0]->id ?>/<?= $urundetay[0]->oysayisi ?>/<?= $urundetay[0]->puan ?>" tabindex="0"><i class="fa fa-star"></i></a>
                            <?php
                        }
                        ?>
                        <a class="review-link" href="#">
                            <span class="count">Ürün Puanı : <?= $urundetay[0]->puan ?> </span>
                        </a>
                    </div>
                    <div class="elavetor_social">
                        <h3 class="widget-title">Ürünü Paylaş</h3>
                        <ul class="social-link">
                            <li><a class="fb" data-original-title="facebook" href="#" title="" data-toggle="tooltip"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twit" data-original-title="twitter" href="#" title="" data-toggle="tooltip"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="pinter" data-original-title="pinterest" href="#" title="" data-toggle="tooltip"><i class="fa fa-pinterest"></i></a></li>
                            <li><a class="google+" href="#" title="Google+" data-target="#productModal" data-toggle="tooltip"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="lindin" href="#" title="LinkedIn" data-target="#productModal" data-toggle="tooltip"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="elav_info">
                    <div class="price_box price_box_acr">
                        <span class="old- price old- price-2">Fiyat : <?= $urundetay[0]->e_fiyat ?> TL</span>
                        <span class="spical-price spical-price-2"><?= $urundetay[0]->y_fiyat ?> TL</span>
                    </div>
                    <div class="add_defi">
                        <a href="<?= base_url() ?>home/istekekle/<?= $urundetay[0]->id ?>" data-original-title="İstek Listene Ekle" data-toggle="tooltip">
                            <i class="fa fa-heart another_icon"></i>
                            İstek Listene Ekle
                        </a>
                    </div>
                    <div class="add_defi_2">
                        <a class="btn btn-default" data-original-title="Sepete Ekle" title="" data-toggle="tooltip" rel="nofollow" data-product_id="45" href="<?= base_url() ?>home/sepeteekle/<?= $urundetay[0]->id ?>"><i class="fa fa-shopping-cart"></i> Sepete Ekle</a>
                    </div>
                    <div class="new_meta">
                                <span class="sku_wrapper">
                                Kategori:
                                <span class="sku"><?= $urundetay[0]->katadi ?></span>
                                </span>
                        <span class="sku_wrapper">
                                Türü:
                                <span class="sku"><?= $urundetay[0]->altkatadi ?></span>
                                </span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--zoom elavator area one end-->
<!--tab area start-->
<div class="tab_area_start">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                <div class="my-tabs">
                    <!-- Nav tabs -->
                    <ul class="favtabs favtabs-2 favtabs-nytr" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Açıklaması</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Yorumlar</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="tb_desc">
                                        <?= $urundetay[0]->uzunaciklama ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="tb_desc">
                                        <div class="review_area_heading">
                                            <div id="comnt">
                                                <h2>Yorumlar</h2>
                                                <ol class="commentlist">
                                                    <?php
                                                    foreach ($yorum as $rs) {
                                                        if ($rs->durum == "Onaylı") {
                                                            ?>
                                                            <li id="li-comment-22"
                                                                class="comment even thread-even depth-1"
                                                                itemscope="">
                                                                <div id="comment-22" class="comment_container">
                                                                    <div class="comment-text">
                                                                        <p class="meta">
                                                                            <strong><?= $rs->adsoy ?></strong>
                                                                            –
                                                                            <time datetime="2015-12-16T15:26:49+00:00">
                                                                                <?= $rs->tarih ?>
                                                                            </time>
                                                                            :
                                                                        </p>
                                                                        <div class="description">
                                                                            <p><?= $rs->yorum_icerik ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    <?php
                                                    if($yorumsayisi<1){?>
                                                        <hr>
                                                        <p class="mb-0">Bu ürün için henüz yapılmış bir yorum bulunmamaktadır. Yan taraftaki formdan ürünle ilgili görüşlerinizi iletebilirsiniz.</p>
                                                        <?php
                                                    }
                                                    ?>
                                                </ol>
                                            </div>

                                            <p style="font-weight: bold; color: red">Yorum eklemek için önce Giriş yapabilirsiniz yada Misafir olarak da yorum bırakabilirsiniz!</p>
                                            <hr>
                                            <div class="review_form_area">
                                                <div class="review_form">
                                                    <div class="revew_form_content">
                                                        <h3 id="reply-title" class="comment-reply-title">
                                                            Yorum Ekle
                                                            <small>
                                                                <a id="cancel-comment-reply-link" style="display:none;" href="#" rel="nofollow">Cancel reply</a>
                                                            </small>
                                                        </h3>
                                                        <?php
                                                        if ($this->session->kullanici_data['id']) {
                                                        ?>
                                                        <form id="commentform" class="comment-form" action="<?= base_url() ?>home/yorumekle/<?= $this->session->kullanici_data['id'] ?>" method="post">
                                                            <input type="hidden" name="urun_id"
                                                                   value="<?= $urundetay[0]->id ?>">
                                                            <div class="comment-form-comment">
                                                                <label class="comment">Yorumunuz</label>
                                                                <textarea id="comment" aria-required="true" rows="8" cols="45" name="yorum_icerik"></textarea>
                                                            </div>
                                                            <div class="form-submit">
                                                                <input id="sub" class="submt" type="submit" value="Kaydet   " name="submit">
                                                            </div>
                                                        </form>
                                                            <?php
                                                        }
                                                        else {
                                                        ?>
                                                        <form id="commentform" class="comment-form" action="<?= base_url() ?>home/yorumekle/1" method="post">
                                                            <input type="hidden" name="urun_id"
                                                                   value="<?= $urundetay[0]->id ?>">
                                                            <div class="comment-form-comment">
                                                                <label class="comment">Yorumunuz</label>
                                                                <textarea id="comment" aria-required="true" rows="8" cols="45" name="yorum_icerik"></textarea>
                                                            </div>
                                                            <div class="form-submit">
                                                                <input id="sub" class="submt" type="submit" value="Kaydet   " name="submit">
                                                            </div>
                                                        </form>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!--tab area end-->
<!--product 2 area start-->
<section class="product_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="all_product">
                    <div class="new_product">
                        <div class="product_heading">
                            <i class="fa fa-paper-plane-o"></i>
                            <span>İlgİnİzİ Çekebİlecek Ürünler</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="product_tx">
                            <?php
                            foreach ($sectik as $rs) {
                            ?>
                            <div class="col-md-3">
                                <div class="all-pros">
                                    <div class="sinle_pic">
                                        <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>">
                                            <img class="primary-img" src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>" />
                                            <img class="secondary-img" src="<?= base_url() ?>uploads/<?= $rs->resim ?>" alt="<?= $rs->adi ?>" />
                                        </a>
                                    </div>
                                    <div class="product_content">
                                        <div class="usal_pro">
                                            <div class="product_name_2">
                                                <h2>
                                                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>"><?= $rs->adi ?></a>
                                                </h2>
                                            </div>
                                            <div class="price_box">
                                                <span class="spical-price"><?= $rs->y_fiyat ?> TL</span>
                                            </div>
                                            <div class="last_button_area last_button_area_px">
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
</section>
<!--product 2 area end-->
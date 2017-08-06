<!--slider area start-->
<section class="slider-area slider-area-2">
    <div class="bend niceties preview-2 preview-3">
        <div id="ensign-nivoslider" class="slides">
            <?php
            $a = 1;
            foreach ($slides as $rs) {
            ?>
            <img src="<?= base_url() ?>slideruploads/<?= $rs->resim ?>" alt="<?= $rs->baslik ?>" title="#slider-caption-<?= $a ?>" />
                <?php
                $a = $a + 1;
            }
            ?>
        </div>

        <?php
        $b = 1;
        $mod = 0;
        foreach ($slides as $rs) {
        if ($mod == 0) {
        if ($rs->urun_id != 0) {
        ?>
        <!-- direction 1 -->
        <div id="slider-caption-<?= $b ?>" class="t-cn slider-direction slider-one ">
            <div class="slider-progress"></div>
            <div class="sl_cap_1_first">
                <div class="layer-1-1 layer-3-1 animated fadeInDown">
                    <h1><?= $rs->baslik ?></h1>
                </div>
                <div class="layer-1-2 layer-3-2 animated flipInX">
                    <h2>Fiyat : <?= $rs->y_fiyat ?> TL</h2>
                </div>
                <div class="layer-1-5 animated rotateInUpLeft">
                    <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>">Gözat</a>
                </div>
            </div>
        </div>
            <?php
        }
        else {
        ?>
            <!-- direction 1 -->
            <div id="slider-caption-<?= $b ?>" class="t-cn slider-direction slider-one ">
                <div class="slider-progress"></div>
                <div class="sl_cap_1_first">
                    <div class="layer-1-1 layer-3-1 animated fadeInDown">
                        <h1> <?= $rs->baslik ?></h1>
                    </div>
                    <div class="layer-1-2 layer-3-2 animated flipInX">
                        <h2><?= $rs->kat_adi ?></h2>
                    </div>
                    <div class="layer-1-3 layer-3-3animated rotateInUpLeft">
                        <h1><?= $rs->aciklamasi ?></h1>
                    </div>
                    <div class="layer-1-5 animated rotateInUpLeft">
                        <a href="<?= base_url() ?>home/kategori/liste/<?= $rs->kategori_id ?>">Gözat</a>
                    </div>
                </div>
            </div>
            <?php
        }
            $b = $b + 1;
            $mod=1;
        }
        else{
        if ($rs->urun_id != 0) {
        ?>
        <!-- direction 1 -->
            <div id="slider-caption-<?= $b ?>" class="t-cn slider-direction slider-one ">
                <div class="slider-progress"></div>
                <div class="sl_cap_1_first">
                    <div class="layer-1-1 layer-3-1 animated fadeInDown">
                        <h1><?= $rs->baslik ?></h1>
                    </div>
                    <div class="layer-1-2 layer-3-2 animated flipInX">
                        <h2>Fiyat : <?= $rs->y_fiyat ?> TL</h2>
                    </div>
                    <div class="layer-1-5 animated rotateInUpLeft">
                        <a href="<?= base_url() ?>home/urun_detayi/<?= $rs->urun_id ?>">Gözat</a>
                    </div>
                </div>
            </div>
            <?php
        }
        else {
        ?>
            <!-- direction 1 -->
            <div id="slider-caption-<?= $b ?>" class="t-cn slider-direction slider-one ">
                <div class="slider-progress"></div>
                <div class="sl_cap_1_first">
                    <div class="layer-1-1 layer-3-1 animated fadeInDown">
                        <h1> <?= $rs->baslik ?></h1>
                    </div>
                    <div class="layer-1-2 layer-3-2 animated flipInX">
                        <h2><?= $rs->kat_adi ?></h2>
                    </div>
                    <div class="layer-1-3 layer-3-3animated rotateInUpLeft">
                        <h1><?= $rs->aciklamasi ?></h1>
                    </div>
                    <div class="layer-1-5 animated rotateInUpLeft">
                        <a href="<?= base_url() ?>home/kategori/liste/<?= $rs->kategori_id ?>">Gözat</a>
                    </div>
                </div>
            </div>
            <?php
        }
            $b = $b + 1;
            $mod =0;
        }
        }
        ?>

    </div>
</section>
<!--slider area end-->
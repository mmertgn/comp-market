<!--asked arae start-->
<div class="asked_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="our_team_new_head our_team_new_head_2">
                    <h2>Pc Toplama Sihirbazı</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-element">
    <div class="container">
        <div class="row">
            <div class="wpb_column column_container col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_double vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey">
                                    <span class="vc_sep_holder vc_sep_holder_l">
                                    <span class="vc_sep_line"></span>
                                    </span>
                            <span class="vc_sep_holder vc_sep_holder_r">
                                    <span class="vc_sep_line"></span>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ll_colpse_area">
    <div class="container">
        <form action="<?= base_url() ?>sihirbaz/sepeteekle" method="post">
        <div class="row">
            <div class="col-md-3">
                <label class="control-label" for="typeahead">İşlemci </label>
            </div>
            <div class="col-md-9">
                <select class="form-control" name="islemci" required>
                    <option>Seçiniz</option>
                    <?php
                    foreach ($islemci as $rs) {
                        ?>
                        <option value="<?= $rs->id ?>"><?= $rs->adi ?> - <?= $rs->y_fiyat ?> TL </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="control-label" for="typeahead">Anakart </label>
            </div>
            <div class="col-md-9">
                <select class="form-control" name="anakart" required>
                    <option>Seçiniz</option>
                    <?php
                    foreach ($anakart as $rs) {
                        ?>
                        <option value="<?= $rs->id ?>"><?= $rs->adi ?> - <?= $rs->y_fiyat ?> TL </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="control-label" for="typeahead">Ekran Kartı </label>
            </div>
            <div class="col-md-9">
                <select class="form-control" name="gpu" required>
                    <option>Seçiniz</option>
                    <?php
                    foreach ($gpu as $rs) {
                        ?>
                        <option value="<?= $rs->id ?>"><?= $rs->adi ?> - <?= $rs->y_fiyat ?> TL </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="control-label" for="typeahead">Bellek </label>
            </div>
            <div class="col-md-9">
                <select class="form-control" name="bellek" required>
                    <option>Seçiniz</option>
                    <?php
                    foreach ($bellek as $rs) {
                        ?>
                        <option value="<?= $rs->id ?>"><?= $rs->adi ?> - <?= $rs->y_fiyat ?> TL </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="control-label" for="typeahead">Sabit Disk </label>
            </div>
            <div class="col-md-9">
                <select class="form-control" name="hdd" required>
                    <option>Seçiniz</option>
                    <?php
                    foreach ($hdd as $rs) {
                        ?>
                        <option value="<?= $rs->id ?>"><?= $rs->adi ?> - <?= $rs->y_fiyat ?> TL </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="control-label" for="typeahead">SSD Disk </label>
            </div>
            <div class="col-md-9">
                <select class="form-control" name="ssd" required>
                    <option>Seçiniz</option>
                    <?php
                    foreach ($ssd as $rs) {
                        ?>
                        <option value="<?= $rs->id ?>"><?= $rs->adi ?> - <?= $rs->y_fiyat ?> TL </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="control-label" for="typeahead">Kasa </label>
            </div>
            <div class="col-md-9">
                <select class="form-control" name="kasa" required>
                    <option>Seçiniz</option>
                    <?php
                    foreach ($kasa as $rs) {
                        ?>
                        <option value="<?= $rs->id ?>"><?= $rs->adi ?> - <?= $rs->y_fiyat ?> TL </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="control-label" for="typeahead">Güç Kaynağı </label>
            </div>
            <div class="col-md-9">
                <select class="form-control" name="kaynak" required>
                    <option>Seçiniz</option>
                    <?php
                    foreach ($kaynak as $rs) {
                        ?>
                        <option value="<?= $rs->id ?>"><?= $rs->adi ?> - <?= $rs->y_fiyat ?> TL </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="control-label" for="typeahead">Monitor </label>
            </div>
            <div class="col-md-9">
                <select class="form-control" name="monitor">
                    <option>Seçiniz</option>
                    <?php
                    foreach ($monitor as $rs) {
                        ?>
                        <option value="<?= $rs->id ?>"><?= $rs->adi ?> - <?= $rs->y_fiyat ?> TL </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="control-label" for="typeahead">Optik Sürücü </label>
            </div>
            <div class="col-md-9">
                <select class="form-control" name="optik">
                    <option>Seçiniz</option>
                    <?php
                    foreach ($optik as $rs) {
                        ?>
                        <option value="<?= $rs->id ?>"><?= $rs->adi ?> - <?= $rs->y_fiyat ?> TL </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
            <div class="row">
                <button class="btn btn-success">Sepete Ekle</button>
            </div>
        </form>
    </div>
</div>
<!--asked arae start-->
<div class="asked_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="our_team_new_head our_team_new_head_2">
                    <h2>Siparişlerim</h2>
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
<!--coolpse area start-->
<div class="ll_colpse_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $kargoucreti = 5.99;
                $a=1;
                foreach ($gecs as $rs) {
                        ?>
                        <div class="panel-default">
                            <div class="panel-heading" role="tab" id="heading<?= $a ?>">
                                <h3 class="colpse_heading">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?= $a ?>" aria-expanded="false" aria-controls="<?= $a ?>">
                                        <?= $rs->tarih ?> - Sipariş No: TBP<?= $rs->id ?>
                                    </a>
                                </h3>
                            </div>
                            <div id="<?= $a ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?= $a ?>">
                                <div class="panel-body">
                                    <table>
                                        <?php
                                        foreach($gecmis_siparis_urun as $key) {
                                            if ($rs->id == $key->siparis_id) {
                                                ?>
                                                <tr>
                                                    <td class="td-title-1"><?= $key->urunadi ?></td>
                                                    <td class="td-title-2"><?= $key->urunfiyat ?> TL</td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <td class="td-title-1">Kargo Ücreti</td>
                                            <td class="td-title-2"><?= $kargoucreti ?> TL</td>
                                        </tr>
                                        <tr>
                                            <td class="order-total">Genel Toplam</td>
                                            <td class="order-total-price"><?= $rs->tutar ?> TL</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php
                    $a++;
                }
                ?>
            </div>
        </div>
    </div>
</div>
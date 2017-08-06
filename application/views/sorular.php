<!--asked arae start-->
<div class="asked_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="our_team_new_head our_team_new_head_2">
                    <h2>Sıkça Sorulan Sorular</h2>
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
            <div class="col-md-6">
                <?php
                $a=1;
                foreach ($sorular as $rs) {
                    if($a%2!=0){
                ?>
                    <div class="panel-default">
                        <div class="panel-heading" role="tab" id="heading<?= $a ?>">
                            <h4 class="colpse_heading">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?= $a ?>" aria-expanded="false" aria-controls="<?= $a ?>">
                                    <?= $rs->soru ?>
                                </a>
                            </h4>
                        </div>
                        <div id="<?= $a ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?= $a ?>">
                            <div class="panel-body">
                                <p>
                                    <?= $rs->cevap ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    $a++;
                }
                ?>
            </div>
            <div class="col-md-6">
                <?php
                $b=1;
                foreach ($sorular as $rs) {
                    if($b%2==0){
                ?>
                    <div class="panel-default">
                        <div class="panel-heading" role="tab" id="heading<?= $b ?>">
                            <h4 class="colpse_heading">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?= $b ?>" aria-expanded="false" aria-controls="<?= $b ?>">
                                    <?= $rs->soru ?>
                                </a>
                            </h4>
                        </div>
                        <div id="<?= $b ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?= $b ?>">
                            <div class="panel-body">
                                <p>
                                    <?= $rs->cevap ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    $b++;
                }
                ?>
            </div>
        </div>
    </div>
</div>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?= base_url() ?>admin">Anasayfa</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Site İçerikleri Yönetimi</a></li>
</ul>
<h1>Site İçerikleri Yönetimi</h1>
<br>
<?php if($this->session->flashdata("sonuc")) {?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>İşlem: </strong><?= $this->session->flashdata("sonuc") ?>
    </div>
    <?php
}
?>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Site İçerikleri Ayarları</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form action="<?= base_url()?>admin/ayarlar/guncellekaydet/<?=$veri[0]->id?>" method="post" class="form-horizontal">
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Gizlilik Politikası</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" rows="3" cols="10" name="gizlilik"><?php
                            echo $veri[0]->gizlilik;
                            ?></textarea>
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Şartlar ve Koşullar</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" rows="3" name="sartlar"><?php
                            echo $veri[0]->sartlar;
                            ?></textarea>
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Satış Sözleşmesi</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" rows="3" name="sozlesme"><?php
                            echo $veri[0]->sozlesme;
                            ?></textarea>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>

                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div><!--/row-->


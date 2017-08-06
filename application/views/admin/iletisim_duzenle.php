<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?= base_url() ?>admin">Anasayfa</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">İletişim Bilgileri Yönetimi</a></li>
</ul>
<h1>İletişim Bilgileri Yönetimi</h1>
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
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>İletişim Bilgileri Düzenle</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form action="<?= base_url()?>admin/iletisim/guncellekaydet/<?=$veri[0]->id?>" method="post" class="form-horizontal">
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Şirket Adı</label>
                    <div class="controls">
                        <input type="text" name="sirketadi" value="<?=$veri[0]->sirketadi?>" id="form-field-1-1" placeholder="Şirket Adı" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Adres</label>
                    <div class="controls">
                        <input type="text" name="adres" value="<?=$veri[0]->adres?>" id="form-field-1-1" placeholder="Adres" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Email</label>
                    <div class="controls">
                        <input type="email" name="email" value="<?=$veri[0]->email?>" id="form-field-1-1" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Şehir</label>
                    <div class="controls">
                        <input type="text" name="sehir" value="<?=$veri[0]->sehir?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Telefon Numarası</label>
                    <div class="controls">
                        <input type="text" name="tel" value="<?=$veri[0]->tel?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Fax</label>
                    <div class="controls">
                        <input type="text" name="fax" value="<?=$veri[0]->fax?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Google Map X Koordinat</label>
                    <div class="controls">
                        <input type="text" name="fax" value="<?=$veri[0]->xkordinat?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Google Map Y Koordinat</label>
                    <div class="controls">
                        <input type="text" name="fax" value="<?=$veri[0]->ykordinat?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Facebook</label>
                    <div class="controls">
                        <input type="text" name="facebook" value="<?=$veri[0]->facebook?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Instagram</label>
                    <div class="controls">
                        <input type="text" name="instagram" value="<?=$veri[0]->instagram?>" id="form-field-1-1" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Twitter</label>
                    <div class="controls">
                        <input type="text" name="twitter" value="<?=$veri[0]->twitter?>" id="form-field-1-1" placeholder="" class="form-control">
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


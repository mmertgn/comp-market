<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?= base_url() ?>admin">Anasayfa</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Site Mail Bilgilerti</a></li>
</ul>
<h1>Site Mail Bilgileri</h1>
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
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Site Mail Bilgileri Düzenleme</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form action="<?= base_url()?>admin/mail/guncellekaydet/<?=$veri[0]->id?>" method="post" class="form-horizontal">
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">SMTP Server</label>
                    <div class="controls">
                        <input type="text" name="smtpserver" value="<?=$veri[0]->smtpserver?>" id="form-field-1-1" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2"> SMTP Port</label>
                    <div class="controls">
                        <input type="text" name="smtpport" value="<?=$veri[0]->smtpport?>" id="form-field-1-1" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">SMTP Mail</label>
                    <div class="controls">
                        <input type="text" name="smtpemail" value="<?=$veri[0]->smtpemail?>" id="form-field-1-1" class="form-control">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">SMTP Mail Password</label>
                    <div class="controls">
                        <input type="password" name="password" value="<?=$veri[0]->password?>" id="form-field-1-1" class="form-control">
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


<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?= base_url() ?>admin">Anasayfa</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <a href="<?=base_url()?>admin/urunler">Ürünler</a>
        </li>
        <li><a href="#">Ürün Resim Ekleme Formu</a></li>
    </ul>
<?php if($this->session->flashdata("sonuc")) {?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>İşlem: </strong><?= $this->session->flashdata("sonuc") ?>
    </div>
    <?php
}
?>
<h2><?=$resim[0]->adi?></h2>
    <div class="row-fluid sortable ui-sortable">
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Ürün Resim Ekleme Formu</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?= base_url()?>admin/urunler/resimuploads/<?=$resim[0]->id?>" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Dosya Giriş</label>
                            <div class="controls">
                                <div class="uploader" id="uniform-fileInput">
                                    <input class="input-file uniform_on" id="fileInput" type="file" name="userfile">
                                    <span class="filename" style="user-select: none;">Dosya Seçilmedi</span>
                                    <span class="action" style="user-select: none;">Dosya Seç</span></div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </fieldset>
                </form>


            </div>
        </div><!--/span-->
        <?php
        if($resim[0]->resim!=NULL)
        {?>
            <img class="img-thumbnail" src="<?=base_url()?>uploads/<?=$resim[0]->resim?>">
            <?php
        }
        ?>
    </div>

<?php
$this->load->view('admin/_footer');
?>
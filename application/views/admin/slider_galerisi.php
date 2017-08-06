<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?= base_url() ?>admin">Anasayfa</a>
        <i class="icon-angle-right"></i>
    </li>
    <li class="active">
        <a href="<?=base_url()?>admin/slider">Slider Resim Ekleme</a>
    </li>
</ul>
<?php if($this->session->flashdata("sonuc")) {?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>İşlem: </strong><?= $this->session->flashdata("sonuc") ?>
    </div>
    <?php
}
?>
<h1>Slider Yönetimi</h1>
<p style="margin-top: 30px">
    <a href="<?= base_url() ?>admin/slider/ekle"><button type="button" class="btn btn-primary">Yeni Slider Ekle</button></a></p>


<div class="row-fluid sortable ui-sortable">
    <div class="box span12">
        <div class="box-header" data-original-title="">
            <h2><i class="halflings-icon white picture"></i><span class="break"></span> Slider Listesi</h2>
            <div class="box-icon">
                <a href="#" id="toggle-fullscreen" class="hidden-phone hidden-tablet"><i class="halflings-icon white fullscreen"></i></a>
                <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="masonry-gallery masonry" style="position: relative; height: 943px;">
                <?php
                if($veriler!=NULL){
                foreach ($veriler as $rs) {
                    ?>
                    <div id="image-1" class="masonry-thumb masonry-brick" style="position: absolute; width: 245px; top: 0px; left: 0px;">
                        <p style="font-weight: bolder; color: red"><?= $rs->adi ?></p>
                        <img style="margin-top: 10px" class="img-responsive" src="<?= base_url().'slideruploads/'.$rs->resim ?>"/>
                        <a href="<?= base_url().'admin/slider/sil/'.$rs->id.'/'.$rs->resim ?>"><button type="button" class="btn btn-danger" style="margin: 10px">Sil</button></a>
                    </div>
                    <?php
                }
                }else {
                    ?>
                    <br><br><br><br><br>
                    <h1 style="text-align: center">Henüz Ekli Slider Bulunmamaktadır. Slider Eklemek İçin Yukarıdan Slider Ekleme Formu Butonuna Basınız...</h1>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
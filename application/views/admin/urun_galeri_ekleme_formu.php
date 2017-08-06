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
        <li class="active"><a href="#"> Resim Galerisi Ekleme</li></a>
    </ul>

    <h2><?=$urun[0]->adi?></h2>
    <div class="row-fluid sortable ui-sortable">
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Ürün Galerisi Oluşturma Formu</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?= base_url()?>admin/urunler/resim_galeri_uploads/<?=$urun[0]->id?>" method="post" enctype="multipart/form-data">
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
    </div>
    <?php if($this->session->flashdata("sonuc")) {?>
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>İşlem: </strong><?= $this->session->flashdata("sonuc") ?>
        </div>
        <?php
    }
    ?>
    <div class="row-fluid sortable ui-sortable">
    <div class="box span12">
        <div class="box-header" data-original-title="">
            <h2><i class="halflings-icon white picture"></i><span class="break"></span> Gallery</h2>
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
                foreach($veriler as $rs) {

                    ?>
                <div id="image-1" class="masonry-thumb masonry-brick" style="position: absolute; width: 245px; top: 0px; left: 0px;">
                    <a title="Sample Image 1" href="<?=base_url()?>galeriuploads/<?=$rs->resim?>">
                        <img class="grayscale" src="<?=base_url()?>galeriuploads/<?=$rs->resim?>" alt="Sample Image 1"></a>
                    <a href="<?=base_url()?>admin/urunler/resim_sil/<?=$urun[0]->id?>/<?=$rs->id?>/<?=$rs->resim?>"><button type="button" class="btn btn-danger" style="margin: 10px; ">Sil</button></a>
                </div>

                <?php
            }
            ?>
            </div>
        </div>
    </div>
    </div>

<?php
$this->load->view('admin/_footer');
?>
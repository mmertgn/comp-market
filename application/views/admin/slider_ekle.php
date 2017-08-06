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
            <a href="<?=base_url()?>admin/slider">Slider Resim Ekleme</a>

            <i class="icon-angle-right"></i>
        </li>
        <li class="active"><a href="<?= base_url().'admin/slider/ekle' ?>"> Slider Ekleme Formu</a></li>
    </ul>

    <h1>Yeni Slider Ekle</h1>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Slider Ekleme Formu</h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?= base_url()?>admin/slider/resim_slider_uploads" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Slider Başlığı </label>
                            <div class="controls">
                                <input type="text" class="span6" name="adi" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Slider Açıklaması </label> <div class="controls">
                                <input type="text" class="span6" name="aciklamasi" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Slider Resmi</label>
                            <div class="controls">
                                <div class="uploader" id="uniform-fileInput">
                                    <input class="input-file uniform_on" id="fileInput" type="file" name="userfile">
                                    <span class="filename" style="user-select: none;">Dosya Seçilmedi</span>
                                    <span class="action" style="user-select: none;">Dosya Seç</span></div>
                            </div>
                        </div>
                        <h3 style="text-align: center">Slider'a tıklanınca gidilmesi istenen yeri aşağıdakilerden bir tanesini seçerek kaydediniz...</h3>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Kategoriler </label>
                            <div class="controls">
                                <label>
                                    <select class="form-control" name="kategori_id">
                                        <option value="0">--Kategori Seçiniz--</option>
                                        <?php
                                        foreach ($kat as $rs) {
                                            ?>
                                            <option value="<?= $rs->id ?>"><?= $rs->kat_adi ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürünler </label>
                            <div class="controls">
                                <label>
                                    <select class="form-control states" name="urun_id">
                                        <option value="0">--Ürün Seçiniz--</option>
                                        <?php
                                        foreach ($urun as $rs) {
                                            ?>
                                            <option value="<?= $rs->id ?>"><?= $rs->adi ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Kaydet</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->

<?php
$this->load->view('admin/_footer');
?>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?= base_url() ?>admin">Anasayfa</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <a href="<?=base_url()?>admin/kampanya">Kampanyalar</a>
        <i class="icon-angle-right"></i>
    </li>
    <li class="active"><a href="#"> Kampanya Ekleme Formu</a></li>
</ul>

<h1>Yeni Kampanya Ekle</h1>
<br>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Kampanya Ekleme Formu</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?= base_url()?>admin/kampanya/resim_kampanya_uploads" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Kampanya Kısa Açıklama 1 </label>
                        <div class="controls">
                            <input type="text" class="span6" name="madde1" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Kampanya Kısa Açıklama 2 </label> <div class="controls">
                            <input type="text" class="span6" name="madde2" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Kampanya Kısa Açıklama 3 </label> <div class="controls">
                            <input type="text" class="span6" name="madde3" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Kampanya Kısa Açıklama 4 </label> <div class="controls">
                            <input type="text" class="span6" name="madde4" required>
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
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Kampanya Resmi</label>
                        <div class="controls">
                            <div class="uploader" id="uniform-fileInput">
                                <input class="input-file uniform_on" id="fileInput" type="file" name="userfile">
                                <span class="filename" style="user-select: none;">Dosya Seçilmedi</span>
                                <span class="action" style="user-select: none;">Dosya Seç</span></div>
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

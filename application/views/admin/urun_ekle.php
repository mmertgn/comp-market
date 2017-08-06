<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

    <h1>Yeni Ürün Ekle</h1>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Ürün Bilgileri</h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?= base_url()?>admin/urunler/eklekaydet" method="post">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Adı </label>
                            <div class="controls">
                                <input type="text" class="span6" name="adi" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Kategoriler </label>
                            <div class="controls">
                                <label>
                                    <select class="form-control countries" name="katId">
                                        <option value="">--Kategori Seçiniz--</option>
                                    </select>
                                </label>

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Alt Kategoriler </label>
                            <div class="controls">
                                <label>
                                    <select class="form-control states" name="altKatId">
                                        <option value="">--Alt Kategori Seçiniz--</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Stok Sayısı </label>
                            <div class="controls"> <input type="text" class="span6" name="miktar" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Eski Fiyatı </label> <div class="controls">
                                <input type="text" class="span6" name="e_fiyat" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Yeni Fiyatı </label> <div class="controls">
                                <input type="text" class="span6" name="y_fiyat" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Keywords </label> <div class="controls">
                                <input type="text" class="span6" name="keywords">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Kısa Açıklaması </label>
                            <div class="controls">
                                <textarea name="aciklama" class="form-control" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Uzun İçerik Açıklaması </label> <div class="controls">
                                <textarea name="uzunaciklama" id="detay"  class="form-control" rows="3" required></textarea>
                            </div>
                            <script>
                                CKEDITOR.replace('uzunaciklama');
                            </script>
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
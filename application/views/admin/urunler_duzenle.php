<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

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
                <form class="form-horizontal" action="<?= base_url()?>admin/urunler/guncellekaydet/<?=$urun[0]->id?>" method="post">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Adı </label>
                            <div class="controls">
                                <input type="text" value="<?=$urun[0]->adi?>" class="span6" name="adi" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Kategoriler </label>
                            <div class="controls">
                                <label>
                                    <select class="form-control countries" name="katId">
                                        <option value="<?=$urun[0]->katId?>"><?=$urun[0]->katAdi?></option>
                                    </select>
                                </label>

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Alt Kategoriler </label>
                            <div class="controls">
                                <label>
                                    <select class="form-control states" name="altKatId">
                                        <option value="<?=$urun[0]->altKatId?>"><?=$urun[0]->altKatAdi?></option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Stok Sayısı </label>
                            <div class="controls"> <input type="text" class="span6" value="<?=$urun[0]->miktar?>" name="miktar" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Eski Fiyatı </label> <div class="controls">
                                <input type="text" class="span6" name="e_fiyat" value="<?=$urun[0]->e_fiyat?>" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Yeni Fiyatı </label> <div class="controls">
                                <input type="text" class="span6" name="y_fiyat" value="<?=$urun[0]->y_fiyat?>" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Keywords </label>
                            <div class="controls">
                                <input type="text" class="span6" value="<?=$urun[0]->keywords?>" name="keywords">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Kısa Açıklaması </label>
                            <div class="controls">
                                <textarea name="aciklama" class="span6" rows="3" required><?=$urun[0]->aciklama?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Ürün Uzun İçerik Açıklaması </label> <div class="controls">
                                <textarea name="uzunaciklama" id="detay"  class="form-control" rows="3" required><?=$urun[0]->uzunaciklama?></textarea>
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
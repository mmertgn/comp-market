<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>


<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Yorum İçeriği</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?= base_url()?>admin/yorumlar/guncellekaydet/<?=$urun_yorumlari[0]->id?>" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Adı Soyadı </label>
                        <div class="controls">
                            <input type="text" class="span6" name="adsoy" value="<?=$urun_yorumlari[0]->adsoy?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Yorum İçerik </label>
                        <div class="controls">
                            <input type="text" class="span6" name="yorum_icerik" value="<?=$urun_yorumlari[0]->yorum_icerik?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Durum </label> <div class="controls">
                            <select class="form-control" name="durum" id="form-field-select-1">
                                <option value="<?=$urun_yorumlari[0]->durum?>"><?=$urun_yorumlari[0]->durum?></option>
                                <option value="Onaylı">Onaylı</option>
                                <option value="Engelli">Engelli</option>
                            </select>
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

<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

<h1>Yeni Kullanıcı Ekle</h1>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Kullanıcı Bilgileri</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?= base_url()?>admin/kullanicilar/eklekaydet" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Adı Soyadı </label>
                        <div class="controls">
                            <input type="text" class="span6" name="adsoy">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Email </label> <div class="controls">
                            <input type="text" class="span6" name="email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Adres </label>
                        <div class="controls">
                            <input type="text" class="span6" name="adres">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Şehir </label>
                        <div class="controls"> <input type="text" class="span6" name="sehir">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">İlçe </label> <div class="controls">
                            <input type="text" class="span6" name="ilce">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Posta Kodu </label> <div class="controls">
                            <input type="text" class="span6" name="postkod" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Cep Numarası </label> <div class="controls">
                            <input type="text" class="span6" name="tel">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Yetkisi </label>
                        <div class="controls">
                            <select class="form-control" name="yetki" id="form-field-select-1">
                                <option value="">Seçiniz</option>
                                <option value="Admin">Admin</option>
                                <option value="Üye">Üye</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Durum </label> <div class="controls">
                            <select class="form-control" name="durum" id="form-field-select-1">
                                <option value="">Seçiniz</option>
                                <option value="Onayli">Onayli</option>
                                <option value="Beklemede">Beklemede</option>
                                <option value="Durum">Engelli</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Şifre </label> <div class="controls">
                            <input type="password" class="span6" name="sifre">
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

<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>


<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Sipariş Bilgileri</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?= base_url()?>admin/siparis/guncellekaydet/<?=$siparis[0]->id?>" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Sipariş Veren Kullanıcı </label>
                        <div class="controls">
                            <select class="form-control" name="musteri_id" id="form-field-select-1">
                                <option value="<?=$siparis[0]->musteri_id?>"><?=$siparis[0]->musteri_adi?></option>
                                <?php
                                foreach ($kullanicilar as $rs) {
                                    if ($rs->id > 1 && $rs->adsoy!=$siparis[0]->musteri_adi ) {
                                        ?>
                                        <option value="<?= $rs->id ?>"><?= $rs->adsoy ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Adı Soyadı </label> <div class="controls">
                            <input type="text" class="span6" name="adsoy" value="<?=$siparis[0]->adsoy?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Adres </label>
                        <div class="controls">
                            <input type="text" class="span6" name="adres" value="<?=$siparis[0]->adres?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Şehir </label>
                        <div class="controls"> <input type="text" class="span6" name="sehir" value="<?=$siparis[0]->sehir?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">İlçe </label> <div class="controls">
                            <input type="text" class="span6" name="ilce" value="<?=$siparis[0]->ilce?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Posta Kodu </label> <div class="controls">
                            <input type="text" class="span6" name="postkod" value="<?=$siparis[0]->postkod?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Cep Numarası </label> <div class="controls">
                            <input type="text" class="span6" name="tel" value="<?=$siparis[0]->tel?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Toplam Tutar (TL) </label>
                        <div class="controls">
                            <input type="text" name="tutar" value="<?=$siparis[0]->tutar?>" id="form-field-1" placeholder="Toplam Tutar" class="span6">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Sipariş Durumu </label>
                        <div class="controls">
                            <select class="form-control" name="siparisdurumu" id="form-field-select-1">
                                <option value="<?=$siparis[0]->siparisdurumu?>"><?=$siparis[0]->siparisdurumu?></option>
                                <?php
                                if($siparis[0]->siparisdurumu == 'Onaylı') {
                                    ?>
                                    <option value="Beklemede">Beklemede</option>
                                    <?php
                                }
                                else {
                                    ?>
                                    <option value="Onaylı">Onaylı</option>
                                    <?php
                                }
                                ?>
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

<br><br>
<h1>Sipariş Verilen Ürünler</h1>
<br>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white briefcase"></i><span class="break"></span>Sipariş Verilen Ürünler</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable">
                <thead>
                <tr>
                    <th>Ürün Resmi</th>
                    <th class="sorting">Ürün Adı</th>
                    <th>Fiyatı</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($sip_urunler as $rs) {
                    ?>
                    <tr>
                        <td><img height="40" width="40" src="<?=base_url()?>uploads/<?=$rs->urunresmi?>"></td>
                        <td><?= $rs->urunadi ?></td>
                        <td><?= $rs->urunfiyati ?></td>
                        <td class="center">
                            <a class="btn btn-danger" href="<?= base_url() ?>admin/siparis/siparisurunsil/<?=$rs->id?>">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div><!--/span-->
</div><!--/row-->


<?php
$this->load->view('admin/_footer');
?>

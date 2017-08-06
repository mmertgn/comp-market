<h1>Yeni Alt Kategori Ekle</h1>
<br>
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Seçili Olan Kategori : <?= $kategoriler[0]->kat_adi ?></strong>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Alt Kategori Bilgileri</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?= base_url()?>admin/kategoriler/altkateklekaydet" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Alt Kategori Adı </label>
                        <div class="controls">
                            <input type="text" class="span6" name="adi">
                        </div>
                    </div>
                    <input type="hidden" value="<?= $kategoriler[0]->id ?>" name="kat_id"">
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="submit" value="Submit">Kaydet</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div><!--/row-->

<?php if($this->session->flashdata("sonuc")) {?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>İşlem: </strong><?= $this->session->flashdata("sonuc") ?>
    </div>
    <?php
}
?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white briefcase"></i><span class="break"></span>Alt Kategoriler Listesi</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <?php
            if($altkatsayi>0) {
                ?>
                <table class="table table-striped table-bordered bootstrap-datatable">
                    <thead>
                    <tr>
                        <th>Alt Kategori Adı</th>
                        <th>Üst Kategori Adı</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <?php
                    foreach ($altkat

                    as $rs) {
                    ?>
                    <tbody>
                    <tr>
                        <td><?= $rs->adi ?></td>
                        <td><?= $kategoriler[0]->kat_adi ?></td>
                        <td class="center">
                            <a class="btn btn-danger" title="Sil"
                               href="<?= base_url() ?>admin/kategoriler/altkatdelete/<?= $rs->id ?>/<?= $rs->kat_id ?>">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
                <?php
            }
            else{?>
                <p class="alert-danger bolder">Alt Kategori Bulunmamaktadır. Eklemek için Yukarıdan Formu Doldurunuz...</p>
                <?php
            }
            ?>
        </div>
    </div><!--/span-->
</div><!--/row-->

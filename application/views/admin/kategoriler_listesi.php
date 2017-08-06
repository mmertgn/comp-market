<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?= base_url() ?>admin">Anasayfa</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Kategori Yönetimi</a></li>
</ul>
<h1>Kategori Yönetimi</h1>
<?php if($this->session->flashdata("sonuc")) {?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>İşlem: </strong><?= $this->session->flashdata("sonuc") ?>
    </div>
    <?php
}
?>

<p style="margin-top: 30px">
    <a href="<?= base_url() ?>admin/kategoriler/ekle"><button type="button" class="btn btn-primary">Yeni Kategori Ekle</button></a></p>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white briefcase"></i><span class="break"></span>Kategoriler Listesi</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable">
                <thead>
                <tr>
                    <th>Kategori Adı</th>
                    <th>Keywords</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($kategoriler as $rs) {
                    ?>
                    <tr>
                        <td><?= $rs->kat_adi ?></td>
                        <td class="center"><?= $rs->kat_keywords ?></td>
                        <td class="center">
                            <a href="<?= base_url() ?>admin/kategoriler/altkatekle/<?=$rs->id?>" class="btn btn-warning">Alt Kategori Ekle</a>
                            <a class="btn btn-info" title="Duzenle" href="<?= base_url() ?>admin/kategoriler/edit/<?=$rs->id?>">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" title="Sil" href="<?= base_url() ?>admin/kategoriler/delete/<?=$rs->id?>">
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


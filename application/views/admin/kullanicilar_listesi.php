<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?= base_url() ?>admin">Anasayfa</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Kullanıcı Yönetimi</a></li>
</ul>
<h1>Kullanıcı Yönetimi</h1>
<br>
<?php if($this->session->flashdata("sonuc")) {?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>İşlem: </strong><?= $this->session->flashdata("sonuc") ?>
    </div>
    <?php
}
?>

<p style="margin-top: 30px">
    <a href="<?= base_url() ?>admin/kullanicilar/ekle"><button type="button" class="btn btn-primary">Yeni Kullanıcı Ekle</button></a></p>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white briefcase"></i><span class="break"></span>Kullanıcı Listesi</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable">
                <thead>
                <tr>
                    <th>Adı Soyadı</th>
                    <th>Email</th>
                    <th>Yetki</th>
                    <th>Üyelik Tarihi</th>
                    <th>Durum</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($kullanicilar as $rs) {
                    ?>
                    <tr>
                        <td><?= $rs->adsoy ?></td>
                        <td><?= $rs->email ?></td>
                        <td class="center"><?= $rs->yetki ?></td>
                        <td class="center"><?= $rs->tarih ?></td>
                        <td><?= $rs->durum ?></td>
                        <td class="center">
                            <a class="btn btn-info" href="<?= base_url() ?>admin/kullanicilar/edit/<?=$rs->id?>">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="<?= base_url() ?>admin/kullanicilar/delete/<?=$rs->id?>">
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


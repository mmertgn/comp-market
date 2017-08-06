<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?= base_url() ?>admin">Anasayfa</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Mesaj Yönetimi</a></li>
</ul>
<h1>Mesaj Yönetimi</h1>
<br>
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
            <h2><i class="halflings-icon white briefcase"></i><span class="break"></span>Mesaj Listesi</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable">
                <thead>
                <tr>
                    <th></th>
                    <th>Durum</th>
                    <th>Gönderen Adı Soyadı</th>
                    <th>Email</th>
                    <th>Tarih</th>
                    <th>Konu</th>
                    <th>Mesaj</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($mesaj as $rs) {
                    $durum="Okunmamış İleti";
                    $icon = "<i class=\"icon-envelope-alt\" style=\"color: orange;\"></i>";
                    if($rs->durum==1){
                        $durum="Okundu";
                        $icon = "<i class=\"icon-envelope\"></i>";
                    }
                    ?>
                    <tr>
                        <td><?= $icon ?></td>
                        <td><?= $durum ?></td>
                        <td><?= $rs->adsoy ?></td>
                        <td><?= $rs->email ?></td>
                        <td><?= $rs->tarih ?></td>
                        <td class="center"><?= $rs->konu ?></td>
                        <td class="center"><?= $rs->mesaj ?></td>
                        <td class="center">
                            <a class="btn btn-info" href="<?= base_url() ?>admin/mesaj/preview/<?= $rs->id ?>">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="<?= base_url() ?>admin/mesaj/delete/<?= $rs->id ?>">
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


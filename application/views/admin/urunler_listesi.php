<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?= base_url() ?>admin">Anasayfa</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Ürün Yönetimi</a></li>
</ul>
<h1>Kullanıcı Yönetimi</h1>
<?php if($this->session->flashdata("sonuc")) {?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>İşlem: </strong><?= $this->session->flashdata("sonuc") ?>
    </div>
    <?php
}
?>

<p style="margin-top: 30px">
    <a href="<?= base_url() ?>admin/urunler/ekle"><button type="button" class="btn btn-primary">Yeni Ürün Ekle</button></a></p>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white briefcase"></i><span class="break"></span>Ürün Listesi</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable">
                <thead>
                <tr>
                    <th>Ürün Adı</th>
                    <th>Kategorisi</th>
                    <th>Alt Kategorisi</th>
                    <th>Satış Fiyatı</th>
                    <th>Ürün Stok</th>
                    <th>Resim</th>
                    <th>Galeri</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($urunler as $rs) {
                    ?>
                    <tr>
                        <td><?= $rs->adi ?></td>
                        <td><?= $rs->katAdi ?></td>
                        <td class="center"><?= $rs->altKatAdi ?></td>
                        <td class="center"><?= $rs->y_fiyat ?></td>
                        <td class="center"><?= $rs->miktar ?></td>
                        <td> <a href="<?=base_url()?>admin/urunler/resimekle/<?=$rs->id?>">
                                <?php
                                if( $rs->resim==NULL)
                                {?>
                                    <span class="label label-sm label-warning">Resim Ekle</span>
                                    <?php
                                }
                                else
                                {?>
                                    <img height="40" width="40" src="<?=base_url()?>uploads/<?=$rs->resim?>">
                                    <?php
                                }
                                ?>
                            </a>
                        </td>
                        <td>
                            <a href="<?=base_url()?>admin/urunler/resim_galeri_ekle/<?=$rs->id?>">
                                <img src="<?=base_url()?>assets/admin/images/galeri.png" style="max-height: 35px;"> </a>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="<?= base_url() ?>home/urun_detayi/edit/<?=$rs->id?>">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="<?= base_url() ?>admin/urunler/edit/<?=$rs->id?>">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="<?= base_url() ?>admin/urunler/delete/<?=$rs->id?>">
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


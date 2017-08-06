<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?= base_url() ?>admin">Anasayfa</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Kampanya Yönetimi</a></li>
</ul>
<h1>Kampanya Yönetimi</h1>
<?php if($this->session->flashdata("sonuc")) {?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>İşlem: </strong><?= $this->session->flashdata("sonuc") ?>
    </div>
    <?php
}
?>

<p style="margin-top: 30px">
    <a href="<?=base_url()?>admin/kampanya/ekle"><button type="button" class="btn btn-primary">Kampanyalı Ürün Ekle</button></a>
    <a href="<?=base_url()?>admin/kampanya/firsatekle"><button type="button" class="btn btn-primary">Günün Fırsatı Ekle</button></a>
</p>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white briefcase"></i><span class="break"></span>Ürün Kampanyaları</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable">
                <thead>
                <tr>
                    <th>Kampanya Resmi</th>
                    <th>Ürün Adı</th>
                    <th>Fiyat</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($kampanya as $rs) {
                    ?>
                    <tr>
                        <td><?php
                            if( $rs->firsat_resmi==NULL)
                            {?>
                                <i class="ace-icon fa fa-battery-empty bigger-130"></i>
                                <?php
                            }
                            else
                            {?>
                                <img height="30" src="<?=base_url()?>kampanyauploads/<?=$rs->firsat_resmi?>">
                                <?php
                            }
                            ?></td>
                        <td><?= $rs->urunadi ?></td>
                        <td><?= $rs->y_fiyat ?></td>
                        <td class="center">
                            <a class="btn btn-danger" title="Sil" href="<?=base_url()?>admin/kampanya/sil/<?=$rs->id?>/<?= $rs->firsat_resmi ?>">
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

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white briefcase"></i><span class="break"></span>Günün Fırsatları</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable">
                <thead>
                <tr>
                    <th class="sorting">Ürün Adı</th>
                    <th>Fiyat</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($firsat as $rs) {
                    ?>
                    <tr>
                        <td><?= $rs->urunadi ?></td>
                        <td><?= $rs->y_fiyat ?></td>
                        <td class="center">
                            <a class="btn btn-danger" title="Sil" href="<?=base_url()?>admin/kampanya/firsatsil/<?=$rs->id?>">
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
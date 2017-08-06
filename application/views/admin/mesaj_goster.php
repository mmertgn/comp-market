<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Mesaj Detayları</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable">
                <tbody>
                <tr>
                    <td style="font-weight: bold;">Göderilme Tarihi</td><td><?=$mesaj[0]->tarih?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Adı Soyadı</td><td><?=$mesaj[0]->adsoy?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Email</td><td><?=$mesaj[0]->email?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Konu</td><td><?= $mesaj[0]->konu ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; vertical-align: top;">Mesaj</td>
                    <td style="vertical-align: top;"><?= nl2br($mesaj[0]->mesaj) ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <?php
    $this->load->view('admin/_footer');
    ?>

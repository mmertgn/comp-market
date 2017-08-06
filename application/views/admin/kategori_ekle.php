<h1>Yeni Kategori Ekle</h1>
<br>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white edit"></i><span class="break"></span>Kategori Bilgileri</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?= base_url()?>admin/kategoriler/eklekaydet" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Kategori Adı </label>
                        <div class="controls">
                            <input type="text" class="span6" name="kat_adi">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Kategori Açıklaması </label> <div class="controls">
                            <input type="text" class="span6" name="kat_aciklama">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Kategori Keywords </label>
                        <div class="controls">
                            <input type="text" class="span6" name="kat_keywords">
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
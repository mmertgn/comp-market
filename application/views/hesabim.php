<!--slider area start-->
<div class="new_slide_mix_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sl_new_contnt">
                    <div class="sl_heading">
                        <h2>HESABIM</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--inner area start-->
<section class="new_inner_area">
    <div class="container">
        <?php if($this->session->flashdata("guncel")) {
            ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                <strong>İşlem Başarılı!</strong> Profil Bilgileriniz Başarıyla Güncellendi.
            </div>
            <?php
        }
        ?>
        <form action="<?= base_url() ?>home/profilguncelle/<?= $kullanici[0]->id ?>" method="post" class="form-horizontal">
            <fieldset>
                <!-- Form Name -->
                <legend>Hesabım -> Kişisel Bilgilerim</legend>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Ad Soyad</label>
                    <div class="col-md-4">
                        <input id="textinput" name="adsoy" type="text" placeholder="Ad Soyad" class="form-control input-md" value="<?= $kullanici[0]->adsoy ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Şehir</label>
                    <div class="col-md-4">
                        <input id="textinput" name="sehir" type="text" placeholder="Şehir" class="form-control input-md" value="<?= $kullanici[0]->sehir ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">İlçe</label>
                    <div class="col-md-4">
                        <input id="textinput" name="ilce" type="text" placeholder="İlçe" class="form-control input-md" value="<?= $kullanici[0]->ilce?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Posta Kodu</label>
                    <div class="col-md-4">
                        <input id="textinput" name="postkod" type="text" placeholder="Posta Kodu" class="form-control input-md" value="<?= $kullanici[0]->postkod ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Telefon</label>
                    <div class="col-md-4">
                        <input id="textinput" name="tel" type="text" placeholder="Telefon" class="form-control input-md" value="<?= $kullanici[0]->tel ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Email</label>
                    <div class="col-md-4">
                        <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md" value="<?= $kullanici[0]->email ?>">
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="passwordinput">Şifre</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="sifre" type="password" placeholder="Şifre" class="form-control input-md" required>

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="passwordinput">Şifre Tekrar</label>
                    <div class="col-md-4">
                        <input id="passwordinput2" name="sifre2" type="password" placeholder="Şifre Tekrar" class="form-control input-md">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Adres</label>
                    <div class="col-md-4">
                        <textarea class="form-control input-md" name="adres" placeholder="Adres..."><?= $kullanici[0]->adres ?></textarea>

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-8">
                        <button class="btn btn-success" type="submit" value="register">Kaydet</button>
                        <button class="btn btn-danger" type="reset">Temizle</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
    <script type="text/javascript">
        var password = document.getElementById("passwordinput")
            , confirm_password = document.getElementById("passwordinput2");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Girilen şifreler eşleşmemektedir.");
            } else {
                confirm_password.setCustomValidity('');
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</section>
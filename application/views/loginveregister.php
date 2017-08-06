<!-- shop area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop_menu shop_menu_tk ">
                    <ul class="cramb_area cramb_area_2 cramb_area_ktp">
                        <li><a href="<?= base_url() ?>">Anasayfa /</a></li>
                        <li>Üye Girişi - Kayıt Ol</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop area end-->
<!--my account area start-->
<div class="my_account_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="all_cntnt">
                    <div class="frm_content">
                        <h2>Kullanıcı Girişi</h2>
                        <?php if($this->session->flashdata("sonuc")) {
                            ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>Üzgünüm!</strong> Hatalı Kullanıcı Adı yada Şifre.
                            </div>
                            <?php
                        }
                        ?>

                        <?php if($this->session->flashdata("sepet")) {
                            ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>Üzgünüm!</strong> Sepete Eklemek İçin Önce Giriş Yapmalısınız.
                            </div>
                            <?php
                        }
                        ?>

                        <?php if($this->session->flashdata("sifirlandi")) {
                            ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>İşlem Başarılı!</strong> Şifre Sıfırlama işlemi başarıyla gerçekleştirildi. Yeni şifreniz ile giriş yapabilirsiniz.
                            </div>
                            <?php
                        }
                        ?>

                        <?php if($this->session->flashdata("sifirlanamadi")) {
                            ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>Üzgünüm!</strong> Şifre Sıfırlama işlemi gerçekleştirilemedi. Girdiğiniz şifrelerin aynı olduğundan emin olun...
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <form action="<?= base_url() ?>home/giris" method="post">
                        <div class="al_form-fields">
                            <p>
                                <label>
                                    Email Adresiniz
                                    <span class="required">*</span>
                                </label>
                                <input type="text" name="email" placeholder="Email Adresiniz">
                            </p>
                            <p>
                                <label>
                                    Şifre
                                    <span class="required">*</span>
                                </label>
                                <input type="password" name="sifre" placeholder="Şifre">
                            </p>
                        </div>
                        <div class="form-action">
                            <div class="new_act new_act_3">
                                <button type="submit" class="button_act button_act_3">Giriş</button>
                                <label>
                                    <input type="checkbox">
                                    Beni Hatırla
                                </label>
                            </div>
                            <p class="lost_password">
                                <a href="<?= base_url() ?>home/sifremiunuttum">Şifremi Unuttum</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="all_cntnt">
                    <div class="frm_content">
                        <h2>Yeni Üye</h2>
                        <?php if($this->session->flashdata("kayıt")) {
                            ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong><?= $this->session->flashdata("kayıt") ?></strong>.
                            </div>
                            <?php
                        }
                        ?>
                        <?php if($this->session->flashdata("kayıtb")) {
                            ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>Üzgünüm!</strong> <?= $this->session->flashdata("kayıtb") ?>.
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <form action="<?= base_url() ?>home/kayitol" method="post">
                        <div class="al_form-fields">
                            <p>
                                <label>Adınız ve Soyadınız<span class="required">*</span></label>
                                <input type="text" name="adsoy" placeholder="Adınız ve Soyadınız">
                            </p>
                            <p>
                                <label>Şehir<span class="required">*</span></label>
                                <input type="text" name="sehir" placeholder="Şehir...">
                            </p>
                            <p>
                                <label>İlçe<span class="required">*</span></label>
                                <input type="text" name="ilce" placeholder="İlçe...">
                            </p>
                            <p>
                                <label>Adres<span class="required">*</span></label>
                                <input type="text" name="adres" placeholder="Adres...">
                            </p>
                            <p>
                                <label>Telefon<span class="required">*</span></label>
                                <input type="text" name="tel"  placeholder="Telefon...">
                            </p>
                            <p>
                                <label>Posta Kodu<span class="required">*</span></label>
                                <input type="text" name="postkod"  placeholder="Posta Kodu...">
                            </p>
                            <p>
                                <label>Email<span class="required">*</span></label>
                                <input type="text" name="email"  placeholder="Email Adresi...">
                            </p>
                            <p>
                                <label>Şifre<span class="required">*</span></label>
                                <input type="password" name="sifre"  placeholder="Şifre">
                            </p>
                        </div>
                        <div class="form-action">
                            <div class="new_act new_act_3">
                                <button class="button_act button_act_3">Üye Ol</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--my account area end-->
<br><br><br>
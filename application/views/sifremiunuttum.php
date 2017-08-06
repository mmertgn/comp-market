<!-- shop area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop_menu">
                    <ul class="cramb_area cramb_area_2 ">
                        <li><a href="<?= base_url() ?>">Anasayfa / </a></li>
                        <li><a href="#">Şifremi Unuttum</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start page content -->
<div id="page-content" class="page-wrapper">

    <!-- LOGIN SECTION START -->
    <div class="login-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3">
                    <div class="registered-customers">
                        <h3>Şifremi Unuttum</h3>
                        <?php if($this->session->flashdata("sifirla")) {
                            ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>İşlem Başarılı!</strong> Şifre Sıfırlama Linkiniz Mail Adresinize Gönderilmiştir.
                            </div>
                            <?php
                        }
                        ?>
                        <?php if($this->session->flashdata("email_sent")) {
                            ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                <strong>Üzgünüm!</strong> Email göderilirken bir hata oluşmuştur.
                            </div>
                            <?php
                        }
                        ?>
                        <form action="<?= base_url() ?>home/sifirlaislem" method="post">
                            <div class="checkout-form-list">
                                <p>Aşağıdaki alana <strong>Email Adresinizi</strong>  giriniz. Şifre sıfırlama linki mail adresinize gönderilecektir.</p>
                                <input type="text" name="email" placeholder="Email Adresiniz">
                            </div>
                            <div class="checkout-form-list">
                                <button class="btn btn-danger" type="submit">Şifre Sıfırla</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->

</div>
<br><br>
<!-- End page content -->
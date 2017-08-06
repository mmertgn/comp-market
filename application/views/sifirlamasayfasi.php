<!-- shop area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop_menu">
                    <ul class="cramb_area cramb_area_2 ">
                        <li><a href="<?= base_url() ?>">Anasayfa / </a></li>
                        <li><a href="#">Şifremi Unuttum / </a></li>
                        <li><a href="#">Şifre Sıfırlama Sayfası</a></li>
                    </ul>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->
hr
<!-- Start page content -->
<div id="page-content" class="page-wrapper">

    <!-- LOGIN SECTION START -->
    <div class="login-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3">
                    <div class="registered-customers">
                        <h3>Şifre Sıfırla</h3>
                        <form action="<?= base_url() ?>home/sifirlandi/<?= $asd[0]->id ?>" method="post">
                            <div class="checkout-form-list">
                                <p>Aşağıdaki alana <strong>Yeni Şifrenizi</strong>  giriniz.</p>
                                <input type="password" name="sifre" placeholder="Yeni Şifreniz" required>
                            </div>
                            <div class="checkout-form-list">
                                <input type="password" name="sifre2" placeholder="Yeni Şifreniz Tekrar" required>
                            </div>
                            <div class="checkout-form-list">
                                <button class="btn btn-success" type="submit">Giriş</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->

</div>
<!-- End page content -->
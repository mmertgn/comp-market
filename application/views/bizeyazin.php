<!-- comnt_area start -->
<div class="comnt_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="all_cntnt">
                    <div class="frm_content frm_content_2">
                        <h2 style="font-weight: bold">Bize Ulaşın</h2>
                    </div>
                    <form class="side_right" action="<?= base_url() ?>bizeulasin/gonder" method="post">
                        <div class="al_form-fields al_form-fields-2">
                            <p>
                                Adınız Soyadınız
                                <input type="text" name="adsoy" placeholder="Adınız">
                            </p>
                            <p>
                                Mail Adresiniz
                                <input type="text" name="email" placeholder="Mail Adresiniz">
                            </p>
                            <p>
                                Başlık
                                <input type="text" name="konu" placeholder="Konu">
                            </p>
                            <p>
                                Telefon
                                <input type="text" name="tel" placeholder="Telefon Numaranız">
                            </p>
                            <p>
                                Mesaj
                                <br>
                                <span class="wpcf7-form-control-wrap your-message">
                                        <textarea class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-invalid="false" aria-required="true" rows="10" cols="40" name="mesaj"></textarea>
                                        </span>
                            </p>
                            <p>* Gerekli Alanlar</p>
                        </div>
                        <div class="form-action form-action-2">
                            <div class="new_act new_act_3">
                                <button class="button_act button_act_3" type="submit">Mesajı Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="all_cntnt">
                    <div class="frm_content frm_content_2">
                        <h2 style="font-weight: bold">İletişim Bilgileri</h2>
                        <h2>Adres</h2>
                        <p><?= $ayar[0]->adres ?></p>
                        <p><?= $ayar[0]->sehir ?></p>
                        <h2>Email</h2>
                        <p><?= $ayar[0]->email ?></p>
                        <h2>Telefon</h2>
                        <p>Telefon: <?= $ayar[0]->tel ?></p>
                        <h2>Fax</h2>
                        <p><?= $ayar[0]->fax ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
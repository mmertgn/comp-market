
<div class="comnt_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="all_cntnt">
                    <div class="frm_content frm_content_2">
                        <h1 style="text-align: center; font-weight: bold">İletişim Bilgileri</h1>
                        <br>
                        <div class="col-md-3">
                            <h2 style="font-weight: bold">Adres</h2>
                            <p><?= $ayar[0]->adres ?></p>
                            <p>İl:<?= $ayar[0]->sehir ?></p>
                        </div>
                        <div class="col-md-3">
                            <h2 style="font-weight: bold">Email</h2>
                            <p><?= $ayar[0]->email ?></p>
                        </div>
                        <div class="col-md-3">
                                <h2 style="font-weight: bold">Telefon</h2>
                                <p>Telefon: <?= $ayar[0]->tel ?></p>
                        </div>
                        <div class="col-md-3">
                            <h2 style="font-weight: bold">Fax</h2>
                            <p><?= $ayar[0]->fax ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- googleMap-area-start -->
<div id="googleMap" ></div>
<!-- googleMap-end -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvXMFNBcdPRzlmXPIwkNa6zqzFyW9bs4" type="text/javascript"></script>
<script type="text/javascript">
    /* Google Map js */
    function initialize() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(<?= $ayar[0]->xkordinat ?>, <?= $ayar[0]->ykordinat ?>)
        };

        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);

        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'img/contact-us/map.png',
            map: map
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
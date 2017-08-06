</div><!--/.fluid-container-->
<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <ul class="list-inline item-details">
            <li><a href="http://themifycloud.com">Admin templates</a></li>
            <li><a href="http://themescloud.org">Bootstrap themes</a></li>
        </ul>
    </div>
</div>

<div class="clearfix"></div>
<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>

    </p>

</footer>

<!-- start: JavaScript-->

<script src="<?= base_url() ?>admintemp/js/jquery-1.9.1.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery-migrate-1.0.0.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery-ui-1.10.0.custom.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.ui.touch-punch.js"></script>
<script src="<?= base_url() ?>admintemp/js/modernizr.js"></script>
<script src="<?= base_url() ?>admintemp/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.cookie.js"></script>
<script src="<?= base_url() ?>admintemp/js/fullcalendar.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/excanvas.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.flot.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.flot.pie.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.flot.stack.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.flot.resize.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.chosen.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.uniform.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.cleditor.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.noty.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.elfinder.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.raty.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.iphone.toggle.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.uploadify-3.1.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.gritter.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.imagesloaded.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.masonry.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.knob.modified.js"></script>
<script src="<?= base_url() ?>admintemp/js/jquery.sparkline.min.js"></script>
<script src="<?= base_url() ?>admintemp/js/counter.js"></script>
<script src="<?= base_url() ?>admintemp/js/retina.js"></script>
<script src="<?= base_url() ?>admintemp/js/custom.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        /*Get the country list */

        $.ajax({
            type: "GET",
            url: "<?php echo base_url();?>admin/urunler/get_countries",
            data:{id:$(this).val()},
            beforeSend :function(){
                $('.countries').find("option:eq(0)").html("Lütfen Bekleyiniz..");
            },
            success: function (data) {
                /*get response as json */
                $('.countries').find("option:eq(0)").html("Kategori Seçiniz");
                var obj=jQuery.parseJSON(data);
                $(obj).each(function()
                {
                    var option = $('<option />');
                    option.attr('value', this.value).text(this.label);
                    $('.countries').append(option);
                });

                /*ends */

            }
        });



        /*Get the state list */


        $('.countries').change(function(){
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>admin/urunler/get_states",
                data:{id:$(this).val()},
                beforeSend :function(){
                    $(".states option:gt(0)").remove();
                    $('.states').find("option:eq(0)").html("Lütfen Bekleyiniz..");

                },
                success: function (data) {
                    /*get response as json */
                    $('.states').find("option:eq(0)").html("Alt Kategori Seçiniz");
                    var obj=jQuery.parseJSON(data);
                    $(obj).each(function()
                    {
                        var option = $('<option />');
                        option.attr('value', this.value).text(this.label);
                        $('.states').append(option);
                    });

                    /*ends */

                }
            });
        });
    });
</script>
<!-- end: JavaScript-->

</body>
</html>
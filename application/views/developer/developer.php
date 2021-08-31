<!-- Css (private use only) -->

<!-- Js (private use only) -->

<style type="text/css">
    .gradient {
        background: -webkit-linear-gradient(#e040fb, #e57373);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>

<div class="container-fluid mt-5 pt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-4 pr-lg-0">
            <div class="card shadow-sm mb-3">
                <div class="card-body text-muted">
                    <div class="h1 gradient text-center">Cortex<span class="font-weight-light">UI</span></div>
                    <hr>
                    <p><i class="material-icons mr-2" style="opacity: 0.5;">web</i>PHP <?php echo phpversion(); ?></p>
                    <p><i class="material-icons mr-2" style="opacity: 0.5;">local_fire_department</i>CodeIgniter <?php echo CI_VERSION; ?></p>
                    <p><i class="material-icons mr-2" style="opacity: 0.5;">format_bold</i>Bootstrap <span id="bsver"></span></p>
                    <hr>
                    <div class="small text-center">Ranggi Rahman @2021</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	$('#bsver').html($.fn.tooltip.Constructor.VERSION);
</script>
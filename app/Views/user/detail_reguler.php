<?= $this->extend('layoutuser/template'); ?>
<?= $this->section('content'); ?>

<!-- ==================================== -->


<div class="container">
    <div class="section-header-form">
        <h2>Detail Reguler Room</h2>
        <p>Reguler room merupakan tipe kamar terbawah yang ada di hotel.</p>
        <hr>
    </div>


    <!-- ====================================================== -->
    <div class="card shadow-lg border-0 rounded-lg mb-5">
        <div class="card-body">
            <div class="img-content d-flex justify-content-center mb-5">
                <img src="<?= base_url('assets/img/reguler_room.jpg'); ?>" alt="" width="650px" height="300px">
            </div>
            <div class="row g-3 m-5 mb-3">

                <div class="col-md-4">
                    <div class="item">
                        <h3>IDR 350.000</h3>
                        <a href="<?= base_url('/detail/reguler-room/form-booking'); ?>" class="btn btn-lg btn-success">ORDER NOW</a>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-md-8">
                    <div class="item">
                        <h3>Room Description</h3>
                        <p>Reguler room merupakan tipe kamar terbawah yang ada di hotel. Terdapat fasilitas 1 single bed saja dengan fasilitas standar seperti TV, AC, Toilet teries, kopi, dan teh.</p>
                        <b class="d-inline">Type: </b>
                        <p class="d-inline"> Single</p>
                        <br>
                        <b class="d-inline">Size: </b>
                        <p class="d-inline"> 20 m2</p>
                        <br>
                        <b class="d-inline">Capacity: </b>
                        <p class="d-inline"> 1 people</p>
                    </div>
                </div><!-- End Service Item -->

            </div>
        </div>

    </div>


</div>


<?= $this->endSection(); ?>
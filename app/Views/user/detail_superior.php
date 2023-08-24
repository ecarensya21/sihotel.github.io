<?= $this->extend('layoutuser/template'); ?>
<?= $this->section('content'); ?>

<!-- ==================================== -->


<div class="container">
    <div class="section-header-form">
        <h2>Detail Superior Room</h2>
        <p>Superior room merupakan kamar yang memiliki tempat tidur besar (King Size) yang nyaman serta kamar mandi.</p>
        <hr>
    </div>

    <!-- ====================================================== -->
    <div class="card shadow-lg border-0 rounded-lg mb-5">
        <div class="card-body">
            <div class="img-content d-flex justify-content-center mb-5">
                <img src="<?= base_url('assets/img/superior_room.jpg'); ?>" alt="" width="650px" height="300px">
            </div>
            <div class="row mb-3">

                <div class="col-md-4">
                    <div class="item">
                        <h3>IDR 1000.000</h3>
                        <a href="<?= base_url('/detail/superior-room/form-booking'); ?>" class="btn btn-lg btn-success">ORDER NOW</a>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-md-8">
                    <div class="item">
                        <h3>Room Description</h3>
                        <p> Superior room menawarkan ukuran ruangan yang lebih luas dari standar room. Urusan fasilitas layanan dan perlengkapan menginap superior hampir sama dengan standar room.</p>
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
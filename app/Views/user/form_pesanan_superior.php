<?= $this->extend('layoutuser/template'); ?>
<?= $this->section('content'); ?>
<!---------------------------FORM--------------------------- -->
<div class="container">
    <div class="section-header-form">
        <h2>Form Pemesanan Superior Room</h2>
        <hr>
    </div>

    <!-- ===================================== -->
    <div id="flash" data-flash="<?= session('success'); ?>"></div>

    <!-- ===================================== -->
    <div class="card shadow-lg border-0 rounded-lg mb-5">
        <div class="card-body">

            <div class="row g-3 m-5">
                <div class="col-md-8">
                    <img src="<?= base_url('assets/img/superior_room.jpg'); ?>" alt="" width="520px" height="250px">
                </div>
                <div class="col-md-4 mb-5">
                    <h3>Room Description</h3>
                    <h4 class="text-primary">IDR 1000.000</h4>
                    <p>Reguler room merupakan tipe kamar terbawah yang ada di hotel. Terdapat fasilitas 1 single bed saja dengan fasilitas standar seperti TV, AC, Toilet teries, kopi, dan teh.</p>

                </div>
            </div>
            <form class="row g-3 m-5" action="<?= base_url('/detail/superior-room/form-booking/save'); ?>" method="post">
                <?= csrf_field(); ?>
                <h3>Data Pemesanan</h3>
                <hr>
                <div class="col-md-6">
                    <label class="mb-3 " for="nama"><b>Nama Tamu :</b></label>
                    <p><?php echo $datapemohon['nama_tamu']; ?></p>
                </div>
                <div class="col-md-6">

                    <label class="mb-3 " for="nik"><b>Nomor Telepon :</b></label>
                    <p><?php echo $datapemohon['no_hp']; ?></p>
                </div>
                <div class="col-md-12">
                    <label class="mb-3" for="jumlah_pesan"><b>Jumlah Pesan Kamar: <span class="text-danger">*</span></b></label>
                    <input type="text" value="<?= old('jumlah_pesan'); ?>" class="form-control <?= session('errors.jumlah_pesan') ? 'is-invalid' : ''; ?>" name="jumlah_pesan" id="jumlah_pesan">
                    <?php if (session('errors.jumlah_pesan')) : ?>
                        <div class="invalid-feedback">
                            <?= session('errors.jumlah_pesan'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <label class="mb-3" for="jumlah_pesan"><b>Check In: <span class="text-danger">*</span></b></label>
                    <input type="date" name="check_in" id="check_in" class="form-control" required>

                </div>
                <div class="col-md-6">
                    <label class="mb-3" for="jumlah_pesan"><b>Check Out: <span class="text-danger">*</span></b></label>
                    <input type="date" name="check_out" id="check_out" class="form-control" required>

                </div>

                <div class="col-md-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mx-2">
                        <i class="fa-solid fa-upload"></i> Pesan
                    </button>

                </div>



                <!-- Ini adalah akhir dari row button -->
            </form>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>
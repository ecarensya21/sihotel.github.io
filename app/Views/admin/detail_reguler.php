<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('content'); ?>




<div class="container-fluid px-4">
    <h1 class="mt-4">Transaksi Reguler</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('/dashboard-admin'); ?>">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="<?= base_url('//data-transaksi-reguler'); ?>">Transaksi Reguler</a></li>
        <li class="breadcrumb-item active">Detail Data Reguler</li>
    </ol>

    <!-- ----------------------------------------------------- -->
    <div id="flash" data-flash="<?= session('success'); ?>"></div>

    <!-- ----------------------------------------------------- -->

    <div class="card mb-4">

        <div class="card-body">
            <!-- datapemohon -->
            <section class="data mb-5">
                <div class="data-permohonan-akta-kelahiran">


                    <div class="judul-halaman my-5">
                        <h4>
                            <i class="fa-solid fa-users"></i> Data Pemohon
                        </h4>
                        <hr>
                    </div>
                    <!-- -------------------------------------- -->

                    <?php if (!empty($detail)) : ?>
                        <?php $item = $detail[0]; ?>
                        <div class="row m-5">
                            <div class="col-md-4 mb-3">
                                <b class="d-inline">Nama Tamu: </b>
                                <p class="d-inline"><?= $item['nama_tamu'] ?></p>
                            </div>
                            <div class="col-md-4 mb-3">
                                <b class="d-inline">Email: </b>
                                <p class="d-inline"><?= $item['email'] ?></p>
                            </div>
                            <div class="col-md-4 mb-3">
                                <b class="d-inline">No HP:</b>
                                <p class="d-inline"><?= $item['no_hp'] ?></p>
                            </div>
                            <div class="col-md-4 mb-3">
                                <b class="d-inline">Username:</b>
                                <p class="d-inline"><?= $item['username'] ?></p>
                            </div>
                            <div class="col-md-4 mb-3">
                                <b class="d-inline">Tgl Pemesanan:</b>
                                <p class="d-inline"><?= $item['tgl_pemesanan'] ?></p>
                            </div>
                            <div class="col-md-4 mb-3">
                                <b class="d-inline">Tgl. Check In:</b>
                                <p class="d-inline"><?= $item['check_in'] ?></p>
                            </div>
                            <div class="col-md-4 mb-3">
                                <b class="d-inline">Tgl. Check Out:</b>
                                <p class="d-inline"><?= $item['check_out'] ?></p>
                            </div>

                            <div class="col-md-4 mb-3">
                                <b class="d-inline">Status:</b>
                                <b class="d-inline text-danger"><?= $item['status_booking'] ?></b>
                            </div>
                            <div class="col-md-4 mb-3">
                                <b class="d-inline">Total Pembayaran:</b>
                                <p class="d-inline">Rp. <?= $item['total_payment'] ?>.000, 00</p>
                            </div>

                        </div>







                        <!-- -------------------------------------- -->




                        <!-- ======================================================= -->
                </div>
            </section>
            <!-- ====================================== -->
            <div class="tabeldata">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Tgl Pemesanan</th>
                            <th>Tgl Pembayaran</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        <tr>
                            <td>
                                <p><b class="text-danger"><?= $item['status_booking']; ?></b></p>
                            </td>
                            <td>
                                <p><?= $item['tgl_pemesanan']; ?></p>
                            </td>
                            <td>
                                <p><?= $item['tgl_bayar']; ?></p>
                            </td>

                            <td>
                                <!-- ---------------------UPDATE STATUS PENGAJUAN-------------------- -->

                                <?php if ($item['status_booking'] == 'Pending') : ?>

                                    <a class="btn btn-sm btn-warning my-3 d-block" href="<?= base_url('/data-transaksi-reguler/status/' . $item['id'] . '/Konfirmasi'); ?>" id="btn-validasi-akl">
                                        <i class="fa-solid fa-check"></i> Konfirmasi Booking
                                    </a>
                                    <a class="btn btn-sm btn-danger mb-3 d-block" href="<?= base_url('/data-transaksi-reguler/status/' . $item['id'] . '/Kamar Habis'); ?>" id="btn-tolak-akl">
                                        <i class="fa-solid fa-xmark"></i> Kamar Habis
                                    </a>
                                    <!-- =========================================================================== -->

                                    <a class="btn btn-sm btn-dark mb-3 d-block disabled" href="<?= base_url('/data-transaksi-reguler/status/' . $item['id'] . '/Selesai'); ?>">
                                        <i class="fa-solid fa-flag"></i> Selesai
                                    </a>

                                <?php elseif ($item['status_booking'] == 'Konfirmasi') : ?>

                                    <a class="btn btn-sm btn-warning my-3 d-block" href="<?= base_url('/data-transaksi-reguler/status/' . $item['id'] . '/Pembayaran'); ?>" id="btn-validasi-akl">
                                        <i class="fa-solid fa-check"></i> Pembayaran
                                    </a>
                                    <a class="btn btn-sm btn-danger mb-3 d-block disabled" href="<?= base_url('/data-transaksi-reguler/status/' . $item['id'] . '/Kamar Habis'); ?>" id="btn-tolak-akl">
                                        <i class="fa-solid fa-xmark"></i> Kamar Habis
                                    </a>
                                    <!-- =========================================================================== -->
                                    <a class="btn btn-sm btn-dark mb-3 d-block disabled" href="<?= base_url('/data-transaksi-reguler/status/' . $item['id'] . '/Selesai'); ?>">
                                        <i class="fa-solid fa-flag"></i> Selesai
                                    </a>
                                <?php elseif ($item['status_booking'] == 'Pembayaran') : ?>


                                    <a class="btn btn-sm btn-danger mb-3 d-block disabled" href="<?= base_url('/data-transaksi-reguler/status/' . $item['id'] . '/Kamar Habis'); ?>" id="btn-tolak-akl">
                                        <i class="fa-solid fa-xmark"></i> Kamar Habis
                                    </a>
                                    <!-- =========================================================================== -->
                                    <a class="btn btn-sm btn-dark mb-3 d-block" href="<?= base_url('/data-transaksi-reguler/status/' . $item['id'] . '/Selesai'); ?>">
                                        <i class="fa-solid fa-flag"></i> Selesai
                                    </a>



                                <?php elseif ($item['status_booking'] == 'Selesai') : ?>

                                    <a class="btn btn-sm btn-light my-3 d-block" href="<?= base_url('pengajuan-akta-kelahiran/ekitir/' . $item['id'] . '/Lihat Invoice'); ?>" target="_blank">
                                        <i class="fa-solid fa-eye"></i> Lihat Invoice
                                    </a>


                                    <!-- ================================================================ -->

                                <?php elseif ($item['status_booking'] == 'Kamar Habis') : ?>
                                    <!-- ================================================================== -->
                                    <a class="btn btn-sm btn-dark mb-3 d-block disabled" href="<?= base_url('/data-transaksi-reguler/status/' . $item['id'] . '/Selesai'); ?>">
                                        <i class="fa-solid fa-flag"></i> Selesai
                                    </a>
                                    <!-- ================================================================== -->
                                <?php endif; ?>
                                <!------------------------------------------------------------------------- -->

                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Tampilkan informasi lainnya sesuai kebutuhan -->
        <?php else : ?>
            <p>Tidak ada data detail yang ditemukan.</p>
        <?php endif; ?>


        </div>
    </div>

</div>



<?= $this->endSection(); ?>
<?= $this->extend('layoutuser/template'); ?>
<?= $this->section('content'); ?>
<!---------------------------FORM--------------------------- -->
<div class="container">
    <div class="section-header-form">
        <h2>Status Pembayaran Kamar</h2>
        <hr>
    </div>
    <!-- ===================================PROGRES PENGAJUAN============================================ -->

    <?php if ($pengajuan1 || $pengajuan2 || $pengajuan3) : ?>
        <?php if ($pengajuan1 && $pengajuan1['selesai'] == 0) : ?>
            <div class="card shadow-lg border-0 rounded-lg mb-5">
                <div class="card-body">
                    <div class="judul-status text-center my-5">
                        <b>Pembayaran Kamar Reguler Room</b>
                    </div>
                    <section class="step-wizard">

                        <ul class="step-wizard-list">

                            <!-- ============================================= -->
                            <?php if ($pengajuan1['status_booking'] == 'Pending') : ?>
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Pemesanan </span>
                                    <span class="progress-label">Tanggal Booking : <?= $pengajuan1['tgl_pemesanan']; ?></span>

                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Konfirmasi</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Selesai</span>
                                </li>
                            <?php elseif ($pengajuan1['status_booking'] == 'Konfirmasi') : ?>
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Pemesanan</span>
                                    <span class="progress-label">Tanggal Booking : <?= $pengajuan1['tgl_pemesanan']; ?></span>

                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Konfirmasi</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Selesai</span>
                                </li>
                            <?php elseif ($pengajuan1['status_booking'] == 'Pembayaran') : ?>
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Pemesanan</span>
                                    <span class="progress-label">Tanggal Booking : <?= $pengajuan1['tgl_pemesanan']; ?></span>

                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Konfirmasi</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Pembayaran</span>
                                    <span class="progress-label"><a href="<?= base_url('/data-transaksi-reguler/pembayaran/' . $pengajuan1['id']); ?>"></a></span>
                                </li>
                                <li class="step-wizard-item ">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Selesai</span>
                                </li>
                            <?php elseif ($pengajuan1['status_booking'] == 'Selesai') : ?>
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Pemesanan</span>
                                    <span class="progress-label">Tanggal Booking : <?= $pengajuan1['tgl_pemesanan']; ?></span>

                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Konfirmasi</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Selesai</span>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </section>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($pengajuan2 && $pengajuan2['selesai'] == 0) : ?>
            <div class="card shadow-lg border-0 rounded-lg mb-5">
                <div class="card-body">
                    <div class="judul-status text-center my-5">
                        <b>Pembayaran Kamar Deluxe Room</b>
                    </div>
                    <section class="step-wizard">

                        <ul class="step-wizard-list">

                            <!-- ============================================= -->
                            <?php if ($pengajuan2['status'] == 'Pending') : ?>
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Pemesanan </span>
                                    <span class="progress-label">Tanggal Booking : <?= $pengajuan2['tgl_pemesanan']; ?></span>

                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Konfirmasi</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Selesai</span>
                                </li>
                            <?php elseif ($pengajuan2['status'] == 'Konfirmasi') : ?>
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Pemesanan</span>
                                    <span class="progress-label">Tanggal Booking : <?= $pengajuan2['tgl_pemesanan']; ?></span>

                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Konfirmasi</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Selesai</span>
                                </li>
                            <?php elseif ($pengajuan2['status'] == 'Selesai') : ?>
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Pemesanan</span>
                                    <span class="progress-label">Tanggal Booking : <?= $pengajuan2['tgl_pemesanan']; ?></span>

                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Konfirmasi</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Selesai</span>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </section>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($pengajuan3 && $pengajuan3['selesai'] == 0) : ?>
            <div class="card shadow-lg border-0 rounded-lg mb-5">
                <div class="card-body">
                    <div class="judul-status text-center my-5">
                        <b>Pembayaran Kamar Superior Room</b>
                    </div>
                    <section class="step-wizard">

                        <ul class="step-wizard-list">

                            <!-- ============================================= -->
                            <?php if ($pengajuan3['status'] == 'Pending') : ?>
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Pemesanan </span>
                                    <span class="progress-label">Tanggal Booking : <?= $pengajuan3['tgl_pemesanan']; ?></span>

                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Konfirmasi</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Selesai</span>
                                </li>
                            <?php elseif ($pengajuan3['status'] == 'Konfirmasi') : ?>
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Pemesanan</span>
                                    <span class="progress-label">Tanggal Booking : <?= $pengajuan3['tgl_pemesanan']; ?></span>

                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Konfirmasi</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Selesai</span>
                                </li>
                            <?php elseif ($pengajuan3['status'] == 'Selesai') : ?>
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Pemesanan</span>
                                    <span class="progress-label">Tanggal Booking : <?= $pengajuan3['tgl_pemesanan']; ?></span>

                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Konfirmasi</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Selesai</span>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </section>
                </div>
            </div>
        <?php endif; ?>

    <?php else : ?>
        <div class="card shadow-lg border-0 rounded-lg mb-5">
            <section class="step-wizard">
                <ul class="step-wizard-list">
                    <!-- ============================================= -->
                    <li class="step-wizard-item">
                        <span class="progress-label text-danger">Anda Belum Pernah Melakukan Pemesanan Kamar Hotel</span>
                    </li>
                    <!-- ============================================= -->

                </ul>
            </section>
        </div>
    <?php endif; ?>

</div>


<?= $this->endSection(); ?>
<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('content'); ?>




<div class="container-fluid px-4">
    <h1 class="mt-4">Transaksi Superior</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('/dashboard-admin'); ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Transaksi Superior</li>
    </ol>

    <!-- ----------------------------------------------------- -->
    <div id="flash" data-flash="<?= session('success'); ?>"></div>

    <!-- ----------------------------------------------------- -->

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Daftar Transaksi Superior Room
        </div>
        <div class="card-body">

            <div class="tabeldata">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Hp</th>
                            <th>Tgl Booking</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php $no = 1;
                        foreach ($datapesan as $row) : ?>
                            <tr>

                                <td><?= $no++; ?></td>
                                <td><?= $row['nama_tamu']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['no_hp']; ?></td>
                                <td><?= $row['tgl_pemesanan']; ?></td>
                                <td><b class="text-danger"><?= $row['status_booking']; ?></b></td>
                                <td>
                                    <a href="<?= site_url('/data-transaksi-superior/' . $row['id']); ?>" title="Detail" class="btn btn-warning btn-sm my-2"><i class="fa-solid fa-pen-to-square"></i> Detail</a>
                                    <!-- ==========================Method Spoofing====================== -->
                                    <form action="<?= site_url(''); ?>" method="post" class="d-inline" id="btn-hapus-akl">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm my-2"><i class="fa-solid fa-trash"></i> Hapus</button>
                                    </form>

                                </td>

                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>



<?= $this->endSection(); ?>
<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Welcome Admin</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <h3 class="d-inline">Reguler Room</h3>

                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <b class="d-inline">Total</b>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <h3 class="d-inline">Deluxe Room</h3>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <b class="d-inline">Total</b>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <h3 class="d-inline">Superior Room</h3>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <b class="d-inline">Total</b>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <h3 class="d-inline">President Room</h3>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <b class="d-inline">Total</b>
                    </div>
                </div>
            </div>
        </div>


    </div>
</main>


<?= $this->endSection(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- ============================= -->
<?= $this->include('layoutadmin/header'); ?>
<!-- ============================= -->

<body class="sb-nav-fixed">
    <!-- ================================== -->

    <?= $this->include('layoutadmin/navbar'); ?>
    <!-- ================================== -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Action admin
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url('/data-transaksi-reguler'); ?>">Transaksi Reguler</a>
                                <a class="nav-link" href="<?= base_url('/data-transaksi-deluxe'); ?>">Transaksi Deluxe</a>
                                <a class="nav-link" href="<?= base_url('/data-transaksi-superior'); ?>">Transaksi Superior</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Daftar User</a>
                            </nav>
                        </div>


                        <div class="sb-sidenav-menu-heading">Laporan</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Laporan Transaksi
                        </a>
                        <!-- <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a> -->

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>

                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <!-- ==================== -->
            <?= $this->renderSection('content'); ?>
            <!-- ==================== -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Bintang Flores Hotel 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?= $this->include('layoutadmin/footer'); ?>
</body>

</html>
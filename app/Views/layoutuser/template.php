<!DOCTYPE html>
<html lang="en">

<?= $this->include('layoutuser/header'); ?>

<body>

    <!-- ======= Header ======= -->
    <?= $this->include('layoutuser/navbar'); ?>
    <!-- End Header -->


    <!-- Top #main -->
    <?= $this->renderSection('content'); ?>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?= $this->include('layoutuser/footer'); ?>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/js/main.js'); ?>"></script>
    <!-- SWEET ALERT2 JS -->
    <script src="<?= base_url('sweetalert/sweetalert2.min.js'); ?>"></script>
    <!-- ============================== -->

    <script>
        var flash = $('#flash').data('flash');
        if (flash) {
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: flash,

            })
        }
    </script>
</body>

</html>
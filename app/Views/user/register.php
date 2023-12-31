<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registrasi Akun|Bintang Flores Hotel</title>
    <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Registrasi Akun</h3>
                                </div>
                                <div class="card-body">

                                    <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form action="<?= url_to('register') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="nama_tamu" class="form-control <?php if (session('errors.nama_tamu')) : ?>is-invalid<?php endif ?>" name="nama_tamu" aria-describedby="nama_tamuHelp" placeholder="nama_tamu Lengkap" value="<?= old('nama_tamu') ?>">
                                                    <label for="inputFirstName">Nama Lengkap</label>
                                                    <div class="invalid-feedback">
                                                        <?= session('errors.nama_tamu') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="no_hp" class="form-control <?php if (session('errors.no_hp')) : ?>is-invalid<?php endif ?>" name="no_hp" aria-describedby="no_hpHelp" placeholder="Nama Lengkap" value="<?= old('no_hp') ?>">
                                                    <label for="inputFirstName">Nomor Telepon</label>
                                                    <div class="invalid-feedback">
                                                        <?= session('errors.no_hp') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                                    <label><?= lang('Auth.email') ?></label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                                    <label><?= lang('Auth.username') ?></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">

                                                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">

                                                    <label for="password"><?= lang('Auth.password') ?></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                                    <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                        <p><?= lang('Auth.alreadyRegistered') ?><a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login|Bintang Flores Hotel</title>
    <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="row justify-content-center">

                            <div class="col-md-6">
                                <img src="<?= base_url('/assets/img/bintangflores2.jpg') ?>" width="510px" height="430px" alt="Hotel">

                            </div>

                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="judul text-center my-3">
                                        <h2>Login
                                            <br>
                                            Bintang Flores Hotel
                                        </h2>
                                    </div>
                                    <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form action="<?= url_to('login') ?>" method="post">
                                        <?= csrf_field() ?>

                                        <?php if ($config->validFields === ['email']) : ?>
                                            <div class="form-floating mb-3">
                                                <input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                                                <label for="login"><?= lang('Auth.email') ?></label>
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                            </div>

                                        <?php else : ?>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">

                                                <label for="inputEmail"><?= lang('Auth.emailOrUsername') ?></label>
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="form-floating mb-3">
                                            <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                                            <label for="inputPassword"><?= lang('Auth.password') ?></label>
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>

                                        <div class="d-flex  justify-content-end mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
                                        </div>
                                    </form>


                                    <br>
                                    <div class="card-footer">
                                        <?php if ($config->allowRegistration) : ?>
                                            <div class="d-flex justify-content-center">
                                                <a href="<?= url_to('register') ?>"> Daftar Akun</a>
                                            </div>
                                        <?php endif; ?>
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
                        <div class="text-muted">Copyright &copy; Hotel Bintang Flores 2023</div>

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/scripts.js'); ?>"></script>
</body>

</html>
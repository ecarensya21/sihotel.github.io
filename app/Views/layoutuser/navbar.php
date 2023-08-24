<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Hotel Bintang Flores<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="<?= base_url('/home'); ?>">Home</a></li>

                <!-- <li class="dropdown"><a href="#"><span>Kamar</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="index.html">Deluxe</a></li>
                        <li><a href="index-2.html">Superior</a></li>
                        <li><a href="index-3.html">Reguler</a></li>
                        <li><a href="index-4.html">Presiden Suite</a></li>
                    </ul>
                </li> -->
                <li><a class="nav-link scrollto" href="<?= base_url('/statuspembayaran'); ?>">Status Pembayaran</a></li>

                <li><a class="nav-link scrollto" href="index.html#gallery">Gallery</a></li>
                <li><a class="nav-link scrollto" href="index.html#team">Contact</a></li>
                <li><span>|</span></li>
                <li class="dropdown"><a href="#"><span><?= user()->username ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="<?= base_url(''); ?>">Profil</a></li>
                        <li><a href="<?= base_url('/logout'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <i class="bi bi-list mobile-nav-toggle d-none"></i>


        </nav><!-- .navbar -->

    </div>
</header>
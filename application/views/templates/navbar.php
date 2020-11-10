<nav class="navbar sticky-top navbar-dark bg-primary">
    <a class="navbar-brand" href="<?= base_url(); ?>">
        <img src="<?= base_url(); ?>assets/img/bin.svg" width="30" height="30" class="d-inline-block align-top" alt="Lapor Sampah">
        Lapor Sampah
    </a>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a href="<?= base_url('auth/daftar'); ?>"><button class="btn btn-outline-light mr-md-2" type="button">Daftar</button></a>
        </li>
        <li class="nav-item">
            <a href="#"><button class="btn btn-outline-light mr-md-2 ml-md-2" type="button">Masuk</button></a>

        </li>
        <li class="nav-item">
            <!-- <a class="nav-link active" href="#">Tentang Kami</a> -->
            <button class="btn btn-outline-light ml-md-2" type="button">Tentang Kami</button>
        </li>
    </ul>
</nav>
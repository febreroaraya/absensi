<li class="menu-header">Admin Menu</li>
    <!-- <li>
        <a class="nav-link" href="#">
            <i class="fas fa-fire"></i>
            <span>Data Guru</span>
        </a>
    </li>
    <li>
        <a class="nav-link" href="#">
            <i class="fas fa-fire"></i>
            <span>Data Siswa</span>
        </a>
    </li>
    <li>
        <a class="nav-link" href="#">
            <i class="fas fa-fire"></i>
            <span>Kelas</span>
        </a>
    </li> -->
            <li class="nav-item dropdown">
                <a href="<?= site_url() ?>" class="nav-link has-dropdown">
                    <i class="fas fa-fire"></i>
                    <span>Guru</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?= site_url('guru') ?>">Data Guru</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= site_url('guru') ?>">Absen Guru</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="<?= site_url() ?>" class="nav-link has-dropdown">
                    <i class="fas fa-fire"></i>
                    <span>Siswa</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?= site_url('data_siswa') ?>">Data Siswa</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= site_url('absen_siswa') ?>">Absen Siswa</a>
                    </li>
                </ul>
            </li>
            
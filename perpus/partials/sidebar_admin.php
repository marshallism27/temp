<div class="sidebar">
    <h3 class="text-center">Selamat Datang <?= $data_user["fullname"] ?></h3>
    <ul>
        <li><a href="http://localhost/perpus/admin/index.php">Dashboard</a></li>
        <li><a href="#">Master Data</a>
            <ul>
                <li><a href="http://localhost/perpus/admin/master_data/data_admin/index.php">Data Admin</a></li>
                <li><a href="http://localhost/perpus/admin/master_data/data_anggota/index.php">Data Anggota</a></li>
                <li><a href="http://localhost/perpus/admin/master_data/data_peminjaman/index.php">Data Peminjaman</a></li>
            </ul>
        </li>
        <li><a href="#">Katalog Buku</a>
            <ul>
                <li><a href="http://localhost/perpus/admin/katalog_buku/data_buku/index.php">Data Buku</a></li>
                <li><a href="http://localhost/perpus/admin/katalog_buku/data_kategori/index.php">Data Kategori</a></li>
                <li><a href="http://localhost/perpus/admin/katalog_buku/data_penerbit/index.php">Data Penerbit</a></li>
            </ul>
        </li>
        <li><a href="http://localhost/perpus/admin/laporan_perpus/index.php">Laporan Perpustakaan</a></li>
        <li><a href="http://localhost/perpus/admin/pesan.php">Pesan</a></li>
        <li><a href="http://localhost/perpus/admin/pemberitahuan.php">Pemberitahuan</a></li>
        <li><a href="http://localhost/perpus/admin/notif.php">Notifikasi</a></li>
        <li><a href="http://localhost/perpus/logout.php">Keluar</a></li>
    </ul>
</div>
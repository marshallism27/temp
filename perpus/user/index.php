<?php
include_once("../class/User.php");
include_once("../class/Buku.php");

session_start();

$user = new User;
$data_user = $user->find($_SESSION["id"]);

if (isset($_SESSION['id'])) {
    $data_user = $user->find($_SESSION['id']);
    if ($data_user['role'] == 'admin') {
        header("Location: http://localhost/perpus/admin/index.php");
    }
}
// var_dump($data_user);
// return exit;

$buku = new Buku;
$data_buku = $buku->all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../partials/link_css.php") ?>
    <?php include("../partials/t_script_js.php") ?>
    <title>Dashboard User</title>
</head>

<body>
    <div class="row">
        <div class="col-2">
            <?php include("../partials/sidebar_user.php") ?>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4>Daftar Buku</h4>

                    <table class="table table-striped" id="jquery-tab">
                        <thead>
                            <tr class="table-dark">
                                <th>No.</th>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Pinjam</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($data_buku as $key => $b) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $b["judul"] ?></td>
                                    <td><?= $b["pengarang"] ?></td>
                                    <td><?= $b["penerbit"] ?></td>
                                    <td><a href="form_peminjaman.php?id_buku=<?= $b["id"] ?>">Pinjam</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <?php include("../partials/b_script_js.php") ?>
</body>

</html>
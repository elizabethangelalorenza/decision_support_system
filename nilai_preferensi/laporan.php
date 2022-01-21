<?php
    include("../pages/koneksi.php");
    session_start();
    if (!isset($_SESSION['user'])) {
        echo "<script>window.location='../login.php';</script>";
    }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yasmiba">
    <meta name="author" content="Yasmiba">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../assets/dist/css/style.min.css" rel="stylesheet">
    <title>SPK Miftahussalam Banyumas</title>
</head>

<body>
    <div class="page-wrapper">
        <div class="page-breadcrumb mb-5">
            <div class="row">
                <div class="col-12 align-self-center">
                    <h2 class="page-title text-dark text-center">Laporan Ranking Nilai Preferensi Santri</h2>
                    <h3 class="page-title text-dark text-center">Pondok Pesantren Miftahussalam - Banyumas</h3>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-center table-bordered">
                <thead>
                    <tr>
                        <th style="width:10%;">Ranking</th>
                        <th style="width:20%;">Nama Santri</th>
                        <th style="width:20%;">Kriteria</th>
                        <th style="width:20%;">Alternatif</th>
                        <th style="width:20%;">Normalisasi</th>
                        <th style="width:20%;">Normalisasi Terbobot</th>
                        <th style="width:20%;">Preferensi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query3 = "SELECT GROUP_CONCAT(d.kode_kriteria ORDER BY a.id_kriteria ASC) as kode_kriteria, GROUP_CONCAT(a.nilai_alternatif ORDER BY a.id_kriteria ASC) as nilai_alternatif, GROUP_CONCAT(a.nilai_normalisasi ORDER BY a.id_kriteria ASC) as nilai_normalisasi, GROUP_CONCAT(a.nilai_normalisasi_terbobot ORDER BY a.id_kriteria ASC) as nilai_normalisasi_terbobot, c.nilai_preferensi, b.nama_santri
                                                      FROM nilai_normalisasi_alternatif a
                                                      JOIN santri b ON a.id_santri = b.id_santri
                                                      JOIN nilai_preferensi_alternatif c ON a.id_santri = c.id_santri
                                                      JOIN kriteria d ON a.id_kriteria = d.id_kriteria
                                                      GROUP BY a.id_santri
                                                      ORDER BY c.nilai_preferensi DESC";
                    $tampil3 = mysqli_query($koneksi, $query3);
                    while ($data3 = mysqli_fetch_assoc($tampil3)) :
                        $kode_kriteria = explode(",", $data3['kode_kriteria']);
                        $nilai_alternatif = explode(",", $data3['nilai_alternatif']);
                        $nilai_normalisasi = explode(",", $data3['nilai_normalisasi']);
                        $nilai_normalisasi_terbobot = explode(",", $data3['nilai_normalisasi_terbobot']);
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data3['nama_santri'] ?></td>
                            <td>
                                <?php
                                foreach ($kode_kriteria as $val) {
                                    echo '<hr>';
                                    echo  $val;
                                    echo '</hr>';
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                foreach ($nilai_alternatif as $val) {
                                    echo '<hr>';
                                    echo  $val;
                                    echo '</hr>';
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                foreach ($nilai_normalisasi as $val) {
                                    echo '<hr>';
                                    echo  $val;
                                    echo '</hr>';
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                foreach ($nilai_normalisasi_terbobot as $val) {
                                    echo '<hr>';
                                    echo  $val;
                                    echo '</hr>';
                                }
                                ?>
                            </td>
                            <td><?= $data3['nilai_preferensi'] ?></td>
                        </tr>
                    <?php
                        $no++;
                    endwhile;

                    ?>
                </tbody>
            </table>
        </div>
        <!-- ================================================== -->
        <?php include("pages/footer.php"); ?>

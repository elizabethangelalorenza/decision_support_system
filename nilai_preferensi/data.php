        <?php include("pages/header.php"); ?> 
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Nilai Preferensi Alternatif (Vi)</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-right">
                                    <a href="laporan.php" class="btn btn-success" type="button" target="_blank">
                                        <i class="fas fa-print"></i> Cetak Laporan</a>
                                </div><br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table text-center table-bordered no-wrap" style="width: 100%">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th style="width:5%;">Ranking</th>
                                                <th style="width:25%;">Nama Santri</th>
                                                <th style="width:15%;">Kode Kriteria</th>
                                                <th style="width:15%;">Nilai Santri</th>
                                                <th style="width:15%;">Normalisasi</th>
                                                <th style="width:15%;">Normalisasi Terbobot</th>
                                                <th style="width:10%;">Nilai Preferensi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $cek_aktual_santri = mysqli_query($koneksi, "SELECT id_santri FROM nilai_normalisasi_alternatif GROUP BY id_santri");
                                            $cek_realita_santri = mysqli_query($koneksi, "SELECT id_santri FROM santri GROUP BY id_santri");
                                            $cek_nilai_aktual = mysqli_query($koneksi, "SELECT id_santri FROM nilai_preferensi_alternatif");
                                            $cek_aktual_santri = mysqli_num_rows($cek_aktual_santri);
                                            $cek_realita_santri = mysqli_num_rows($cek_realita_santri);
                                            $cek_nilai_aktual = mysqli_num_rows($cek_nilai_aktual);
                                            if ($cek_aktual_santri != $cek_realita_santri || $cek_nilai_aktual == 0) {
                                                if ($cek_nilai_aktual > 0) {
                                                    $query_hapus = "DELETE FROM nilai_preferensi_alternatif";
                                                    mysqli_query($koneksi, $query_hapus);
                                                }

                                                $query = "SELECT id_santri, SUM(nilai_normalisasi_terbobot) as nilai_preferensi
                                                          FROM nilai_normalisasi_alternatif
                                                          GROUP BY id_santri";
                                                $tampil = mysqli_query($koneksi, $query);

                                                while ($data = mysqli_fetch_assoc($tampil)) :
                                                    $insert_nilai_preferensi = 'INSERT INTO nilai_preferensi_alternatif (id_santri, nilai_preferensi)
                                                                      VALUES (' . $data['id_santri'] . ', ' . $data['nilai_preferensi'] . ')';
                                                    mysqli_query($koneksi, $insert_nilai_preferensi);
                                                endwhile;
                                            }
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
                                                        echo '<ul class="list-group">';
                                                        foreach ($kode_kriteria as $val) {
                                                            echo '<li class="list-group-item">' . $val . '</li>';
                                                        }
                                                        echo '</ul>'
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo '<ul class="list-group">';
                                                        foreach ($nilai_alternatif as $val) {
                                                            echo '<li class="list-group-item">' . $val . '</li>';
                                                        }
                                                        echo '</ul>'
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo '<ul class="list-group">';
                                                        foreach ($nilai_normalisasi as $val) {
                                                            echo '<li class="list-group-item">' . $val . '</li>';
                                                        }
                                                        echo '</ul>'
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo '<ul class="list-group">';
                                                        foreach ($nilai_normalisasi_terbobot as $val) {
                                                            echo '<li class="list-group-item">' . $val . '</li>';
                                                        }
                                                        echo '</ul>'
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ================================================== -->
            <?php include("pages/footer.php"); ?>

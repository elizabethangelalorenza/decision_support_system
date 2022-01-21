        <?php include("pages/header.php"); ?>
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Nilai Normalisasi Terbobot (R x W)</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body"><br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table text-center table-bordered no-wrap">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th width="2px">No. </th>
                                                <th width="2px">Nama Santri</th>
                                                <th width="2px">Kriteria 1</th>
                                                <th width="2px">Kriteria 2</th>
                                                <th width="2px">Kriteria 3</th>
                                                <th width="2px">Kriteria 4</th>
                                                <th width="2px">Kriteria 5</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $cek_aktual_santri = mysqli_query($koneksi, "SELECT id_santri FROM nilai_normalisasi_alternatif GROUP BY id_santri");
                                            $cek_realita_santri = mysqli_query($koneksi, "SELECT id_santri FROM santri GROUP BY id_santri");
                                            $cek_nilai_aktual = mysqli_query($koneksi, "SELECT id_santri FROM nilai_normalisasi_alternatif WHERE nilai_normalisasi_terbobot = 0");
                                            $cek_aktual_santri = mysqli_num_rows($cek_aktual_santri);
                                            $cek_realita_santri = mysqli_num_rows($cek_realita_santri);
                                            $cek_nilai_aktual = mysqli_num_rows($cek_nilai_aktual);
                                            if ($cek_aktual_santri != $cek_realita_santri || $cek_nilai_aktual > 0) {
                                                $query = "SELECT GROUP_CONCAT(a.id_nilai_normalisasi ORDER BY a.id_kriteria ASC) id_nilai, GROUP_CONCAT(a.nilai_normalisasi ORDER BY a.id_kriteria ASC) as nilai_normalisasi, GROUP_CONCAT(c.bobot_kriteria ORDER BY a.id_kriteria ASC) as bobot
                                                          FROM nilai_normalisasi_alternatif a
                                                          JOIN kriteria c ON a.id_kriteria = c.id_kriteria
                                                          GROUP BY a.id_santri";
                                                $tampil = mysqli_query($koneksi, $query);

                                                while ($data = mysqli_fetch_assoc($tampil)) :
                                                    $id_nilai = explode(",", $data['id_nilai']);
                                                    $bobot = explode(",", $data['bobot']);
                                                    $nilai = 0;
                                                    foreach (explode(",", $data['nilai_normalisasi']) as $i => $val) {
                                                        $nilai = $val * $bobot[$i];
                                                        $query_edit = 'UPDATE nilai_normalisasi_alternatif SET
                                                                            nilai_normalisasi_terbobot = ' . $nilai . '
                                                                          WHERE id_nilai_normalisasi=' . $id_nilai[$i];
                                                        mysqli_query($koneksi, $query_edit);
                                                        $nilai = 0;
                                                    }
                                                endwhile;
                                            }
                                            $query3 = "SELECT GROUP_CONCAT(a.nilai_normalisasi_terbobot ORDER BY a.id_kriteria ASC) as nilai_normalisasi_terbobot, b.nama_santri
                                                      FROM nilai_normalisasi_alternatif a
                                                      JOIN santri b ON a.id_santri = b.id_santri
                                                      GROUP BY a.id_santri";
                                            $tampil3 = mysqli_query($koneksi, $query3);
                                            while ($data3 = mysqli_fetch_assoc($tampil3)) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++; ?>.</td>
                                                    <td><?= $data3["nama_santri"]; ?></td>
                                                    <?php
                                                    foreach (explode(",", $data3['nilai_normalisasi_terbobot']) as $i => $value) {
                                                        echo '<td>' . $value  . '</td>';
                                                    }
                                                    ?>
                                                </tr>
                                            <?php endwhile; ?>
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

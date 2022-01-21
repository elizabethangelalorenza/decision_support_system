        <?php include("pages/header.php"); ?>
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Nilai Normalisasi (R)</h1>
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
                                            $cek_nilai_aktual = mysqli_query($koneksi, "SELECT id_santri FROM nilai_normalisasi_alternatif WHERE nilai_normalisasi = 0");
                                            $cek_aktual_santri = mysqli_num_rows($cek_aktual_santri);
                                            $cek_realita_santri = mysqli_num_rows($cek_realita_santri);
                                            $cek_nilai_aktual = mysqli_num_rows($cek_nilai_aktual);
                                            if ($cek_aktual_santri != $cek_realita_santri || $cek_nilai_aktual > 0) {
                                                $query = "SELECT GROUP_CONCAT(a.id_nilai_normalisasi ORDER BY a.id_kriteria ASC) id_nilai, GROUP_CONCAT(a.nilai_alternatif ORDER BY a.id_kriteria ASC) as nilai, GROUP_CONCAT(c.jenis_kriteria ORDER BY a.id_kriteria ASC) as jenis_kriteria
                                                          FROM nilai_normalisasi_alternatif a
                                                          JOIN kriteria c ON a.id_kriteria = c.id_kriteria
                                                          GROUP BY a.id_santri";
                                                $query2 = mysqli_query($koneksi, "SELECT id_kriteria, MAX(nilai_alternatif) as n_max, MIN(nilai_alternatif) as n_min FROM nilai_normalisasi_alternatif GROUP BY id_kriteria ORDER BY id_kriteria ASC");
                                                while ($nilai_min_max = mysqli_fetch_assoc($query2)) {
                                                    $n_max[] = $nilai_min_max['n_max'];
                                                    $n_min[] = $nilai_min_max['n_min'];
                                                }
                                                $tampil = mysqli_query($koneksi, $query);
                                                while ($data = mysqli_fetch_assoc($tampil)) :
                                                    $jenis_kriteria = explode(",", $data['jenis_kriteria']);
                                                    $id_nilai = explode(",", $data['id_nilai']);
                                                    $nilai = 0;
                                                    foreach (explode(",", $data['nilai']) as $i => $val) {
                                                        if ($jenis_kriteria[$i] == 'Benefit') {
                                                            $nilai = round($val / $n_max[$i], 3);
                                                        } else {
                                                            $nilai = round($n_min[$i] / $val, 3);
                                                        }
                                                        $query_edit = 'UPDATE nilai_normalisasi_alternatif SET
                                                                            nilai_normalisasi = ' . $nilai . '
                                                                          WHERE id_nilai_normalisasi=' . $id_nilai[$i];
                                                        mysqli_query($koneksi, $query_edit);
                                                        $nilai = 0;
                                                    }
                                                endwhile;
                                            }
                                            $query3 = "SELECT GROUP_CONCAT(a.nilai_normalisasi ORDER BY a.id_kriteria ASC) as nilai_normalisasi, b.nama_santri
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
                                                    foreach (explode(",", $data3['nilai_normalisasi']) as $i => $value) {
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

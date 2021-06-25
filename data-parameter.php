        <?php include("pages/header.php"); ?>
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Parameter</h1>
                        <div class="d-flex align-items-center"></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Kriteria: Rata-rata Nilai Tes Masuk Tertulis (K1)
                                    <a href="index.php?url=data_kriteria_tambah" class="btn btn-md btn-success" style="float: right;">
                                        <i class="fa fa-plus"></i> Tambah</a>
                                </h3><br>
                                <div class="table-responsive">
                                    <table class="table text-center table-bordered no-wrap">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th width="2px">No. </th>
                                                <th width="2px">Parameter</th>
                                                <th width="2px">Keterangan</th>
                                                <th width="2px">Bobot</th>
                                                <th width="2px"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = "SELECT * FROM parameter_k1";
                                            $hasil = mysqli_query($koneksi, $query);

                                            if (mysqli_num_rows($hasil) != 0) {
                                            while ($data = mysqli_fetch_assoc($hasil)) {
                                                ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data["parameter"]; ?></td>
                                                    <td><?= $data["keterangan"]; ?></td>
                                                    <td><?= $data["bobot"]; ?></td>
                                                    <td>
                                                        <button type="submit" class="btn btn-warning btn-rounded" title="Edit" onclick="return confirm('Apakah anda yakin ingin mengedit?')"><i class="far icon-pencil"></i> Edit</button>
                                                        <button type="submit" class="btn btn-danger btn-rounded" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="far icon-trash"></i> Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Kriteria: Rata-rata Nilai Ujian Nasional (K2)
                                    <a href="index.php?url=data_kriteria_tambah" class="btn btn-md btn-success" style="float: right;">
                                        <i class="fa fa-plus"></i> Tambah</a>
                                </h3><br>
                                <div class="table-responsive">
                                    <table class="table text-center table-bordered no-wrap">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th width="2px">No. </th>
                                                <th width="2px">Parameter</th>
                                                <th width="2px">Keterangan</th>
                                                <th width="2px">Bobot</th>
                                                <th width="2px"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = "SELECT * FROM parameter_k2";
                                            $hasil = mysqli_query($koneksi, $query);

                                            if (mysqli_num_rows($hasil) != 0) {
                                            while ($data = mysqli_fetch_assoc($hasil)) {
                                                ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data["parameter"]; ?></td>
                                                    <td><?= $data["keterangan"]; ?></td>
                                                    <td><?= $data["bobot"]; ?></td>
                                                    <td>
                                                        <button type="submit" class="btn btn-warning btn-rounded" title="Edit" onclick="return confirm('Apakah anda yakin ingin mengedit?')"><i class="far icon-pencil"></i> Edit</button>
                                                        <button type="submit" class="btn btn-danger btn-rounded" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="far icon-trash"></i> Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Kriteria: Rata-rata Nilai Rapot Kelas (K3)
                                    <a href="index.php?url=data_kriteria_tambah" class="btn btn-md btn-success" style="float: right;">
                                        <i class="fa fa-plus"></i> Tambah</a>
                                </h3><br>
                                <div class="table-responsive">
                                    <table class="table text-center table-bordered no-wrap">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th width="2px">No. </th>
                                                <th width="2px">Parameter</th>
                                                <th width="2px">Keterangan</th>
                                                <th width="2px">Bobot</th>
                                                <th width="2px"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = "SELECT * FROM parameter_k3";
                                            $hasil = mysqli_query($koneksi, $query);

                                            if (mysqli_num_rows($hasil) != 0) {
                                            while ($data = mysqli_fetch_assoc($hasil)) {
                                                ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data["parameter"]; ?></td>
                                                    <td><?= $data["keterangan"]; ?></td>
                                                    <td><?= $data["bobot"]; ?></td>
                                                    <td>
                                                        <button type="submit" class="btn btn-warning btn-rounded" title="Edit" onclick="return confirm('Apakah anda yakin ingin mengedit?')"><i class="far icon-pencil"></i> Edit</button>
                                                        <button type="submit" class="btn btn-danger btn-rounded" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="far icon-trash"></i> Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Kriteria: Nilai Membaca Al-Qur'an (K4)
                                    <a href="index.php?url=data_kriteria_tambah" class="btn btn-md btn-success" style="float: right;">
                                        <i class="fa fa-plus"></i> Tambah</a>
                                </h3><br>
                                <div class="table-responsive">
                                    <table class="table text-center table-bordered no-wrap">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th width="2px">No. </th>
                                                <th width="2px">Parameter</th>
                                                <th width="2px">Keterangan</th>
                                                <th width="2px">Bobot</th>
                                                <th width="2px"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = "SELECT * FROM parameter_k4";
                                            $hasil = mysqli_query($koneksi, $query);

                                            if (mysqli_num_rows($hasil) != 0) {
                                            while ($data = mysqli_fetch_assoc($hasil)) {
                                                ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data["parameter"]; ?></td>
                                                    <td><?= $data["keterangan"]; ?></td>
                                                    <td><?= $data["bobot"]; ?></td>
                                                    <td>
                                                        <button type="submit" class="btn btn-warning btn-rounded" title="Edit" onclick="return confirm('Apakah anda yakin ingin mengedit?')"><i class="far icon-pencil"></i> Edit</button>
                                                        <button type="submit" class="btn btn-danger btn-rounded" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="far icon-trash"></i> Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Kriteria: Nilai Wawancara Kepribadian (K5)
                                    <a href="index.php?url=data_kriteria_tambah" class="btn btn-md btn-success" style="float: right;">
                                        <i class="fa fa-plus"></i> Tambah</a>
                                </h3><br>
                                <div class="table-responsive">
                                    <table class="table text-center table-bordered no-wrap">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th width="2px">No. </th>
                                                <th width="2px">Parameter</th>
                                                <th width="2px">Keterangan</th>
                                                <th width="2px">Bobot</th>
                                                <th width="2px"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = "SELECT * FROM parameter_k5";
                                            $hasil = mysqli_query($koneksi, $query);

                                            if (mysqli_num_rows($hasil) != 0) {
                                            while ($data = mysqli_fetch_assoc($hasil)) {
                                                ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data["parameter"]; ?></td>
                                                    <td><?= $data["keterangan"]; ?></td>
                                                    <td><?= $data["bobot"]; ?></td>
                                                    <td>
                                                        <button type="submit" class="btn btn-warning btn-rounded" title="Edit" onclick="return confirm('Apakah anda yakin ingin mengedit?')"><i class="far icon-pencil"></i> Edit</button>
                                                        <button type="submit" class="btn btn-danger btn-rounded" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="far icon-trash"></i> Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <?php include("pages/footer.php"); ?>
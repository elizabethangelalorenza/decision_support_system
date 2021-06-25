        <?php include("pages/header.php"); ?>
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Kriteria</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h1>
                                    <a href="index.php?url=data_kriteria_tambah" class="btn btn-md btn-success">
                                        <i class="fa icon-printer"></i> Cetak Laporan</a>
                                    <a href="index.php?url=data_kriteria_tambah" class="btn btn-md btn-success" style="float: right;">
                                        <i class="fa fa-plus"></i> Tambah</a>
                                </h1><br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table text-center table-bordered no-wrap">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th width="2px">No. </th>
                                                <th width="10px">Nama Kriteria</th>
                                                <th width="5px">Jenis Kriteria</th>
                                                <th width="5px">Bobot</th>
                                                <th width="2px"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = "SELECT * FROM kriteria";
                                            $hasil = mysqli_query($koneksi, $query);

                                            if (mysqli_num_rows($hasil) != 0) {
                                            while ($data = mysqli_fetch_assoc($hasil)) {
                                                ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data["nama_kriteria"]; ?></td>
                                                    <td><?= $data["jenis_kriteria"]; ?></td>
                                                    <td><?= $data["bobot_kriteria"]; ?></td>
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
        <?php include("pages/header.php"); ?>
        <!-- ================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb"> 
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Santri</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-right">
                                    <a href="#" class="btn btn-success" type="button" style="float: left;">
                                        <i class="fas fa-print"></i> Cetak Laporan</a>
                                    <a href="tambah.php" class="btn btn-success" type="button">
                                        <i class="fas fa-plus"></i> Tambah</a>
                                </div><br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table text-center table-bordered no-wrap">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th width="2px">No. </th>
                                                <th>Nama Santri</th>
                                                <th width="2px">Jenis Kelamin</th>
                                                <th width="2px">Asal Sekolah</th>
                                                <th width="2px">Alamat</th>
                                                <th width="2px"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no = 1;
                                            $query = "SELECT * FROM santri ORDER BY id_santri ASC";
                                            $tampil = mysqli_query($koneksi, $query);
                                            while ($data = mysqli_fetch_assoc($tampil)):
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data["nama_santri"]; ?></td>
                                            <td><?= $data["jenis_kelamin"]; ?></td>
                                            <td><?= $data["asal_sekolah"]; ?></td>
                                            <td><?= $data["alamat_santri"]; ?></td>
                                            <td>
                                                <a href="edit.php?id=<?=$data['id_santri']?>" type="button" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i> Edit</a>
                                                <a href="hapus.php?id=<?=$data['id_santri']?>" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                    <i class="fas fa-trash-alt"></i> Hapus</a>
                                            </td>
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
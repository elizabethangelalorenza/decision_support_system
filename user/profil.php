        <?php include("pages/header.php"); ?>
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Profil</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center position-relative">
                    <div class="col-md-10">
                        <div class="card border-primary">
                            <div class="card-header bg-primary">
                                <h3 class="mb-0 text-white">Data Diri</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-actions">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-success" type="button" style="float: left;">
                                            <i class="fas fa-print"></i> Cetak Laporan</a>
                                        <a href="edit-profil..php" class="btn btn-warning" type="button">
                                            <i class="fas fa-edit"></i> Edit Profil</a>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <img src="../assets/images/avatar.jpg" class="img-fluid rounded-circle" style="width: 300px; height: 300px;">
                                </div><br>
                                <div class="form-group">
                                    <h2>
                                        <div class="card-title text-center">Nama Lengkap</div>
                                    </h2>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h4 class="mb-1" style="color: black;">Tempat dan Tanggal Lahir</h4>
                                        <div class="text-muted">Purbalingga, 13 September 1998</div>
                                    </li>
                                    <li class="list-group-item">
                                        <h4 class="mb-1" style="color: black;">Jenis Kelamin</h6>
                                        <div class="text-muted">Laki-laki</div>
                                    </li>
                                    <li class="list-group-item">
                                        <h4 class="mb-1" style="color: black;">Agama</h6>
                                        <div class="text-muted">Islam</div>
                                    </li>
                                    <li class="list-group-item">
                                        <h4 class="mb-1" style="color: black;">Alamat</h6>
                                        <div class="text-muted text-justify">Jl. Jend. Soedirman No. 15. Desa Pekiringan RT 01/RW 02, Kec. Karangmoncol, Kab. Purbalingga, Jawa Tengah</div>
                                    </li>
                                    <li class="list-group-item">
                                        <h4 class="mb-1" style="color: black;">Email</h6>
                                        <div class="text-muted">destiny88end@gmail.com</div>
                                    </li>
                                    <li class="list-group-item">
                                        <h4 class="mb-1" style="color: black;">Telepon</h6>
                                        <div class="text-muted">+62 85795555965</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <?php include("pages/footer.php"); ?>

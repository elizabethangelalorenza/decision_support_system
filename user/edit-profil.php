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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card-header bg-primary">
                                            <h3 class="mb-0 text-white">Form Kriteria</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <h4>
                                                    <label class="card-title">Nama Kriteria</label>
                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control" placeholder="Nama Kriteria">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <h4>
                                                        <label class="card-title">Tempat lahir</label>
                                                    </h4>
                                                    <input type="text" class="form-control" placeholder="Tempat lahir">
                                                </div>
                                                <div class="col-md-6">
                                                    <h4>
                                                        <label class="card-title">Tanggal lahir</label>
                                                    </h4>
                                                    <input type="date" class="form-control" value="2018-05-13">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <h4>
                                                        <label class="card-title">Jenis Kelamin</label>
                                                    </h4>
                                                    <div class="form-check form-check-inline">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked">
                                                            <label class="custom-control-label" for="customControlValidation2">Laki-laki</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked">
                                                            <label class="custom-control-label" for="customControlValidation3">Perempuan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4>
                                                        <label class="card-title">Agama</label>
                                                    </h4>
                                                    <select name="agama" id="agama" class="form-control">
                                                        <option>Islam</option>
                                                        <option>Kristen</option>
                                                        <option>Katolik</option>
                                                        <option>Hindu</option>
                                                        <option>Budha</option>
                                                        <option>Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>
                                                    <label class="card-title">Alamat</label>
                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea type="text" class="form-control" rows="4" placeholder="Alamat"></textarea>
                                                    </div>
                                                </div>
                                            </div>             
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button href="#" type="button" class="btn btn-success" title="Simpan" onclick="return confirm('Apakah anda yakin ingin menyimpan?')"><i class="far fa-save"></i> Simpan</button>
                                                    <button href="#" type="button" class="btn btn-danger" title="Batal" onclick="return confirm('Apakah anda yakin ingin membatalkan?')"><i class="far icon-close"></i> Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="../assets/images/avatar.jpg" class="img-fluid" style="width: 500px; height: 500px;">
                                        <form class="mt-3">
                                            <fieldset class="form-group">
                                                <input type="file" class="form-control-file" id="exampleInputFile">
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <?php include("pages/footer.php"); ?>

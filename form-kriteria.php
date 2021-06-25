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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Kriteria</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                    <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" placeholder="col-md-11">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Nama Kriteria</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Nama Kriteria">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Jenis Kriteria</label>
                                        <div class="form-group mb-4">
                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Pilih...</option>
                                                <option value="cost">Cost</option>
                                                <option value="benefit">Benefit</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Nama Kriteria">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Nama Kriteria">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button href="#" type="button" class="btn btn-success" title="Simpan" onclick="return confirm('Apakah anda yakin ingin menyimpan?')"><i class="far fa-save"></i> Simpan</button>
                                            <button href="#" type="button" class="btn btn-danger" title="Batal" onclick="return confirm('Apakah anda yakin ingin membatalkan?')"><i class="far icon-close"></i> Batal</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <?php include("pages/footer.php"); ?>
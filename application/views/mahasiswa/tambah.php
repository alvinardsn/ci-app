<div class="container">
    <div class="row" mt-3>
        <div class="col-md-6">

            <div class="card mt-3">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Name">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="number" name="npm" class="form-control" id="npm" placeholder="Enter NPM">
                            <small class="form-text text-danger"><?= form_error('npm'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <select class="form-control" id="fakultas" name="fakultas">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Hukum">Hukum</option>
                                <option value="Ekonomi">Ekonomi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                            </select>
                        </div>

                        <!-- Trigger modal box -->
                        <!-- <button type="button" name="tambah" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                            Tambah Mahasiswa
                        </button> -->

                        <button type="submit" name="tambah" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah</button>
                    </form>
                </div>
            </div>

        </div>

        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        put validation errors
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
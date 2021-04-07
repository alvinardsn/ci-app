<div class="container">
    <div class="row" mt-3>
        <div class="col-md-6">

            <div class="card mt-3">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>"> <!-- untuk mengirim id sebagai parameter untuk mengubah-->
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Name" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="number" name="npm" class="form-control" id="npm" placeholder="Enter NPM" value="<?= $mahasiswa['npm']; ?>">
                            <small class="form-text text-danger"><?= form_error('npm'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email" value="<?= $mahasiswa['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <select class="form-control" id="fakultas" name="fakultas">
                                <?php foreach ($fakultas as $f) : ?>
                                    <?php if ($f == $mahasiswa['fakultas']) : ?>
                                        <option value="<?= $f; ?>" selected><?= $f; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $f; ?>" selected><?= $f; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Trigger modal box -->
                        <!-- <button type="button" name="tambah" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                            Tambah Mahasiswa
                        </button> -->

                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-secondary  float-right">Kembali</a>
                        <button type="submit" class="btn btn-primary mr-2 float-right">Ubah Data</button>
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
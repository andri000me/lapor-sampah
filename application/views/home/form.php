<div class="container mt-md-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card">
                <div class="card-body shadow-lg">
                    <h3 class="card-title text-center">Lapor Sampah</h3>
                    <form method="POST" action="<?= base_url('auth/form'); ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul Laporan</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputKeterangan">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" value="<?= set_value('keterangan'); ?>"></textarea>
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputTanggal">Tanggal Kejadian</label>
                            <input type="date" class="form-control" id="tgl_laporan" name="tgl_laporan">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('tgl_laporan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputTempat">Lokasi</label>
                            <input type="text" class="form-control" id="tempat" name="tempat">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('tempat'); ?></small>
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04" name="photo">
                                <label class="custom-file-label" for="inputGroupFile04">foto</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
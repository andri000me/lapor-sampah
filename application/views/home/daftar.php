<div class="container mt-md-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card">
                <div class="card-body shadow-lg">
                    <h3 class="card-title text-center">Daftar</h3>
                    <form method="POST" action="<?= base_url('auth/daftar'); ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password1" name="password1">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('password1'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Re-Password</label>
                            <input type="password" class="form-control" id="password2" name="password2">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('password2'); ?></small>
                        </div>

                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
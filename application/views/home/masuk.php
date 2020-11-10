<div class="container mt-md-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card">
                <div class="card-body shadow-lg">
                    <h3 class="card-title text-center">Masuk</h3>
                    <?= $this->session->flashdata('message'); ?>
                    <form method="POST" action="<?= base_url('auth/masuk'); ?>">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('password'); ?></small>
                        </div>


                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
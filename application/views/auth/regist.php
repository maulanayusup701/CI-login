<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/regist'); ?>">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="firstname" name="firstname" value="<?= set_value('firstname') ?>" placeholder="Nama Depan">
                                    <?= form_error('firstname', ' <small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="lastname" name="lastname" value="<?= set_value('lastname') ?> " placeholder="Nama Belakang">
                                    <?= form_error('lastname', ' <small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email') ?>" placeholder=" Email">
                                <?= form_error('email', ' <small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', ' <small class="text-danger pl-3">', '</small>') ?>

                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Konfirmasi Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar Akun
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
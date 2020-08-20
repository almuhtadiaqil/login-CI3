<?= $this->extend('layout/loginView'); ?>
<?= $this->section('content'); ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">User Login</h1>
                                </div>
                                <form class="user" action="<?= base_url('login/login_action'); ?>" method="POST">
                                    <?= csrf_field(); ?>
                                    <div class="form-group con-input">
                                        <input type="text" class="form-control " id="no_kk" name="no_kk" placeholder="No. Kartu Keluarga">
                                        <i class="bx bx-user icon"></i>
                                        <div class="bg"></div>

                                    </div>
                                    <div class="form-group con-input">
                                        <input type="text" class="form-control " id="no_nik" name="no_nik" placeholder="NIK">
                                        <i class="bx bx-key icon"></i>
                                        <div class="bg"></div>

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection(); ?>
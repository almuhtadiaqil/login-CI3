<?= $this->extend('layout/loginView'); ?>
<?= $this->section('content'); ?>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">

                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user " action="" method="POST">

                            <div class="form-group con-input regis">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" autofocus>
                            </div>
                            <div class="form-group con-input regis">
                                <input type="text" class="form-control " id="email" name="email" placeholder="Email Address">
                            </div>
                            <div class="form-group con-input regis">
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                            </div>
                            <div class="form-group con-input">
                                <input type="password" class="form-control " id="password2" name="password2" placeholder="Repeat Password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/auth/index">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>
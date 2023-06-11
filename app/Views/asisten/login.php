<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron">
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= (session()->getFlashdata('error')); ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('salah')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= (session()->getFlashdata('salah')); ?>
        </div>
    <?php endif; ?>
    <h1 class="display-4">Login</h1>
    <p class="lead">Login untuk mengakses data asisten</p>
    <hr class="my-4">
    <form method="post" action="/asisten/cekLogin">
        <?= csrf_field(); ?>
        <div class="form-floating mb-3">
            <input class="form-control" id="username" name="username" type="text" placeholder="username" required />
            <label for="username">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="password" name="password" type="password" placeholder="password" required />
            <label for="password">Password</label>
        </div>
        <button class="btn btn-primary" name="btnsubmit" value="Search" type="submit"><i class="bi bi-search"></i>
            Login</button>
    </form>

</div>
<?= $this->endSection(); ?>
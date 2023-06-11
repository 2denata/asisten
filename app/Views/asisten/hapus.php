<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron">
    <h1 class="display-4">Hapus Asisten Praktikum</h1>
    <p class="lead">Hapus data di dalam database</p>
    <hr class="my-4">
    <form action="/asisten/hapus" method="post">
        <?= csrf_field(); ?>
        <div class="form-floating mb-3">
            <input class="form-control" id="nim" name="nim" type="text" placeholder="NIM" required />
            <label for="tipe">NIM</label>
        </div>
        <button class="btn btn-danger" name="btnsubmit" value="simpan" type="submit"><i class="bi bi-trash-fill"></i>
            Hapus</button>
    </form>
</div>
<?= $this->endSection(); ?>
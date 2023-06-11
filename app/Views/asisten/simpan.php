<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron">
    <h1 class="display-4">Pendaftaran Asisten Praktikum</h1>
    <p class="lead">Simpan data ke dalam database</p>
    <hr class="my-4">
    <form method="post" action="/asisten/simpan">
        <div class="form-floating mb-3">
            <input class="form-control" id="nim" name="nim" type="text" placeholder="nim" required />
            <label for="nim">NIM</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" required />
            <label for="merk">Nama</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="praktikum" name="praktikum" type="text" placeholder="Praktikum" required />
            <label for="tipe">Praktikum</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="ipk" name="ipk" type="text" placeholder="IPK" required />
            <label for="tipe">IPK</label>
        </div>
        <button class="btn btn-primary" name="btnsubmit" value="simpan" type="submit"><i class="bi bi-upload"></i>
            Simpan</button>
    </form>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron">
    <?php if (session()->getFlashdata('sukses')) : ?>
        <div class="alert alert-success" role="alert">
            <?= (session()->getFlashdata('sukses')); ?>
        </div>
    <?php endif; ?>
    <h1 class="display-4">Pendaftaran Asisten Praktikum</h1>
    <p class="lead">Daftar asisten yang sudah mendaftar: </p>
    <hr class="my-4">
    <div class="row mt-2">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas Praktikum</th>
                        <th>IPK</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($asisten as $a) : ?>
                        <tr>
                            <th><?= $i++; ?></th>
                            <td><?= $a['nim']; ?></td>
                            <td><?= $a['nama'] ?></td>
                            <td><?= $a['praktikum']; ?></td>
                            <td><?= $a['ipk']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>
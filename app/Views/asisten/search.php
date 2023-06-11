<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron">
    <h1 class="display-4">Search</h1>
    <p class="lead">Cari Data di Database</p>
    <hr class="my-4">
    <form method="post" action="/asisten/search">
        <?= csrf_field(); ?>
        <div class="form-floating mb-3">
            <input class="form-control" id="key" name="key" type="text" placeholder="key" required />
            <label for="nim">Key</label>
        </div>
        <button class="btn btn-primary" name="btnsubmit" value="Search" type="submit"><i class="bi bi-search"></i>
            Search</button>
    </form>

    <?php
        if (!empty($hasil)){
            echo "<h2>Hasil Pencarian</h2>";
            echo "\nNama : " . $hasil['nama'];
            echo "\nPraktikum : " . $hasil['praktikum'];
            echo "\nIPK : " . $hasil['ipk'];
        }
    ?>

</div>


<?= $this->endSection(); ?>
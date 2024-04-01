<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width:18rem;">
        <img src="<?= BASE_URL ?>/img/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Profile Saya</h5>
            <p class="card-text">
                Nama : <?= $data['nama'] ?>
                <br>
                Usia : <?= $data['usia'] ?>
                <br>
                Hobi : <?= $data['hobi'] ?>
                <br>
                Pekerjaan : <?= $data['pekerjaan'] ?>
            </p>
            <a href="<?= BASE_URL ?>/home/index" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    </div>
</div>
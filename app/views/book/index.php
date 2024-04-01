<div class="container">
    <h3 class="mb-3 text-capitalize">Daftar Novel <?= $data['nama'] ?></h3>
    <button type="button" class="btn btn-primary m-2 tampilModalTambah" style= "float: right" data-bs-toggle="modal" data-bs-target="#formModal">
  Masukan Novel
</button>
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <table class="table table-success table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Selesai Di Baca</th>
                <th scope="col">Tanggal Rilis</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data['buku'] as $buku) {
                ?>
                <tr>
                    <th scope="row"><?= $buku['id'] ?></th>
                    <td><?= $buku['judul'] ?></td>
                    <td><?= $buku['penulis'] ?></td>
                    <td><?= $buku['selesai'] ?></td>
                    <td><?= $buku['rilis'] ?></td>
                    <td>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModalEdit<?=$buku['id']?>">Edit</button>
                    <a href="<?= BASE_URL; ?>/book/hapus/<?= $buku['id'];?>"  class="btn btn-danger" onclick="return confirm('Yakin?');">Delete</a></td>
                </tr>
                <?php  }  ?>
        </tbody>
    </table>
    <a href="<?= BASE_URL ?>/home/index" class="btn btn-primary">Kembali</a>
    <!-- Button trigger modal -->
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Data Novel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= BASE_URL; ?>/book/tambah" method="post">
      <div class="form-group">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul">
        </div>
        <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" class="form-control" id="penulis" name="penulis">
        </div>
        <div class="mb-3">
        <label for="selesai">Selesai Di Baca</label><br>
        <input type="date" id="selesai" name="selesai">
        </div>
        <div class="mb-3">
        <label for="rilis">Tanggal Rilis</Rilis><br>
        <input type="date" id="rilis" name="rilis">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Novel</button>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<?php foreach ($data['buku'] as $buku) { ?>
    <div class="modal fade" id="formModalEdit<?= $buku['id'] ?>" tabindex="-1" aria-labelledby="formModalEditLabel<?= $buku['id'] ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalEditLabel<?= $buku['id'] ?>">Edit Data Novel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL; ?>/book/update" method="post">
                    <input type="hidden" name="id" value="<?= $buku['id'] ?>">
                        <div class="form-group">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="selesai">Selesai Di Baca</label><br>
                            <input type="date" id="selesai" name="selesai" value="<?= $buku['selesai'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="rilis">Tanggal Rilis</label><br>
                            <input type="date" id="rilis" name="rilis" value="<?= $buku['rilis'] ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Novel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

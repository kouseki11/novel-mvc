<form method="post">
      <div class="form-group">
        <?php foreach($data['buku'] as $buku) :?>
        <input type="hidden" name="id" value="<?= $buku['id'] ;?>">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul'] ;?>">
        </div>
        <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis'] ;?>">
        </div>
        <div class="mb-3">
        <label for="selesai">Selesai Di Baca</label><br>
        <input type="date" id="selesai" name="selesai" value="<?= $buku['selesai'] ;?>">
        </div>
        <div class="mb-3">
        <label for="rilis">Tanggal Rilis</Rilis><br>
        <input type="date" id="rilis" name="rilis" value="<?= $buku['rilis'] ;?>">
        </div>
        <?php endforeach;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Ubah Novel</button>
            </form>

<?php

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $selesai = $_POST['selesai'];
    $rilis = $_POST['rilis'];
}

?>
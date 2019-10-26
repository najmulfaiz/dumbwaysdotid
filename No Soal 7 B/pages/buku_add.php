<?php require 'db.php'; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Tambah Buku
            </div>
            <div class="card-body">
                <form id="form_kategori" enctype="multipart/form-data" action="scripts/store_buku.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" name="stok">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Kategori</label>
                        <select class="form-control" name="category_id">
                            <option value=""> -- Pilih Kategori -- </option>
                            <?php 
                            $query = 'SELECT * FROM categories';
                            $proses= $conn->query($query);
                            while($d = $proses->fetch_object()) {
                                ?><option value="<?php echo $d->id; ?>"><?php echo $d->name; ?></option><?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
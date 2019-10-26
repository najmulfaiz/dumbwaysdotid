<?php require 'db.php'; ?>

<div class="row">
    <div class="col-md-12 mt-3">
        <a href="?page=buku_add" class="btn btn-primary btn-sm">Tambah Buku</a>

        <div class="mt-4">
        <?php
            $query = 'SELECT * FROM categories';
            $proses = $conn->query($query);

            while($data = $proses->fetch_object()) {
                ?>
                <div class="category mb-3">
                    <h5><?php echo $data->name; ?></h5>
                    <?php
                    $q = 'SELECT * FROM books WHERE category_id = "' . $data->id . '"';
                    $p = $conn->query($q);

                    if($p->num_rows) {
                        ?>
                        <div class="row">
                            <?php
                            while($d = $p->fetch_object()) {
                                ?>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src="images/<?php echo $d->image; ?>" alt="Image <?php $data->name; ?>">
                                        <div class="card-body">
                                            <div class="card-title mb-0"><?php echo $d->name; ?></div>
                                            <p class="text-muted" style="font-size: 12px;">Stok : <?php echo $d->stok; ?></p>
                                            <div class="btn-action">
                                                <button class="btn btn-primary btn-sm" <?php echo $d->stok == 0 ? 'disabled':''; ?>>Pinjam</button>
                                                <button class="btn btn-warning btn-sm">Kembalikan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    } else {
                        ?><h6><span class="text-muted"> Data tidak ditemukan</span></h6><?php
                    }
                    ?>
                    <hr>
                </div>
                <?php
            }
        ?>
        </div>
    </div>
</div>
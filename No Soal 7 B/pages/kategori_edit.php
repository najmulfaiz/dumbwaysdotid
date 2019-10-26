<?php 

require 'db.php';

$query = 'SELECT * FROM categories WHERE id = "' . $_GET['id'] . '"';
$proses = $conn->query($query);
$data = $proses->fetch_object();

?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Tambah Kategori
            </div>
            <div class="card-body">
                <form id="form_kategori">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id']; ?>" readonly>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $data->name; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('submit', '#form_kategori', function(e) {
        e.preventDefault();

        $.ajax({
            url: 'scripts/update_kategori.php',
            dataType: 'json',
            data: $(this).serialize(),
            type: 'post',
            success: function(data) {
                alert(data.message);
                
                if(data.success) {
                    location.href = '?page=kategori';
                }
            },
            error: function(xhr) {
                console.log(xhr.status);
            }
        });
    });
</script>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                List Kategori
            </div>
            <div class="card-body">
                <a href="?page=kategori_add" class="btn btn-primary btn-sm">Tambah</a>
                <table class="table table-bordered table-striped table-hover mt-2" id="table_data">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>    
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        load_data();
    });

    function load_data() {
        $.ajax({
            url: 'scripts/get_kategori.php',
            dataType: 'json',
            success: function(data) {
                render_table(data);
            },
            error: function(xhr) {
                console.log(xhr.status);
            }
        });
    }

    function render_table(data) {
        $.each(data, function(index, value) {
            var tag = '<tr>'+
                '<td>' + (index + 1) + '</td>'+
                '<td>' + value.name + '</td>'+
                '<td>'+
                    '<a href="?page=kategori_edit&id='+ value.id +'" class="btn btn-warning btn-sm">Ubah</a>&nbsp;'+
                    '<button class="btn btn-danger btn-sm btn-delete" data-id="' + value.id + '">Hapus</button>'+

                '</td>'+
            '</tr>';

            $('#table_data tbody').append(tag);
        });
    }

    $(document).on('click', '.btn-delete', function() {
        var id = $(this).attr('data-id');

        if(!confirm('Apakah anda yakin?')) {
            return;
        }

        $.ajax({
            url: 'scripts/delete_kategori.php',
            dataType: 'json',
            data: {
                id: id,
            },
            type: 'post',
            success: function(data) {
                alert(data.message);
                
                if(data.success) {
                    location.reload();
                }
            },
            error: function(xhr) {
                console.log(xhr.status);
            }
        });
    });
</script>
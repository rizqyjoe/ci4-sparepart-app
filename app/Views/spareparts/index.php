<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="card bg-light">
        <div class="card-body">
            <h3 class="card-title">Daftar Sparepart</h3>
            <a href="/spareparts/create" class="btn btn-dark mb-3">Tambah Sparepart</a>

            <table class="table table-bordered table-hover" id="sparepartsTable">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Stock</th>
                        <th>Unit</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    $(document).ready(function() {
        $('#sparepartsTable').DataTable({
            ajax: '/spareparts/data',
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'stock' },
                { data: 'unit' },
                { data: 'category_name' },
                {
                    data: 'id',
                    render: function(data) {
                        return `
                            <a href="/spareparts/edit/${data}" class="btn btn-sm btn-outline-dark">Edit</a>
                            <a href="/spareparts/delete/${data}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
                        `;
                    }
                }
            ]
        });
    });
</script>

<?= $this->endSection() ?>

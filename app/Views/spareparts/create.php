<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>

<style>
    .select2-container--default .select2-selection--single {
        height: calc(2.375rem + 2px);
        border: 1px solid #ced4da;
        border-radius: 0.375rem;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 2.375rem;
    }

    .select2-container {
        margin-bottom: 1rem;
    }
</style>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php $units = ['pcs', 'unit', 'set', 'liter', 'meter', 'roll']; ?>

<div class="container mt-4">
    <div class="card bg-light">
        <div class="card-body">
            <h3 class="card-title">Tambah Sparepart</h3>

            <form action="/spareparts/store" method="post">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Sparepart</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stok</label>
                    <input type="number" class="form-control" name="stock" required>
                </div>

                <div class="mb-3">
                    <label for="unit" class="form-label">Satuan</label>
                    <select name="unit" id="unit-select" class="form-control" required>
                        <option value="">Pilih atau ketik satuan</option>
                        <?php foreach ($units as $u): ?>
                            <option value="<?= $u ?>"><?= strtoupper($u) ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Kategori</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">Pilih Kategori</option>
                        <?php foreach ($categories as $cat): ?>
                            <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-dark mt-2">Simpan</button>
                <a href="/spareparts" class="btn btn-outline-dark mt-2">Batal</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    $(document).ready(function() {
        $('#unit-select').select2({
            tags: true,
            placeholder: 'Pilih atau ketik satuan',
            allowClear: true,
            width: '100%'
        });
    });
</script>

<?= $this->endSection() ?>

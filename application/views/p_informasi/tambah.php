    <div class="container-fluid">
        <form action="<?= base_url('p_informasi/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="Gambar" class="form-control" size="20" value="" accept=".png,.jpg,.jpeg,.pdf">
                <?= form_error('Gambar', '<div class="text-small text-danger">', '</div>' ) ?>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea id="Deskripsi" type="text" name="Deskripsi" class="form-control" value=""></textarea>
                <?= form_error('Deskripsi', '<div class="text-small text-danger">', '</div>' )?>
            </div>
            <button class="btn btn-primary btn-small" type="submit"  value="submit"><i class="fas fa-save" >Save</i></button>
            <button class="btn btn-danger btn-small" type="reset" ><i class="fas fa-trash" >Reset</i></button>
        </form>
    </div>
</div>
<div class="container-fluid">
        <form action="<?= base_url('visimisi/tambah_aksi'); ?>" method="post">
            <div class="form-group">
                <label>visi</label>
                <input id="visi" type="text" name="visi" class="form-control" value="">
                <?= form_error('visi', '<div class="text-small text-danger">'), '<?div>' ?>
            </div>
            <div class="form-group">
                <label>misi</label>
                <textarea id="misi" type="text" name="misi" class="form-control" value=""></textarea>
                <?= form_error('misi', '<div class="text-small text-danger">'), '<?div>' ?>
            </div>
            <button class="btn btn-primary btn-small" type="submit"  value="submit"><i class="fas fa-save" >Save</i></button>
            <button class="btn btn-danger btn-small" type="reset" ><i class="fas fa-trash" >Reset</i></button>
        </form>
    </div>
</div>
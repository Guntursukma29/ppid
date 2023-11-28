

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <?= $this->session->flashdata('message'); ?> 
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <a href="<?= base_url('visimisi/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah visimisi</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive" width="100%">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php $no = 1;
                            foreach ($visimisi as $admin): ?>
                            <tbody>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $admin->visi ?></td>
                                    <td><?= $admin->misi ?></td>
                                    <td>
                                        <button data-toggle="modal" data-target="#edit<?= $admin->no ?>"  class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                        <a href="<?= base_url('visimisi/delete/' . $admin->no) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin hapus data ini ?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       <!-- Button trigger modal -->
        <?php foreach ($visimisi as $admin):?> 
       <div class="modal fade" id="edit<?= $admin->no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Visi Misi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="<?= base_url('visimisi/edit/'. $admin->no) ?>" method="post">
                                <div class="form-group">
                                    <label>visi</label>
                                    <input type="text" name="visi" class="form-control" value="<?= $admin->visi ?>">
                                    <?= form_error('visi', '<div class="text-small text-danger">'), '<?div>' ?>
                                </div>
                                <div class="form-group">
                                    <label>misi</label>
                                    <textarea id="misi" type="text" name="misi" class="form-control" value="<?= $admin->misi ?>"></textarea>
                                    <?= form_error('misi', '<div class="text-small text-danger">'), '<?div>' ?>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary btn-small" type="submit" ><i class="fas fa-save" >Save</i></button>
                                    <button class="btn btn-danger btn-small" type="reset" ><i class="fas fa-trash" >Reset</i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?> 
    </div>
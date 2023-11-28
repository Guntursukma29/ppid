

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <?= $this->session->flashdata('message'); ?> 
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <a href="<?= base_url('p_informasi/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Informasi Terbaru</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive" width="100%">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Gambar</th> 
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php $no = 1;
                            foreach ($informasi as $admin): ?>
                            <tbody>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td>
                                        <img height="150px" width="250px" src="<?= base_url('./gambar/'); ?><?= $admin->gambar ?>"></td>
                                    <td ><?= $admin->deskripsi ?></td>
                                    <td>
                                        <a data-toggle="modal" data-target="#edit<?= $admin->no ?>"   class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url('p_informasi/delete/' . $admin->no) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin hapus data ini ?')"><i class="fas fa-trash"></i></a>
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


         <!-- Modal -->
        <?php foreach ($informasi as $admin): $no++;?> 
        <div class="modal fade" id="edit<?= $admin->no?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Informasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="<?= base_url('p_informasi/edit/'. $admin->no) ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="text" value="<?= $admin->gambar; ?>" name="gambar_lama">
                                    <input type="file" name="Gambar" class="form-control" size="20" value="" accept=".png,.jpg,.jpeg,.pdf">
                                    <img src="<?= base_url('./gambar/'. $admin->gambar) ?>" alt="" style="width: 100%;">
                                    <?= form_error('Gambar', '<div class="text-small text-danger">', '</div>' ) ?>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea type="text" name="Deskripsi" class="form-control" value="<?= $admin->deskripsi ?>"></textarea>
                                    <?= form_error('Deskripsi', '<div class="text-small text-danger">', '</div>' ) ?>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary btn-small" type="submit"><i class="fas fa-save" >Save</i></button>
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




<!-- Begin Page Content -->
       <div class="container-fluid">
<!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <?= $this->session->flashdata('message'); ?> 
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <a href="<?= base_url('admin/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Informasi Terbaru</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive" width="100%">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Waktu</th>
                                    <th>Pengarang</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php $no = 1;
                            foreach ($artikel as $admin): ?>
                            <tbody>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $admin->Judul ?></td>
                                    <td><?= $admin->Waktu ?></td>
                                    <td><?= $admin->Pengarang ?></td>
                                    <td>
                                        <img height="150px" width="250px" src="<?= base_url('./gambar/'); ?><?= $admin->Gambar ?>"></td>
                                    <td ><?= $admin->Deskripsi ?></td>
                                    <td>
                                        <a data-toggle="modal" data-target="#edit<?= $admin->id ?>"   class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url('admin/delete/' . $admin->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin hapus data ini ?')"><i class="fas fa-trash"></i></a>
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
         <?php foreach ($artikel as $admin): $no++;?> 
        <div class="modal fade" id="edit<?= $admin->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Artikel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                        <form action="<?= base_url('admin/edit/'. $admin->id) ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <!-- <input type="hidden" name="id" value="<?= $admin->id ?>"> -->
                                    <input type="text" name="Judul" class="form-control" value="<?= $admin->Judul ?>">
                                    <?= form_error('Judul', '<div class="text-small text-danger">', '</div>' ) ?>
                                </div>
                                <div class="form-group">
                                    <label>Waktu</label>
                                    <input type="datetime" name="Waktu" class="form-control" value="<?= $admin->Waktu ?>">
                                    <?= form_error('Waktu', '<div class="text-small text-danger">', '</div>' ) ?>
                                </div>
                                <div class="form-group">
                                    <label>Pengarang</label>
                                    <input type="text" name="Pengarang" class="form-control" value="<?= $admin->Pengarang?>">
                                    <?= form_error('Pengarang', '<div class="text-small text-danger">', '</div>' )?>
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="text" value="<?= $admin->Gambar; ?>" name="gambar_lama">
                                    <input type="file" name="Gambar" class="form-control" size="20" value="" accept=".png,.jpg,.jpeg,.pdf">
                                    <img src="<?= base_url('./gambar/'. $admin->Gambar) ?>" alt="" style="width: 100%;">
                                    <?= form_error('Gambar', '<div class="text-small text-danger">', '</div>' ) ?>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea type="text" name="Deskripsi" class="form-control" value="<?= $admin->Deskripsi ?>"></textarea>
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


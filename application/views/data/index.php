<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <p>Generate Lorem Ipsum placeholder text. Select the number of characters, words, sentences or paragraphs, and hit generate!
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta aut fuga recusandae ad vero voluptates voluptatibus iusto expedita voluptas animi itaque, ratione commodi pariatur. Quia veniam hic eius iure quis.
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?= $this->session->flashdata('message'); ?>
            <div class="d-flex justify-content-between">
                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>NAMA</th>
                            <th>JK</th>
                            <th>TANGGAL LAHIR</th>
                            <th>AGAMA</th>
                            <th>KELAS</th>
                            <th>JURUSAN</th>
                            <th><i class="fa fa-cogs"></i></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>NIS</th>
                            <th>NAMA</th>
                            <th>JK</th>
                            <th>TANGGAL LAHIR</th>
                            <th>AGAMA</th>
                            <th>KELAS</th>
                            <th>JURUSAN</th>
                            <th><i class="fa fa-cogs"></i></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($siswa as $data) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $data['nis']; ?></td>
                                <td><?= $data['name']; ?></td>
                                <td><?= $data['jk']; ?></td>
                                <td><?= $data['tgl']; ?></td>
                                <td><?= $data['agama']; ?></td>
                                <td><?= $data['kelas']; ?></td>
                                <td><?= $data['jurusan']; ?></td>
                                <td style="width: 55px;">
                                    <a href="<?= base_url(); ?>data/update/<?= $data['id']; ?>" class="badge badge-warning"><i class="fa fa-fw fa-edit"></i> Ubah</a>
                                    <a href="<?= base_url(); ?>data/Delete/<?= $data['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Untuk menghapus data?');"><i class="far fa-trash-alt"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->





<!-- modal tambah submenu -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Data siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('data'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS SISWA" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="NAMA SISWA" required>
                    </div>
                    <div class="form-group">
                        <select name="jk" id="" class="form-control" required>
                            <option value="">JENIS KELAMIN</option>
                            <option value="L">LAKI - LAKI</option>
                            <option value="P">PEREMPUAN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="DATE" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <select name="agama" id="" class="form-control" required>
                            <option>KRISTEN</option>
                            <option>KATOLIK</option>
                            <option>HINDU</option>
                            <option>KONGHUCHU</option>
                            <option>BUDHA</option>
                            <option>ISLAM</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="kelas" id="" class="form-control" required>
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="jr" id="" class="form-control" required>
                            <option>AK</option>
                            <option>PB</option>
                            <option>AP</option>
                            <option>PM</option>
                            <option>MM</option>
                            <option>RPL</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>





<!-- akhir modal tambah submenu -->



<!-- Modal -->
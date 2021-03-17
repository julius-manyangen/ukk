<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <?= $title; ?>
            </h6>
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
                            <th>KELAS</th>
                            <th>JURUSAN</th>
                            <th><i class="fa fa-cogs"></i></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>14001</td>
                            <td>JULIUS</td>
                            <td>L</td>
                            <td>31-07-2002</td>
                            <td>XII RPL 2</td>
                            <td>REKAYASA PERANGKAT LUNAK</td>
                            <td style="width: 55px;">
                                <a href="<?= base_url(); ?>keuangan/Edit_diskon_p/" class="badge badge-warning"><i class="fa fa-fw fa-edit"></i> Ubah</a>
                                <a href="<?= base_url(); ?>keuangan/Delete_diskon/" class="badge badge-danger" onclick="return confirm('Yakin Untuk menghapus data?');"><i class="far fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
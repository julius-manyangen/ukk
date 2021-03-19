<div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h2>update data siswa</h2>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $getId['id']; ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS SISWA" required value="<?= $getId['nis']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="NAMA SISWA" required value="<?= $getId['name']; ?>">
                        </div>
                        <div class="form-group">
                            <select name="jk" id="" class="form-control" required>
                                <option>JENIS KELAMIN</option>
                                <option value="L">LAKI - LAKI</option>
                                <option value="P">PEREMPUAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="DATE" class="form-control" id="date" name="date" required value="<?= $getId['tgl']; ?>">
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


                        <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
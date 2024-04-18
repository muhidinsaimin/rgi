<?php include_once('header.php'); ?>

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Tambah Data Jurusan</div>
                    <div class="col-4">
                        <a href="?m=jurusan&s=view" class="btn btn-lg btn-secondary float-end">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="?m=jurusan&s=save" method="post">
                        <div class="mb-3">
                            <input type="text" name="jurusan" class="form-control" placeholder="Nama Jurusan" required autofocus autocomplete="on">
                        </div>
                        <div class="mb-3">
                            <input type="number" name="kapasitas" class="form-control" placeholder="Kapasitas Jurusan" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="terisi" class="form-control" placeholder="Terisi" required>
                        </div>
                        <div class="mb-3">
                            <input type="reset" class="btn btn-secondary">&nbsp;
                            <input type="submit" value="Simpan" class="btn btn-primary" name="simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
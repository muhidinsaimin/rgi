<?php include_once('header.php'); ?>

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Data Jurusan</div>
                    <div class="col-4">
                        <a href="?m=jurusan&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jurusan</th>
                                <th>Kapasitas</th>
                                <th>Terisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once('setting.php');
                            $sql    = "SELECT * FROM jurusan";
                            $result = mysqli_query($koneksi, $sql);
                            if(mysqli_num_rows($result) > 0) {
                                $no = 1;
                                while($r = mysqli_fetch_assoc($result)) {
                                    echo '<tr>
                                            <td>'.$no.'</td>
                                            <td>'.$r['jurusan'].'</td>
                                            <td>'.$r['kapasitas'].'</td>
                                            <td>'.$r['terisi'].'</td>
                                            <td>
                                                <a href="?m=jurusan&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="?m=jurusan&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin jurusan akan dihapus?, Hapus 1 jurusan akan menghapus semua data siswa yang ada pada jurusan tersebut.\')">Hapus</a>
                                            </td>
                                         </tr>';
                                         $no++;
                                }
                            } else {
                                echo "<tr>
                                        <td colspan=5 align='center'>Data Kosong</td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
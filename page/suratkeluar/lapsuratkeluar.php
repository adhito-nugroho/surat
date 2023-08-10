<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <h4>Laporan Surat Keluar</h4>
            </div>
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <!-- form start -->
                                <form method="POST" action="page/suratkeluar/surat_keluar_laporan.php">
                                        <div class="mb-3">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun">
                                            <?php $tahun = (int)date('Y');?>
                                                <option> <?=$tahun;?> </option>                  
                                                <?php
                                                $tahun1 = $tahun - 1;
                                                $tahun2 = $tahun - 2;
                                                ?>
                                                <option value="<?=$tahun1;?>"><?=$tahun1;?></option>
                                                <option value="<?=$tahun2;?>"><?=$tahun2;?></option>
                                            </select>                   
                                        </div>
                                        <div class="mb-3">
                                            <label>Bulan</label>
                                            <select class="form-control" name="bulan">
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="Nopember">Nopember</option>
                                                <option value="Desember">Desember</option>
                                            </select>                 
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="simpan" class="btn btn-primary">Cetak Excel</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</main>
<?php 
  if (isset($_POST['simpan'])) {
    $nomor = $_POST['nomor'];
    $tanggal = $_POST['tanggal'];
    $tujuan = $_POST['tujuan'];
    $perihal = $_POST['perihal'];
    $keterangan = $_POST['keterangan'];
    $file = $_FILES['file']['name']; 
    $lokasi = $_FILES['file']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "file/".$file);

    }

    if (isset($upload)){
        $sql = $koneksi->query("insert into tkeluar (nomor,tanggal,tujuan,perihal,keterangan,file) values('$nomor','$tanggal','$tujuan','$perihal','$keterangan','$file')"); 
        if($sql){
    ?>
      
        <script type="text/javascript">
          alert ("Data Berhasil Disimpan")
          window.location.href="?page=suratkeluar&aksi=home";
        </script>
    <?php
    }
  }

?>
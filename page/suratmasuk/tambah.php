<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <h4>Input Surat Masuk</h4>
            </div>
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <!-- form start -->
                                    <form enctype="multipart/form-data" method="post">
                                        <div class="mb-3">
                                            <label>Nomor Surat</label>
                                            <input type="text" name="nomor" class="form-control" required="">                   
                                        </div>
                                        <div class="mb-3">
                                            <label>Tanggal Surat</label>
                                            <input type="date" name="tanggal" class="form-control" required="">                 
                                        </div>
                                        <div class="mb-3">
                                            <label>Pengirim</label>
                                            <input type="text" name="pengirim" class="form-control" required="">                   
                                        </div>
                                        <div class="mb-3">
                                            <label>Perihal</label>
                                            <input type="text" name="perihal" class="form-control" required="">                   
                                        </div>
                                        <div class="mb-3">
                                            <label>Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control" required="">                   
                                        </div>
                                        <div class="mb-3">
                                            <label>File</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
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
    $pengirim = $_POST['pengirim'];
    $perihal = $_POST['perihal'];
    $keterangan = $_POST['keterangan'];
    $file = $_FILES['file']['name']; 
    $lokasi = $_FILES['file']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "file/".$file);

    }

    if (isset($upload)){
        $sql = $koneksi->query("insert into tmasuk (nomor,tanggal,pengirim,perihal,keterangan,file) values('$nomor','$tanggal','$pengirim','$pengirim','$keterangan','$file')"); 
        if($sql){
    ?>
      
        <script type="text/javascript">
          alert ("Data Berhasil Disimpan")
          window.location.href="?page=suratmasuk&aksi=home";
        </script>
    <?php
    }
  }

?>
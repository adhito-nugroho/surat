<?php
    $kode = $_GET['id'];
    $sql = $koneksi->query("delete from tkeluar where nomor='$kode'");
    
    if($sql){
?>
        <script type="text/javascript">
          alert ("Data Berhasil Dihapus")
          window.location.href="?page=suratkeluar&aksi=home";
        </script>
<?php
    }
?>
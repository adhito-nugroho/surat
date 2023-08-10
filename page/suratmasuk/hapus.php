<?php
    $kode = $_GET['id'];
    $sql = $koneksi->query("delete from tmasuk where nomor='$kode'");
    
    if($sql){
?>
        <script type="text/javascript">
          alert ("Data Berhasil Dihapus")
          window.location.href="?page=suratmasuk&aksi=home";
        </script>
<?php
    }
?>
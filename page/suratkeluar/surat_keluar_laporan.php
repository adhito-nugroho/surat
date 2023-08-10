 <?php
$koneksi = new mysqli("localhost","root","","surat");
function bulan($bulan)
            {
            Switch ($bulan){
                case "Januari" : $bulan="1";
                    Break;
                case "Februari" : $bulan="2";
                    Break;
                case "Maret" : $bulan="3";
                    Break;
                case "April" : $bulan="4";
                    Break;
                case "Mei" : $bulan="5";
                    Break;
                case "Juni" : $bulan="6";
                    Break;
                case "Juli" : $bulan="7";
                    Break;
                case "Agustus" : $bulan="8";
                    Break;
                case "September" : $bulan="9";
                    Break;
                case "Oktober" : $bulan="10";
                    Break;
                case "November" : $bulan="11";
                    Break;
                case "Desember" : $bulan="12";
                    Break;
                }
            return $bulan;
            }            
            
$bulan = bulan($_POST['bulan']);
            
?>
        <h3>LAPORAN DATA SURAT KELUAR</h3>
        <h3>BULAN <?php echo strtoupper($_POST['bulan'])?> <H3>
        <table border="1" cellpadding="3">
            <tr>
              <th>No</th>
              <th>Nomor Surat</th>
              <th>Tanggal Surat</th>
              <th>Tujuan</th>
              <th>Perihal</th>
              <th>Keterangan</th>
            </tr>
          <?php            
            $nomer = 1;
            $bulan = bulan($_POST['bulan']);
            $tahun = $_POST['tahun'];
            if ($bulan==''||$tahun==''){
              $sql = $koneksi->query("select * from tkeluar");
            }
            else 
            {
              $sql = $koneksi->query("select * from tkeluar where month(tanggal)='$bulan' and year(tanggal)='$tahun'");
            }
            while ($data = $sql->fetch_assoc()) {
            ?>
              
              <tr>
                <td><?php echo $nomer; ?></td> 
                <td><?php echo $data['nomor']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['tujuan']; ?></td>
                <td><?php echo $data['perihal']; ?></td>
                <td><?php echo $data['keterangan']; ?></td>

              </tr>
            <?php $nomer++;} ?>
          </tbody>
        </table>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=surat.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
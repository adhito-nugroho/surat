<main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Surat Masuk</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header pull-right">
                <span><a href="?page=suratmasuk&aksi=tambah" class="float-right btn btn-dark btn-sm right pull-right"><i class="fa fa-fw fa-plus-circle"></i> Input Surat Masuk</a></span>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>No</th>  
                        <th>Nomor Surat</th>  
                        <th>Tanggal Surat</th>
                        <th>Pengirim Surat</th>
                        <th>Perihal</th>
                        <th>Keterangan</th>
                        <th>File</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $nomer = 1;
                      $direktori ='file/';
                      $sql = $koneksi->query("select * from tmasuk");
                      while ($data = $sql->fetch_assoc()) {
                      ?>
                      <tr>
                          <td><?php echo $nomer; ?></td>
                          <td><?php echo $data['nomor']; ?></td>
                          <td><?php echo date('d/m/Y', strtotime($data['tanggal'])); ?></td>
                          <td><?php echo $data['pengirim']; ?></td>
                          <td><?php echo $data['perihal']; ?></td>
                          <td><?php echo $data['keterangan']; ?></td>
                          <td>
                            <?php
                              echo "<a href='".$direktori.$data['file']."'>".'<i class="fa fa-envelope"></i>'."</a>";
                            ?>
                          </td>
                          <td>    
                            <a href="?page=suratmasuk&aksi=ubah&id=<?php echo $data['nomor']; ?>""><i class="fa fa-edit"></i></a>
                            <a onclick="return confirm('Apakah anda yakin menghapus data ini ?')" href="?page=suratmasuk&aksi=hapus&id=<?php echo $data['nomor'];?>""><i class="fa fa-trash"></i></a>
                          </td>
                      </tr>
                      <?php $nomer++;}?>

                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
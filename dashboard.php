<?php
    
  $sql = $koneksi->query("select count(nomor) as jumlah from tkeluar");
  $data = $sql->fetch_assoc();

?>
<main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
              <div class="card-body py-5">Jumlah Surat Masuk</div>
              <div class="card-footer d-flex">
                <?php echo $data['jumlah']; ?>
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100">
              <div class="card-body py-5">Danger Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php

    

if (isset($_GET['page'])||isset($_GET['aksi'])){
    $page = $_GET['page'];
    $aksi = $_GET['aksi'];

if ($page == "suratkeluar") {
    if ($aksi == 'home'){
        include "page/suratkeluar/suratkeluar.php";
    }

    if ($aksi == 'tambah'){
        include "page/suratkeluar/tambah.php";
    }

    if ($aksi == 'ubah'){
        include "page/suratkeluar/ubah.php";
    }

    if ($aksi == 'hapus'){
        include "page/suratkeluar/hapus.php";
    }
}

if ($page == "suratmasuk") {
    if ($aksi == 'home'){
        include "page/suratmasuk/suratmasuk.php";
    }

    if ($aksi == 'tambah'){
        include "page/suratmasuk/tambah.php";
    }

    if ($aksi == 'ubah'){
        include "page/suratmasuk/ubah.php";
    }

    if ($aksi == 'hapus'){
        include "page/suratmasuk/hapus.php";
    }
}

if ($page == "lapsuratkeluar") {
    if ($aksi == 'home'){
        include "page/suratkeluar/lapsuratkeluar.php";
    }

    if ($aksi == 'tampil'){
        include "page/suratkeluar/lapsuratkeluar.php";
    }

}

if ($page=='dashboard')
{
    if ($aksi == 'dashboard'){
    include "dashboard.php";
    }
}


}
?>
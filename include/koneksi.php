<?php
    $koneksi = new mysqli("localhost","root","","surat");
    
    if ($koneksi -> connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi -> connect_error;
    exit();
    }

?>

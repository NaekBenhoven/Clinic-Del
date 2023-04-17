<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    $project_directory = "/Klinik-IT-Del";
    $dir = $project_directory;
    
    error_reporting (E_ALL ^ E_NOTICE);

    if(isset($_GET['id'])){
        $id = $_GET['id']; 
        }else{
        $id = "id tidak ada";
        }

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $dir.'/daftar_keluhan' :
            require "views/admin/daftar_keluhan.php";
            break;
        case $dir.'/detail_keluhan_admin?id='.$id.'' :
            require "views/admin/detail_keluhan.php";
            break;
        case $dir.'/' :
            require "views/index.php";
            break;
        case $dir.'/peta' :
            require "views/peta.php";
            break;
        case $dir.'/lapor_keluhan' :
            require "views/user/lapor_keluhan.php";
            break;
        case $dir.'/keluhan_process' :
            require "process/keluhan_process.php";
            break;
        case $dir.'/profil' :
            require "views/user/profil.php";
            break;
        case $dir.'/riwayat_keluhan' :
            require "views/user/riwayat_keluhan.php";
            break;
        // case $dir.'/detail_keluhan?id='.$_GET['id'].'' :
        case $dir.'/detail_keluhan?id='.$id.'' :
            require "views/user/detail_keluhan.php";
            break;
        case $dir.'/balas_tanggapan_process' :
            require "process/balas_tanggapan_process.php";
            break;
        case $dir.'/login' :
            require "views/login.php";
            break;
        case $dir.'/login_process' :
            require "process/login/login_process.php";
            break;
        case $dir.'/logout' :
            require "process/login/logout.php";
            break;
        case $dir.'/registration' :
            require "views/registration.php";
            break;
        case $dir.'/registration_process' :
            require "process/registration_process.php";
            break;
        case $dir.'/artikel-hidup-sehat' :
            require "views/artikel-hidup-sehat.php";
            break;
        case $dir.'/artikel-kesehatan-mental' :
            require "views/artikel-kesehatan-mental.php";
            break;
        case $dir.'/artikel-manfaat-minum' :
            require "views/artikel-manfaat-minum.php";
            break;
        case $dir.'/daftar_artikel' :
            require "views/admin/daftar_artikel.php";
            break;
        case $dir.'/tambah_artikel' :
            require "views/admin/tambah_artikel.php";
            break;
        case $dir.'/tambah_artikel_process' :
            require "process/tambah_artikel_process.php";
            break;
        case $dir.'/detail_artikel?id='.$id.'' :
            require "views/admin/detail_artikel.php";
            break;
        case $dir.'/hapus_artikel?id='.$id.'' :
            require  "process/hapus_artikel_process.php";
            break;
        case $dir.'/edit_artikel?id='.$id.'' :
            require "views/admin/edit_artikel.php";
            break;
        case $dir.'/edit_artikel_process' :
            require "process/edit_artikel_process.php";
            break;

    default:
            http_response_code(404);
            echo "404";
            break;
    }

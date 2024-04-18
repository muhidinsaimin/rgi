<?php
$modul = (isset($_GET['m'])) ? $_GET['m'] : 'home';
switch ($modul) {
    case 'home': default:
        include('home.php');
        break;    
    case 'jurusan':
        include('jurusan/index.php');
        break;
    case 'santri':
        include('santri/index.php');
        break;
}
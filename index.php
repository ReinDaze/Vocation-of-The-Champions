<?php

$request = $_SERVER['REQUEST_URI'];
$parsedUrl = parse_url($request, PHP_URL_PATH);

$route = trim($parsedUrl, '/');

switch ($route) {
    case '':
        require 'landing.php';
        break;
    case 'fashiondesign':
        require 'fashion-design.php';
        break;
    case 'fotografi':
        require 'fotografi.php';
        break;
    case 'mobilelegends':
        require 'ml.php';
        break;
    case 'solovocal':
        require 'solo-vocal.php';
        break;
    case 'uiuxdesign':
        require 'ui-ux-design.php';
        break;
    case 'announcement':
        require 'announcement.php';
        break;
    case 'lomba':
        require '#kategori';
        break;
    case 'timeline':
        require '#timeline';
        break;
    case 'berita':
        require '#berita';
        break;
    case 'kontak':
        require 'ui-ux-design.php';
        break;
    case 'grandfinalist':
        require 'grand-finalist.php';
        break;
    default:
        http_response_code(404);
        echo "<h1>404\ - Halaman tidak ditemukan</h1>";
        break;
}

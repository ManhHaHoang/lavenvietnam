<!DOCTYPE html>
<html lang="vi">
<?php
$ver = time();
$sitename = 'Laven Việt Nam';
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if ($_SERVER['REQUEST_URI'] == '/') {
    $homeclass= 'is-home';
} else {
    $homeclass= '';
}

?>
<head>
    <title>Laven Việt Nam</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="icon" href="/images/favicon/favicon.png" sizes="16x16 32x32" type="image/png">
    <link rel="icon" href="/images/favicon/favicon.ico" type="image/x-icon" />
    <meta name="theme-color" content="#198838" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#198838">

    <link rel="stylesheet" href="/assets/css/master.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/layout.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/slide.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/hgmh.css">
    <script type="text/javascript" src="/assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="/assets/js/slider.js"></script>
</head>
<body class="<?= $homeclass ?>">
    <?php include 'layout/header.php' ?>
    <?php include 'layout/navigation.php' ?>

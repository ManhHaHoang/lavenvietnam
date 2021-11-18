<!DOCTYPE html>
<html lang="vi">
<?php
$ver = time();
$sitename = 'Your Company';
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if ($_SERVER['REQUEST_URI'] == '/') {
    $homeclass= 'is-home';
} else {
    $homeclass= '';
}

?>
<head>
    <title>Your Company</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="icon" href="/images/favicon/favicon.png" sizes="16x16 32x32" type="image/png">
    <link rel="stylesheet" href="/assets/css/master.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/layout.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/slide.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/hgmh.css">
</head>
<body class="<?= $homeclass ?>">
    <?php include 'layout/header.php' ?>
    <?php include 'layout/navigation.php' ?>

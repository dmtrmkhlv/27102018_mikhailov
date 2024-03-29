<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php foreach ($cssFiles as $file): ?>
        <link rel="stylesheet" href="<?=$file?>">
    <?php endforeach;?>
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <a class="logo" href="/catalog"></a>
        <nav class="navigation">
            <a class="navigation__item" href="#">Женщинам</a>
            <a class="navigation__item" href="#">Мужчинам</a>
            <a class="navigation__item" href="#">Детям</a>
            <a class="navigation__item" href="#">Новинки</a>
            <a class="navigation__item" href="#">О нас</a>
        </nav>
        <div class="user-info">
            <div class="user-info__pic"></div>
            <div class="user-info__text">
                Привет, Алексей (<span class="text_active">Выйти</span>)
            </div>
        </div>
        <div class="bascet">
            <div class="bascet__pic"></div>
            <div class="bascet__text">Корзина(5)</div>
        </div>
    </header>
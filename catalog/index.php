<?php
    $cssFiles = [
        '/css/style.css',
        '/css/catalog.css'
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>

<div class="wrapper">
    <header class="header">
        <div class="logo"></div>
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
    <main>
        <h1 class="main-header">Мужчинам</h1>
        
        <div class="catalog">

        </div>  
        <div class="pagination"></div>
    </main>
    <footer class="footer">
    <div class="footer-block">
        <h4>КОЛЛЕКЦИИ</h4>
        <a href="http://">Женщинам</a>
        <a href="http://">Мужчинам</a>
        <a href="http://">Детям</a>
        <a href="http://">Новинки</a>
    </div>
    <div class="footer-block">
        <h4>МАГАЗИН</h4>
        <a href="http://">О нас</a>
        <a href="http://">Доставка</a>
        <a href="http://">Работай с нами</a>
        <a href="http://">Контакты</a>
    </div>
    <div class="footer-block">
        <h4>МЫ В СОЦИАЛЬНЫХ СЕТЯХ</h4>
        <p>Сайт разработан в Inordic.ru</p>
        <p>2018 Все права защищены</p>
        <div class="footer-block-social">
            <a href="http://" class="footer-block-social-item twitter-icon"></a>
            <a href="http://" class="footer-block-social-item twitter-fb"></a>
            <a href="http://" class="footer-block-social-item twitter-instagram"></a>
        </div>
    </div>
</footer>    
</div>
<script src="/js/catalog.js"></script>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>
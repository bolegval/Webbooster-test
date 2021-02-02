<?php
require($_SERVER['DOCUMENT_ROOT'] . '/main.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webbooster</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<?= showProduct($products) ?>

<div class="modal">
    <h3 class="modal__title">Оформление заказа</h3>
    <button class="modal__close">
        <svg height="16px" viewBox="0 0 612 612" width="16px">
            <polygon points="612,36.004 576.521,0.603 306,270.608 35.478,0.603 0,36.004 270.522,306.011 0,575.997 35.478,611.397 
				            306,341.411 576.521,611.397 612,575.997 341.459,306.011"/>
        </svg>
    </button>
    <form action="" method="post" class="form">
        <label class="form__label">
            <span class="form__name">Имя</span>
            <input class="form__input" required type="text" name="name" placeholder="Введите Ваше имя">
          </label>
          <label class="form__label">
            <span class="form__name">Телефон</span>
            <input class="form__input" required type="tel" name="phone" placeholder="+7 (___) ___-__-__">
          </label>
          <label class="form__label">
            <span class="form__name">Email</span>
            <input class="form__input" required type="email" name="email" placeholder="Введите Вашу почту">
          </label>
          <label class="form__label">
            <span class="form__name">Название товара</span>
            <input class="form__input" name="product">
          </label>
          <input type="submit" class="form__submit btn" value="Оформить заказ">
    </form>    
</div>
<script src="/js/script.js"></script>
</body>


</html>
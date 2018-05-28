<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../../css/reset.css" rel="stylesheet" type="text/css" />
    <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../css/product_style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="../../js/scripts.js"></script>
    <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../../js/tabs.js"></script>
    <title>Главная</title>
</head>
<body>
<div id="block-body">
    <div>
        <?php include ("header.php");  ?>
    </div>
    <div id="container">
        <div>
            <h2><?php print $data['Type_Id']." ".$data['Title']?></h2>
            <img src="images/product_img/<?php print $data['image']?>" alt="laptop">
        </div>
        <div>
            <div id="price"><p>Цена <?php print $data['price']?> руб.</p></div>
            <form>
                <input type="button" value="Добавить в корзину" id="addInBasket">
            </form>
            <div id="about">
                <?php print $data['MiniDescription']?>
                <!--<h3>Описание</h3>
                <p>Экран: 10.1"</p>
                <p>Технология экрана: IPS</p>
                <p>Разрешение экрана: 1280x800</p>
                <p>Операционная система: Windows 10</p>
                <p>Оперативная память: 2 ГБ</p>
                <p>Цвет: черный</p>-->
            </div>
        </div>
    </div>
    <div id="about_product">
        <div id="tabs">
            <ul class="tabs">
                <li class="tab active"><a href="#description" class="active">Описание</a></li>
                <li class="tab"><a href="#params">Характеристики</a></li>
                <li class="tab"><a href="#delivery">Доставка</a></li>
            </ul>
            <div class="tabs-content">
                <div id="description">
                    <h3>Описание</h3>
                    <p><?php print $data['Description']?> </p>
                </div>
                <div id="params">
                    <h3>Характеристики</h3>
                    <p>Цвет........................<?php print $data['color']?></p>
                    <p>Размер экрана........................<?php print $data['ScreenSize']?></p>
                    <p>Оперативная память........................<?php print $data['RAM']?></p>
                    <p>Количество ядер........................<?php print $data['CoreNumber']?></p>
                    <p>Память........................<?php print $data['Memory']?></p>
                    <p>Технология экрана........................<?php print $data['ScreenTechnology']?></p>
                    <p>Операционная система........................<?php print $data['OS']?></p>
                    <p>Камера........................<?php print $data['Camera']?></p>
                </div>
                <div id="delivery">
                    <h2>Доставка</h2>
                    <p>
                        Наш магазин использует собственную курьерскую службу, именно поэтому цена перевозки всегда будет
                        минимальной. Если у вас появились вопросы относительно условий получения того или иного товара,
                        позвоните нам, и мы с удовольствием сообщим вам все подробности.
                    </p>
                    <h2>Самовывоз в Минске</h2>
                    <p>
                        Любой продукт или товар, который клиент покупает в нашем магазине, можно забрать самостоятельно в пункте в
                        ыдачи товара, предварительно известив об этом оператора магазина. На пункте выдачи товара вы сразу получите
                        свой заказ, проверите его работоспособность и после совершения оплаты заберете покупку. Наш сотрудник
                        объяснит все тонкости использования выбранной вами техники и заполнит гарантийный талон.
                        Безусловно, мы предоставляем своим покупателям чек за оплаченный товар.
                    </p>
                    <h2>Адрес</h2>
                    <p>
                        Минск, ул. Сурганова, 27 (ст.м. Академия наук)
                    </p>
                    <h2>Время работы</h2>
                    <p>
                        Пондельник - пятница 10:00 - 20:30 <br>
                        Суббота 10:00 - 18:00 <br>
                        Воскресенье 10:00 - 15:00 <br>
                    </p>
                    <h2>Телефоны</h2>
                    <ol>
                        <li id="item1">+375 29 666-68-08</li>
                        <li id="item2">+375 33 666-68-08</li>
                        <li id="item3">+375 25 666-68-08</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php include ("footer.php");  ?>
    </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../../css/reset.css" rel="stylesheet" type="text/css" />
    <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../css/contacts_style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="../../js/scripts.js"></script>
    <title>Главная</title>
</head>
<body>
<div id="block-body">
    <div>
        <?php include ("header.php");  ?>
    </div>

    <div style="display: flex">
        <div>
            <?php include ("sidebar.php");  ?>
        </div>
        <div id="content">
            <div>
                <h2>Контакты</h2>
            </div>
            <div>
                <p>
                    Если вы хотите оформить заказ, сделать это можно в любой момент через корзину на сайте.
                    По телефону оформить заказ можно ежедневно без выходных с 9.00 до 21.00.
                </p>
                <h3>Телефоны</h3>
                <ol>
                    <li id="item1">+375 29 666-68-08</li>
                    <li id="item2">+375 33 666-68-08</li>
                    <li id="item3">+375 25 666-68-08</li>
                    <li id="item4">+375 17 21-50-271</li>
                    <li id="item5">imarket.by</li>
                    <li id="item6">+375 29 666-68-08</li>
                </ol>

                <p><b>По вопросам кредита и рассрочки:</b> <a href="mailto:abc@abc.ru">k@imarket.by</a></p>
                <p><b>По вопросам оптовых закупок и работы с корпоративными клиентами:</b> <a href="mailto:abc@abc.ru">
                        opt@imarket.by</a></p>
                <p><b>По вопросам гарантийного и постгарантийного обслуживания:</b><a href="mailto:abc@abc.ru">
                        service@imarket.by</a></p>
                <p><b>Другие вопросы:</b> <a href="mailto:abc@abc.ru">info@imarket.by</a></p>

                <div id="requisites">
                    <img src="images/credit.png" alt="credit">
                    <b style="font-size: 20px">Реквизиты</b>
                    <p>
                        <b>Полное наименование:</b> ООО «Аймаркет Трейд»<br>
                        <b>Юридический адрес:</b> 220012, г.Минск, ул.Сурганова, дом 27, офис 30 <br>
                        <b>GPS координаты:</b> N 53.924956 E 27.595193 <br>
                        <b>Интернет-магазин зарегистрирован в торговом реестре:</b> 06 февраля 2017 <br>
                        <b>УНП:</b> 192743895 <br>
                        <b>Директор:</b> Каплич Дмитрий Васильевич, действующий на основании Устава <br>
                        <b>Наименование банка:</b> ОАО "Белгазпромбанк", г. Минск, ул. Могилевская, 41 МФО OLMPBY2X <br>
                        <b>Расчетный счет:</b> BY54OLMP30121000394550000933
                    </p>
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
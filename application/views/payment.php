<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../../css/reset.css" rel="stylesheet" type="text/css" />
    <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../css/payment_style.css" rel="stylesheet" type="text/css" />

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
                <h2>Оплата</h2>
            </div>
            <div>
                <p>
                    Mobile-sale.ru работает на белорусском рынке с 2014 года. Огромный опыт позволил нам создать действительно
                    удобный магазин с огромным выбором товаров и высококачественным сервисом.
                    У нас вы можете воспользоваться любым популярным способом оплаты.
                </p>
            </div>
            <div class="item">
                <img src="images/purse.png" alt="purse">
                <b style="font-size: 20px">Оплата наличными</b>
                <p>
                    Оплатить проще всего наличными деньгами.
                    Независимо от того, какой способ вы предпочтёте, расчёт возможен исключительно в белорусских рублях.
                    Оплатить заказ можно у курьера после доставки товара или в момент получения в пункте самовывоза.
                </p>
            </div>
            <div class="item">
                <img src="images/cardpayment.png" alt="card">
                <b style="font-size: 20px">Оплата картой</b>
                <p>
                    Вы можете оплатить товары картой с помощью терминала у курьера либо в пункте самовывоза. А также, в любом
                    отделении банка или в инфокиоске. К оплате принимаются карты Visa, MasterCard, Maestro, Белкарт и др.
                    Если вы заказали товар с доставкой, предупредите, пожалуйста, заранее оператора о том, что намерены
                    рассчитаться картой.
                </p>
            </div>
            <div class="item">
                <img src="images/credit.png" alt="credit">
                <b style="font-size: 20px">Кредит</b>
                <p>
                    В Mobile-sale всегда можно воспользоваться различными программами кредитования.
                    Условия и сроки кредитования вы можете выбирать самостоятельно.
                </p>
            </div>
            <div class="item">
                <img src="images/credit.png" alt="credit">
                <b style="font-size: 20px">Рассрочка</b>
                <p>
                    Большинство товаров в нашем магазине можно приобрести в рассрочку.
                    Информация о возможных условиях рассрочки представлена на карточке товара.
                </p>
            </div>


        </div>

    </div>


    <div>
        <?php include ("footer.php");  ?>
    </div>
</div>

</body>
</html>
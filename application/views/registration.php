<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../../css/reset.css" rel="stylesheet" type="text/css" />
    <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../css/registration_style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
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
            <div style="border-bottom: 1px solid black; width: 100%">
                <h2>Регистрация</h2>
            </div>
            <form id="input_data">
                <div class="field">
                    <label for="name">Имя</label>
                    <input type="text" name="name" placeholder="Вася" />
                </div>
                <div class="field">
                    <label for="secondName">Фамилия</label>
                    <input type="text" name="secondName" placeholder="Пупкин"/>
                </div>
                <div class="field">
                    <label for="address">Место жительства</label>
                    <input type="text" name="address" placeholder="г. Витебск, пр. Московский, 70 кв 5"/>
                </div>
                <div class="field">
                    <label for="eMail">E-mail адрес</label>
                    <input type="text" name="eMail" placeholder="vasyaPupkin@mail.ru"/>
                </div>
                <div class="field">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" />
                </div>
                <div class="field">
                    <label for="phone">Телефон</label>
                    <input type="text" name="phone" placeholder="375331234567"/>
                </div>
                <input type="submit" value="Регистрация">
            </form>
               <!-- <label>Ваш e-mail адрес
                    <input type="text" class="field" placeholder="vasyaPupkin@mail.ru">
                </label><br>
                <label>Ваше имя
                    <input type="text" placeholder="Вася" class="field">
                </label><br>
                <label>Ваша фамилия
                    <input type="text" placeholder="Пупкин" class="field">
                </label><br>
                <label>Пароль
                    <input type="password" placeholder="E-mail" class="field">
                </label><br>
                <label>Номер телефона
                    <input type="text" placeholder="375331234567" class="field">
                </label><br>
                <label>Адрес
                    <input type="text" placeholder="г. Витебск, пр. Московский, 70 кв 5" class="field">
                </label>-->


        </div>
    </div>


    <div>
        <?php include ("footer.php");  ?>
    </div>
</div>

</body>
</html>
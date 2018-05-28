<div id="header">
    <div id="header_navigation">
        <ul id="navigation-list">
            <li><a href="/main">Главная</a></li>
            <li><a href="">Блог</a></li>
            <li><a href="/delivery">Доставка</a></li>
            <li><a href="/payment">Оплата</a></li>
            <li><a href="/contacts">Контакты</a></li>
        </ul>
    </div>
    <div id="block-reg">
        <ul id="reg-list">
            <li><a href="/registration">Регистрация</a></li>
            <li>
                <a class="active" id="login-trigger" href="#" onclick="showLoginContent()">Вход</a>
                <div id="login-content" style="display: none">
                    <form>
                        <label>
                            E-mail
                            <input id="username" type="email" name="Email" placeholder="Ваш email">
                        </label>
                        <label>
                            Пароль
                            <input id="password" type="password" name="Password" placeholder="Пароль">
                        </label>

                        <input type="submit" id="submit" value="Войти">
                        <label><input type="checkbox" checked="checked">Запомнить</label>
                    </form>
                </div>
            </li>
            <li id="basket"><a href="" >Корзина пуста</a></li>
        </ul>
    </div>
    <div id="header_middle_block">
        <div id="logo">
            <div><img src="images/logo_img.png" alt="logo"></div>
            <div id="name">
                Mobile-sale.ru <br/>
                Продажа телефонов и ноутбуков
            </div>

        </div>
        <div id="header_contacts">
            +375(33)305-91-81 <br>
           Москва, шоссе Энтузиастов 45/31, офис 453
        </div>
    </div>
</div>
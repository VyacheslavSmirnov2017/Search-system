<div id="sidebar">
    <div id="block_search">
        <form action="">
            <p>
                <input type="text" name="searchInput" id="searchInput" placeholder="Поиск по названию" />
                <input type="submit" name="search_submit" id="form_submit"/>
            </p>
        </form>
        <div id="sidebar_navigation">
            <h2>Навигация</h2>
            <ul>
                <li>
                    <a href="/phone">Телефоны</a>
                    <img src="images/arrow.png" alt="plus" class="plus" onclick="showPhoneList()">
                    <div  style="display: none" id="Phone_char">
                        <form>
                            <p><b>Производители</b></p>
                            <div>
                                <input type="checkbox" id="samsung">
                                <label for="samsung">Samsung</label>
                            </div>
                            <div>
                                <input type="checkbox" id="apple">
                                <label for="apple">Apple</label>
                            </div>
                            <div>
                                <input type="checkbox" id="xiaomi">
                                <label for="xiaomi">Xiaomi</label>
                            </div>
                            <p><b>Цена</b></p>
                            <div class="input">
                                <label>от<input type="text" id="start-price" name="startPrice" value="1000"></label>
                                <label>до<input type="text" id="end-price" name="endPrice" value="30000"></label>руб
                            </div>
                            <p><b>Тип операционной системы</b></p>
                            <div>
                                <input type="checkbox" id="iOS">
                                <label for="iOS">iOS</label>
                            </div>
                            <div>
                                <input type="checkbox" id="android">
                                <label for="android">Android</label>
                            </div>
                            <div>
                                <input type="checkbox" id="windows">
                                <label for="windows">Windows Phone</label>
                            </div>
                            <p><b>Количество ядер</b></p>
                            <div class="input">
                                <label>от<input type="text" id="start-core" name="startCore" value="1"></label>
                                <label>до<input type="text" id="end-core" name="endCore" value="10"></label>
                            </div>
                            <p><b>Камера</b></p>
                            <div class="input">
                                <label>от<input type="text" id="start-MP" name="startMP" value="1"></label>
                                <label>до<input type="text" id="end-MP" name="endMP" value="10"></label>МП
                            </div>
                            <p><b>Размер экрана</b></p>
                            <div class="input">
                                <label>от<input type="text" id="start-inch" name="startInch" value="1"></label>
                                <label>до<input type="text" id="end-inch" name="endInch" value="10"></label>дюйм
                            </div>
                            <p><b>RAM</b></p>
                            <div>
                                <input type="checkbox" id="Mb512">
                                <label for="Mb512">512 Мб</label>
                            </div>
                            <div>
                                <input type="checkbox" id="Gb1">
                                <label for="Gb1">1 Гб</label>
                            </div>
                            <div>
                                <input type="checkbox" id="Gb2">
                                <label for="Gb2">2 Гб</label>
                            </div>
                            <div>
                                <input type="checkbox" id="Mb1500">
                                <label for="Mb1500">1,5 Гб</label>
                            </div>
                            <div>
                                <input type="checkbox" id="Gb3">
                                <label for="Gb3">3 Гб</label>
                            </div>
                            <div>
                                <input type="checkbox" id="Gb4">
                                <label for="Gb4">4 Гб</label>
                            </div>

                            <input type="submit" value="Подобрать">
                        </form>
                    </div>
                </li>
                <li>
                    <a href="/laptop">Ноутбуки</a>
                    <img src="images/arrow.png" alt="plus" class="plus" onclick="showLaptopList()">
                    <ul style="display: none" id="Laptop_char">
                        <li>Тип</li>
                        <li>Цена</li>
                        <li>Производитель</li>
                        <li>Диагональ</li>
                        <li>Процессор</li>
                        <li>Количество ядер</li>
                        <li>Объём оперативной памяти</li>
                    </ul>
                </li>

                <li>
                    <a href="/tablet">Планшеты</a>
                    <img src="images/arrow.png" alt="plus" class="plus" onclick="showTabletList()">
                    <ul style="display: none" id="Tablet_char">
                        <li>Цена</li>
                        <li>Производитель</li>
                        <li>Диагональ</li>
                        <li>Количество ядер</li>
                        <li>Операционная система</li>
                        <li>Объём оперативной памяти</li>
                    </ul>
                </li>
                <li>
                    <a href="/tv">Телевизоры</a>
                    <img src="images/arrow.png" alt="arrow" class="plus" onclick="showTVList();">
                    <ul id="TV_char" style="display: none">
                        <li>Цена</li>
                        <li>Производитель</li>
                        <li>Диагональ</li>
                        <li>Технология экрана</li>
                        <li>Цвет</li>
                        <li>Разрешение экрана</li>
                    </ul>
                </li>
                <li>
                    <a href="/ebook">Электронные книги </a>
                    <img src="images/arrow.png" alt="arrow" class="plus" onclick="showEbookList();">
                    <ul id="Ebook_char" style="display: none">
                        <li>Цена</li>
                        <li>Производитель</li>
                        <li>Диагональ</li>
                        <li>Технология экрана</li>
                        <li>Цвет</li>
                        <li>Память</li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</div>
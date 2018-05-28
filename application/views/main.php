<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../../css/reset.css" rel="stylesheet" type="text/css" />
    <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../css/content_styles.css" rel="stylesheet" type="text/css" />

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
                <h2>Телефоны</h2>
                <div>
                    <div class='productList'>
                <?php
                $phones = $data[0];
                for ($i = 0 ; $i < 3; ++$i)
                {
                    $row = mysqli_fetch_assoc($phones);
                    echo "
                        <div class='phoneProduct'>
                            <img src='images/product_img/".$row['image']."' alt='phone'>
                            <p><a href='product?id=".$row['id']."'>".$row['Title']."</a></p>
                            <p>".$row['price']." р.</p>
                            <button>В корзину</button>
                        </div>";
                }?>
                    </div>
                    <p align='right'>
                        <a href='/phone'>Перейти к каталогу телефонов</a>
                    </p>
                </div>
                <h2>Ноутбуки</h2>
                <div>
                    <div class='productList'>
                        <?php
                        $laptops = $data[2];
                        for ($i = 0; $i < 3; ++$i)
                        {
                            $row = mysqli_fetch_assoc($laptops);
                            echo "
                        <div class='laptopProduct'>
                            <img src='images/product_img/".$row['image']."' alt='phone'>
                            <p><a href='product?id=".$row['id']."'>".$row['Title']."</a></p>
                            <p>".$row['price']." р.</p>
                            <button>В корзину</button>
                        </div>";
                        }?>
                    </div>
                    <p align='right'>
                        <a href='/laptop'>Перейти к каталогу телефонов</a>
                    </p>
                </div>
                <h2>Планшеты</h2>
                <div>
                    <div class='productList'>
                        <?php
                        $tablets = $data[4];
                        for ($i = 0; $i < 3; ++$i)
                        {
                            $row = mysqli_fetch_assoc($tablets);
                            echo "
                        <div class='tabletProduct'>
                            <img src='images/product_img/".$row['image']."' alt='phone'>
                            <p><a href='product?id=".$row['id']."'>".$row['Title']."</a></p>
                            <p>".$row['price']." р.</p>
                            <button>В корзину</button>
                        </div>";
                        }?>
                    </div>
                    <p align='right'>
                        <a href='/tablet'>Перейти к каталогу телефонов</a>
                    </p>
                </div>
                <h2>Телевизоры</h2>
                <div>
                    <div class='productList'>
                        <?php
                        $tvs = $data[1];
                        for ($i = 0; $i < 3; ++$i)
                        {
                            $row = mysqli_fetch_assoc($tvs);
                            echo "
                        <div class='TVproduct'>
                            <img src='images/product_img/".$row['image']."' alt='phone'>
                            <p><a href='product?id=".$row['id']."'>".$row['Title']."</a></p>
                            <p>".$row['price']." р.</p>
                            <button>В корзину</button>
                        </div>";
                        }?>
                    </div>
                    <p align='right'>
                        <a href='/tv'>Перейти к каталогу телефонов</a>
                    </p>
                </div>
                <h2>Электронные книги</h2>
                <div>
                    <div class='productList'>
                        <?php
                        $ebooks = $data[3];
                        for ($i = 0; $i < 3; ++$i)
                        {
                            $row = mysqli_fetch_assoc($ebooks);
                            echo "
                        <div class='Ebookproduct'>
                            <img src='images/product_img/".$row['image']."' alt='phone'>
                            <p><a href='product?id=".$row['id']."'>".$row['Title']."</a></p>
                            <p>".$row['price']." р.</p>
                            <button>В корзину</button>
                        </div>";
                        }
                        ?>
                    </div>
                    <p align='right'>
                        <a href='/ebook'>Перейти к каталогу телефонов</a>
                    </p>
                </div>

                <?php /*include ("content.php");  */?>
            </div>
        </div>


        <div>
            <?php include ("footer.php");  ?>
        </div>
    </div>
</body>
</html>
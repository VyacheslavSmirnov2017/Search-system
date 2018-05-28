<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../../css/reset.css" rel="stylesheet" type="text/css" />
    <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../css/TV_style.css" rel="stylesheet" type="text/css" />

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

            <?php
            $rows = mysqli_num_rows($data);
            for ($i = 0 ; $i < $rows; ++$i)
            {
                $row = mysqli_fetch_assoc($data);
                echo "<div class='product'>
                            <p><img src='images/product_img/".$row['image']."' alt='Иллюстрация' align='left' vspace='5' hspace='5'>
                            <a href='/product?id=".$row['id']."'><h2>".$row['Title']."</h2></a></p>
                            <p>".$row['MiniDescription']."</p>
                            <h3>Цена ".$row['price']." руб.</h3>
                        </div>";
            }
            ?>
            <!--<div id="product">
                <p><img src="images/TV1.jpg" alt="Иллюстрация" align="left" vspace="5" hspace="5">
                    <a href="/product"><h2>Lorem ipsum dolor sit amet.</h2></a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh .</p>
                <h3>Цена 7000 руб.</h3>
                </p>
            </div>

            <div id="product">
                <p><img src="images/TV2.jpg" alt="Иллюстрация" align="left" vspace="5" hspace="5">
                    <a href="/product"><h2>Lorem ipsum dolor sit amet.</h2></a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh .</p>
                <h3>Цена 7000 руб.</h3>
                </p>
            </div>

            <div id="product">
                <p><img src="images/TV3.jpg" alt="Иллюстрация" align="left" vspace="5" hspace="5">
                    <a href="/product"><h2>Lorem ipsum dolor sit amet.</h2></a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh .</p>
                <h3>Цена 7000 руб.</h3>
                </p>
            </div>-->
        </div>
    </div>


    <div>
        <?php include ("footer.php");  ?>
    </div>
</div>

</body>
</html>
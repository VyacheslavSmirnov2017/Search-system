<?php
class Model_Main extends Model
{

    public function get15records()
    {
        $link = DB_Connect::get_connect();
        $queryPhone = "Select * from Product where Type_Id = 1 LIMIT 0, 3";
        $queryTv = "Select * from Product where Type_Id = 2 LIMIT 0, 3";
        $queryLaptop = "Select * from Product where Type_Id = 3 LIMIT 0, 3";
        $queryEbook = "Select * from Product where Type_Id = 4 LIMIT 0, 3";
        $queryTablet = "Select * from Product where Type_Id = 5 LIMIT 0, 3";

        $phone = mysqli_query($link, $queryPhone) or die("Ошибка " . mysqli_error($link));
        $tv = mysqli_query($link, $queryTv) or die("Ошибка " . mysqli_error($link));
        $laptop = mysqli_query($link, $queryLaptop) or die("Ошибка " . mysqli_error($link));
        $ebook = mysqli_query($link, $queryEbook) or die("Ошибка " . mysqli_error($link));
        $tablet = mysqli_query($link, $queryTablet) or die("Ошибка " . mysqli_error($link));
        $result = [$phone, $tv, $laptop, $ebook, $tablet];


        return $result;
    }
}
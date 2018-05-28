<?php
class Model_Tablet extends Model
{
    private $tablet = 5;

    public function getAllTablet()
    {
        $link = DB_Connect::get_connect();
        $query = "Select * from Product where Type_Id = ".$this->tablet;
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        return $result;
    }
}
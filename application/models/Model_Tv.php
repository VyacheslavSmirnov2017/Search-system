<?php
class Model_Tv extends Model
{
    private $tv = 2;

    public function getAllTv()
    {
        $link = DB_Connect::get_connect();
        $query = "Select * from Product where Type_Id = ".$this->tv;
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        return $result;
    }
}
<?php
class Model_Laptop extends Model
{
    private $laptop = 3;

    public function getAllLaptop()
    {
        $link = DB_Connect::get_connect();
        $query = "Select * from Product where Type_Id = ".$this->laptop;
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        return $result;
    }
}
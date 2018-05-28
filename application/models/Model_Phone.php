<?php
class Model_Phone extends Model
{
    private $mobile = 1;

    public function getAllPhone()
    {
        $link = DB_Connect::get_connect();
        $query = "Select * from Product where Type_Id = ".$this->mobile;
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        return $result;
    }
}
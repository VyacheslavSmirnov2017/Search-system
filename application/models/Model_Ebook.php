<?php
class Model_Ebook extends Model
{
    private $ebook = 4;

    public function getAllEbook()
    {
        $link = DB_Connect::get_connect();
        $query = "Select * from Product where Type_Id = ".$this->ebook;
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        return $result;
    }
}
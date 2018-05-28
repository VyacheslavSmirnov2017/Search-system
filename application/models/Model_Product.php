<?php

class Model_Product extends Model
{
    private $id;

    function __construct($id = 1)
    {
        $this->id = $id;
    }

    public function getDataById()
    {
        $link = DB_Connect::get_connect();
        $queryProduct = "Select * from Product where id = ".$this->id;
        $resultProduct = mysqli_query($link, $queryProduct) or die("Ошибка " . mysqli_error($link));
        $rowProduct = mysqli_fetch_array($resultProduct);

        $queryType = "Select type from Type where id = ".$rowProduct['Type_Id'];
        $resultType = mysqli_query($link, $queryType) or die("Ошибка " . mysqli_error($link));
        $rowType = mysqli_fetch_array($resultType);


        $rowProduct['Type_Id'] = $rowType['type'];

        return $rowProduct;
    }
}
<?php

$db_name = 'mysql:host=localhost;db_name=shop_db';
$db_user = 'root';
$db_password = '';

$connection = new PDO($db_name,$db_user,$db_password);

if($connection){
    echo ' Connected';
};

function unique_id()
{
    $char = '0123456789abcdefghijklmopqrstvuxyzABCDEFGHIJKLMNOPQRSTVXYZ';

    $charlength = strlen($char);
    $randomStr = '';

    for ($i = 0; $i < $charlength; $i++) {
        $randomStr .= $char[mt_rand(0, $charlength - 1)];
    }

    return $randomStr;
}

?>
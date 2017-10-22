<?php
include "vars.php";
$url = "$ways";      
$content = @file_get_contents($url);
print_r ($content);                   // получаем JSON из API        
//$parsed_data = json_decode($content,true);             // готовим JSON к разбору               
foreach ($content as $pars => $par){               // просматриваем полученный массив
echo 'код региона - '.$par["data"]["0"]["regionCode"];}// получаем код региона       
$rcode = $par["data"]["0"]["regionCode"];              // запоминаем в переменную(необязательно)



?>
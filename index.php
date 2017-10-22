<?php //$url = "http://budget.gov.ru/epbs/registry/grants/data";
     // $url = "http://openapi.clearspending.ru/restapi/v3/customers/get/?spzregnum=01731000070";
        $url = "http://cdn1.sdlabs.ru/spending/2015/";
        $json = @file_get_contents($url);
//$json = json_decode($json,true);
//var_dump($json);?>

<?php
echo 'page';
$text= json_decode($json,true); 
//$text = print_r($text);
$fp = fopen ("test.txt", "a");  
fwrite($fp,"$text\n");
fclose($fp);  
?>



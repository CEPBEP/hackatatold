<?php
        include "vars.php"; 
        $url = "$region";      
        $content = @file_get_contents($url);                   // получаем JSON из API        
        $parsed_data = json_decode($content,true);             // готовим JSON к разбору               
        foreach ($parsed_data as $pars => $par){               // просматриваем полученный массив
        echo 'код региона - '.$par["data"]["0"]["regionCode"];}// получаем код региона       
        $rcode = $par["data"]["0"]["regionCode"];              // запоминаем в переменную(необязательно)
        echo '<pre>';print_r ($parsed_data);                   
        $fp = fopen ("test.txt", "a");                         // кладём переменную в текстовый файл
        fwrite($fp,"$rcode\n");                                // дописываем файл с новой строки
        fclose($fp);                                           // закрываем файл
?>
<?php       /*
if (($fp = fopen("01.11.12.141_2015.csv", "r")) !== FALSE) {
	while (($data = fgetcsv($fp, 0, ";")) !== FALSE) {
		$list[] = $data;
	}
    fclose($fp);
    echo $list[0][0];
    foreach ($list[0] as $lis => $li) {
    //echo $li["0"].'<br>';//["0"]["0"];
   /// echo $li[0][1][0];
    }echo $list[1][0];
    echo '<pre>';
    //print_r($list);
    echo '</pre>';
}       */


    // открываем файл данных для чтения
$f = fopen("example.csv", "rt") or die("Ошибка!");
    // открываем цикл для чтения данных
for ($i=0; $data = fgetcsv($f,1000,";"); $i++)
{
    // берём количество полей в строке
    $num = count($data);
    // выводим данные
    echo "<h3>Строка $i</h3>";// (полей: $num):</h3>";
    for ($c=0; $c<$num; $c++) echo "<!--[$c]:--> $data[$c]<br>";
}
    // закрываем соединение с файлом
fclose($f);?>
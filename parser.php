<style>
/*::-webkit-scrollbar {
    width: 1px;
}*/
</style>
<?php //$url = "http://budget.gov.ru/epbs/registry/grants/data";
      //$url = "http://openapi.clearspending.ru/restapi/v3/customers/get/?spzregnum=01731000070";
        $url = "http://openapi.clearspending.ru/restapi/v3/suppliers/get/?inn=6450614330&kpp=645001001";
        $json = @file_get_contents($url);
        $json = json_decode($json,true);
      //var_dump($json);?>


<?php
foreach ($json as $pars => $par) {
    echo $par["total"].' - <br> ';
    echo $par["data"]["0"]["kpp"].' - <br> ';
    echo $par["data"]["0"]["factualAddress"].' - <br> ';
    echo 'код региона - ';
    echo $par["data"]["0"]["regionCode"];//["countryCode"].' - <br> ';
     //echo $pars["1"]["1"].$pars[1].$pars[6].'<br>';
    //echo $json['fullname'];
   //echo '<pre>';
  // echo $par;}
 //echo $json ['data']['1'];
echo '<pre style="">';
print_r ($json);
echo '<pre>';
}
?>

<?php
//foreach ($json as $pars => $par) {
//    foreach ($par as $pa => $p) {

//echo $pa["data"][0];//["1"]["kpp"].'<br>';

//    }
  //  echo $par["total"].' - ';
  //  echo $pars["1"]["1"].$pars[1].$pars[6].'<br>';
    //echo $json['fullname'];
   //echo '<pre>';
  // echo $par;   }
 //echo $json ['data']['1'];
echo '<pre style="">';
//print_r ($json);
echo '<pre>';
//}
?>


<?php
/*
echo '<div class="balance">';
echo '<p class="status"><span style="
color: #fff;font-weight: 100;
">balance check</span> ';
echo $json ['status'];
echo '</p>';
echo '<tr><td>';
echo '<p>';
echo $json ['data']['available_balance'];
echo ' btc</p>';
echo '</div>';
*/?>
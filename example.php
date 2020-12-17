<?php
require_once 'bondyield.php'; 

$stldate = date("Y-m-d",strtotime($_POST["settl_date"]));
$settl_price = $_POST["settl_price"];
$settl_matdate = date("Y-m-d",strtotime($_POST["settl_matdate"]));
$coupon_rate = $_POST["coupon_rate"];
$focpy = $_POST["focpy"];
$redval = $_POST["redval"];
//parameters: settlement date, price, maturity date, coupon rate, frequency of coupon payment, redemption value
//printf("%f\n",BondYield::Calculate('2020-09-22',100.83,'2030-05-11',5.79,2,105));
round(printf("%f\n",BondYield::Calculate($stldate,$settl_price,$settl_matdate,$coupon_rate,$focpy,$redval)),4);
//print mktime(0, 0, 0, 3, 31,  2038 );
?>

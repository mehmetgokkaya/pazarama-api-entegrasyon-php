<?php
$barkod=$_GET['barkod'];
$fiyat=$_GET['fiyat'];
$pfiyati=$_GET['pfiyati'];
$url = "https://isortagimapi.pazarama.com/product/updatePrice";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: Bearer   //postman ile aldığınız token kodu// ",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
"items": [
{
"code": "$barkod",
"listPrice": $pfiyati,
"salePrice": $fiyat
}
]
}

DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

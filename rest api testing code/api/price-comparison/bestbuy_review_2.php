<?php

$apikey = "84u6rzhxeqf9qratdbwur4fw"; 
$keyword = "computer | laptop";
$product_id =   "888772881627";
$product_id_2 = "888772881627";
$method = "GET";
$host = "http://api.remix.bestbuy.com";
//$host = "http://api.bestbuy.com";
//$query="(upc>$product_id&upc<$product_id_2)";
//$query="(upc=$product_id)";
//$query="(sku in(5729048,7528703,4839357,8153056,8610161))";
$query="(sku=4312001)";
//$query="(sku=4312001)";
//$query="(customerReviewAverage>=4&customerReviewCount>100)";
//$uri = "/v1/products".$query;
$uri = "/v1/reviews".$query;
//$uri = "/beta/products/openBox".$query;
//$uri = "/v1/reviews/2242984.json";

$params["apiKey"] = $apikey;
//$params["callback"] = "MyCallback";
//$params["pageSize"] = "100";
$params["format"] = "json";
//$params["show"] = "sku,rating,submissionTime";

//$params["show"] = "sku,upc,name,customerReviewAverage,customerReviewCount";
$params["show"] = "all";

$canonicalized_query = array();
foreach ($params as $param => $value) {
	$param = str_replace("%7E", "~", rawurlencode($param));
	$value = str_replace("%7E", "~", rawurlencode($value));
	$canonicalized_query[] = $param . "=" . $value;
}
$canonicalized_query = implode("&", $canonicalized_query);

$request = $host . $uri . "?" . $canonicalized_query;
var_dump($request);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$request);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

$output = curl_exec($ch); 
$info = curl_getinfo($ch);
echo "<br>";
echo "<br>";
echo "<br>";

curl_close($ch); 

//echo($output); 
$return = json_decode( $output ); 
var_dump($return);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
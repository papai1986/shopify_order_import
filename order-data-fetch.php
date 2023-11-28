<?php
/*curl -X GET "https://your-development-store.myshopify.com/admin/api/2023-07/orders.json?status=any" \
-H "X-Shopify-Access-Token: {access_token}"
$ch = curl_init();*/

// https://8c86ed-3.myshopify.com/

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://8c86ed-3.myshopify.com/admin/api/2023-10/orders.json?status=any',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'X-Shopify-Access-Token: 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'
  ),
));

$response = curl_exec($curl);
$decode= json_decode($response, true);
curl_close($curl);

/*echo "<pre>";
print_r($decode);
echo "</pre>";*/

echo $response;

?>
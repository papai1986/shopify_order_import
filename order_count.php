<?php
/*curl -X GET "https://your-development-store.myshopify.com/admin/api/2023-07/orders/count.json?status=any" \
-H "X-Shopify-Access-Token: {access_token}"
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https:/{storename}.storehippo.com/api/1.1/entity/ms.products");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('access-key', '{access-key}'));
curl_setopt($ch, CURLOPT_HEADER, 0); // do not bring headers
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($ch);
$products = json_decode($output);
print_r($products);

$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
*/
?>
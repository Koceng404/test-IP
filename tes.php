<?php
//https://hidemy.name/en/proxy-list/?type=5

$url = 'http://dynupdate.no-ip.com/ip.php';
$proxy = ''; //Proxy
//$proxyauth = 'user:password';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth); // Jika Proxy membutuhkan password
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); //Type Proxy
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);

echo $curl_scraped_page;

?>

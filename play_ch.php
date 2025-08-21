<?php
//$manifest = file_get_contents("http://113.160.13.153/jptv4/get.php?id=Hqm-m7jqkFlA1CloJoaJZQ==");
$ch = curl_init(); // はじめ

//オプション
curl_setopt($ch, CURLOPT_URL, "http://113.160.13.153/jptv4/get.php?id=Hqm-m7jqkFlA1CloJoaJZQ=="); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$file =  curl_exec($ch);
echo $file;
curl_close($ch);
//終了
exit();
?>

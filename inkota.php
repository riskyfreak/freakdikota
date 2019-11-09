<?php

require("config.php");

function angka($length)
{
	$characters = '0123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;

}

function nono($nono)
{
	$number = array();
	$number[0] = angka(8);
	$number[1] = angka(9);
	$number[2] = angka(10);
	$number[3] = angka(11);
	//$number[4] = angka(11);
	$random = rand(0,4);
	 $nume =  $number[$random];
	return "$nume";
	//echo $num.$num."\n";
}


$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m"; 
$lblue2="\033[1;36m";
system("clear");
// link reff
echo "$green2 SELAMAT DATANG PEJUANG RECEH\n";
sleep(2);
echo "
$lblue2 **    **  
 $yellow2 **  **   $purple2 ***** $blue2 ***** $lblue2 ************
  $green2 ****    $blue2 *     $yellow2 *****  *    *      *
 $yellow2 **  **   $putih2 *      *      *    *      *
$lblue2 **    **  $purple2 ***** $blue2 *****  *    *      * $putih2 \n";
sleep(2);
echo "

               $lblue2  BOT$putih2                   
           $green2  Aplikasi indkota$putih2          
\n";
sleep(2);
while(true){
//==========================
for($no = 1; $no < 9999999999; $no++){

angka($length);
$num = nono($nono);
// echo $num;
//////==============

echo "$yellow2
Tunggu Dulu Yah Anjink $green Guk Guk\n";
sleep(2);

echo "$lblue Lagi Cek Password";
sleep(1);
echo"$lblue2 •";
sleep(1);
echo"$green2 •";
sleep(1);
echo"$yellow2 •";
sleep(1);
echo"$blue2 •";
$pw = "$katasandi@gmail.com";
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://craterapi.com/api/account');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers = array();
    $headers[] = 'Locale: in';
    $headers[] = 'Device-ID: 0975c541-0210-4f8a-b946-bd78bbcd5ce5';
    $headers[] = 'Push-Token: fNuNrVi4O54:APA91bFXiZCirb7Ij-r1cDmhQ-cC3WhZlES-WRU6z6AvMgnmWqnBnIelQPnl8ahlfTb9b7kQ1a0bsixIYJ_katoqmb_c0c1YPUxD2ukDkivmzQrnyB6YQvu0qEK6OGmPQ_DF_SdbR2mc';
    $headers[] = 'Bundle-ID: com.dentwireless.dentapp';
    $headers[] = 'Build-Version: 927';
    $headers[] = 'Display-Density: 2.75';
    $headers[] = 'Security-AppBundleIsValid: notDetermined';
    $headers[] = 'Security-EnvironmentIsValid: notDetermined';
    $headers[] = 'Authorization: Bearer eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiIrNjI4Mzg1NzI3MTc3NyIsImF1dGgiOiJST0xFX1VTRVIifQ.3QjAUBRQvNu46adVcTOfWW1fvaa_E5PuSYd0SXfNvce-CnD-GUmcfi2vq-r7TvJm03K0OnFuBNdZxQtZ5YhNcw';
    $headers[] = 'OS-Version: 9';
    $headers[] = 'Security-AppCertificateHash: notDetermined';
    $headers[] = 'Bundle-Version: 2.3.0';
    $headers[] = 'Device-Type: Android';
    $headers[] = 'Device-TimeZone: Asia/Jakarta';
    $headers[] = 'Content-Type: application/json; charset=utf-8';
    $headers[] = 'Device-Locale: in_ID';
    $headers[] = 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 9; Mi MIX 3 MIUI/V10.3.3.0.PEEMIXM)';
    $headers[] = 'Host: craterapi.com';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    $js = json_decode($result,true);
    $penemail = $js["pendingEmail"];
    //var_dump($result);    

echo "$lblue2    Yes Sukses......Bro\n";
sleep(1);
echo "$putih2 Wait Yah$green2  Tuyul Kamu Sedang Bikin Akun\n";
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
    //$headers[] = 'sec-fetch-site: cross-site';
    $headers[] = 'accept-language: en-US,en;q=0.9';
    //$headers[] = 'accept-encoding: gzip, deflate';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    //var_dump($result);
sleep(2);

//////// ======

$url1 = "http://ugg.idkota.com/System/Invite/invite_sub";
$data1 = "phone=08$num&member_id=$member_id&lang=indonesian";
// invite daftar
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = "Origin: http://ugg.idkota.com";
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'X-Requested-With: XMLHttpRequest';
    $headers[] = "Referer: $link";
    $headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
    $headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    //var_dump($result,true);
    $cc = json_decode($result, true);
    $cc1 = $cc["msg"];
    $cino = "添加成功了！";
    
if ($cc1 == $cino) {
   echo "$lblue2
Sukses Daftar Akun $no Cuk\n$putih";
sleep(2);
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://ugg.idkota.com/Invite/download?lang=indonesian");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
    $headers[] = "Referer: $link";
    $headers[] = 'accept-language: en-US,en;q=0.9';
    $headers[] = 'X-Requested-With: com.eagle.web.browser.internet.privacy.browser';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    //var_dump($result);
sleep(1);

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://play.google.com/store/apps/details?id=com.earnmoney.idinfo");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers = array();
    $headers[] = 'Host: play.google.com';
    $headers[] = 'sec-fetch-mode: navigate';
    $headers[] = 'sec-fetch-site: cross-site';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
    $headers[] = "Referer: http://ugg.idkota.com/Invite/download?lang=indonesian";
    $headers[] = 'accept-language: en-US,en;q=0.9';
    $headers[] = 'X-Requested-With: com.eagle.web.browser.internet.privacy.browser';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    //var_dump($result);
sleep(1);

$data2 = "lang=indonesian&member_phone=08$num&member_password=M3mbusuk&member_repassword=M3mbusuk&device_id=$num$num";
//while(true){
	//echo time();
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://ugg.idkota.com/User/User/reg');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'x-requested-with: com.earnmoney.idinfo';
    $headers[] = 'sec-fetch-site: cross-site';
    $headers[] = 'accept-language: en-US,en;q=0.9';
    //$headers[] = 'accept-encoding: gzip, deflate';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    $json = json_decode($result,true);
    $devicee = $json["data"]["member"]["member_device_id"];
    $tokenn = $json["data"]["token"];
    //var_dump($result);
    
$burl = "https://ugg.idkota.com/Content/Content/read";
    
$urlbaca1 = "$burl?member_token=$tokenn%3D%3D&content_id=17531&lang=indonesian&device_id=$devicee";
$urlbaca2 = "$burl?member_token=$tokenn%3D%3D&content_id=17532&lang=indonesian&device_id=$devicee";
$urlbaca3 = "$burl?member_token=$tokenn%3D%3D&content_id=17533&lang=indonesian&device_id=$devicee";
$urlbaca4 = "$burl?member_token=$tokenn%3D%3D&content_id=17534&lang=indonesian&device_id=$devicee";
$urlbaca5 = "$burl?member_token=$tokenn%3D%3D&content_id=17535&lang=indonesian&device_id=$devicee";
$urlbaca6 = "$burl?member_token=$tokenn%3D%3D&content_id=17527&lang=indonesian&device_id=$devicee";
$urlbaca7 = "$burl?member_token=$tokenn%3D%3D&content_id=17528&lang=indonesian&device_id=$devicee";
$urlbaca8 = "$burl?member_token=$tokenn%3D%3D&content_id=17529&lang=indonesian&device_id=$devicee";

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlbaca1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'x-requested-with: com.earnmoney.idinfo';
    $headers[] = 'sec-fetch-site: cross-site';
    $headers[] = 'accept-language: en-US,en;q=0.9';
    //$headers[] = 'accept-encoding: gzip, deflate';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    //var_dump($result);
    $json = json_decode($result, true);
    echo "Kamu ".$json["msg"]."$green2 FB : X CEM\n";
    for ($second2=13;$second2>-1;$second2--){
        echo "\r$putih ".$second1.$second2."$yellow Tuyul Kamu Sedang Membaca$lblue2  Tunggu Yah$putih      ";
        sleep(1);
       echo "\r                                         \r";
     }
    
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlbaca2);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'x-requested-with: com.earnmoney.idinfo';
    $headers[] = 'sec-fetch-site: cross-site';
    $headers[] = 'accept-language: en-US,en;q=0.9';
    //$headers[] = 'accept-encoding: gzip, deflate';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    $json = json_decode($result, true);
    echo "Kamu ".$json["msg"]."$green2 FB : X CEM\n";
    for ($second2=13;$second2>-1;$second2--){
        echo "\r$putih ".$second1.$second2."$yellow Tuyul Kamu Sedang Membaca$lblue2  Tunggu Yah$putih      ";
        sleep(1);
       echo "\r                                         \r";
     }
    
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlbaca3);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'x-requested-with: com.earnmoney.idinfo';
    $headers[] = 'sec-fetch-site: cross-site';
    $headers[] = 'accept-language: en-US,en;q=0.9';
    //$headers[] = 'accept-encoding: gzip, deflate';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    $json = json_decode($result, true);
    echo "Kamu ".$json["msg"]."$green2 FB : X CEM\n";
    for ($second2=13;$second2>-1;$second2--){
        echo "\r$putih ".$second1.$second2."$yellow Tuyul Kamu Sedang Membaca$lblue2  Tunggu Yah$putih      ";
        sleep(1);
       echo "\r                                         \r";
     }
    
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlbaca4);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'x-requested-with: com.earnmoney.idinfo';
    $headers[] = 'sec-fetch-site: cross-site';
    $headers[] = 'accept-language: en-US,en;q=0.9';
    //$headers[] = 'accept-encoding: gzip, deflate';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    $json = json_decode($result, true);
    echo "Kamu ".$json["msg"]."$green2 FB : X CEM\n";
    for ($second2=13;$second2>-1;$second2--){
        echo "\r$putih ".$second1.$second2."$yellow Tuyul Kamu Sedang Membaca$lblue2  Tunggu Yah$putih      ";
        sleep(1);
       echo "\r                                         \r";
     }
    
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlbaca5);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'x-requested-with: com.earnmoney.idinfo';
    $headers[] = 'sec-fetch-site: cross-site';
    $headers[] = 'accept-language: en-US,en;q=0.9';
    //$headers[] = 'accept-encoding: gzip, deflate';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    $json = json_decode($result, true);
    echo "Kamu ".$json["msg"]."$green2 FB : X CEM\n";
    for ($second2=13;$second2>-1;$second2--){
        echo "\r$putih ".$second1.$second2."$yellow Tuyul Kamu Sedang Membaca$lblue2  Tunggu Yah$putih      ";
        sleep(1);
       echo "\r                                         \r";
     }
    
    
 $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlbaca6);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'x-requested-with: com.earnmoney.idinfo';
    $headers[] = 'sec-fetch-site: cross-site';
    $headers[] = 'accept-language: en-US,en;q=0.9';
    //$headers[] = 'accept-encoding: gzip, deflate';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    $json = json_decode($result, true);
    echo "Kamu ".$json["msg"]."$green2 FB : X CEM\n";
    for ($second2=13;$second2>-1;$second2--){
        echo "\r$putih ".$second1.$second2."$yellow Tuyul Kamu Sedang Membaca$lblue2  Tunggu Yah$putih      ";
        sleep(1);
       echo "\r                                         \r";
     }
    
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlbaca7);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'x-requested-with: com.earnmoney.idinfo';
    $headers[] = 'sec-fetch-site: cross-site';
    $headers[] = 'accept-language: en-US,en;q=0.9';
    //$headers[] = 'accept-encoding: gzip, deflate';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    $json = json_decode($result, true);
    echo "Kamu ".$json["msg"]."$green2 FB : X CEM\n";
    for ($second2=13;$second2>-1;$second2--){
        echo "\r$putih ".$second1.$second2."$yellow Tuyul Kamu Sedang Membaca$lblue2  Tunggu Yah$putih      ";
        sleep(1);
       echo "\r                                         \r";
     }
    
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlbaca8);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    $headers = array();
    $headers[] = 'Host: ugg.idkota.com';
    $headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 9; Mi MIX 3 Build/PKQ1.180729.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/77.0.3865.116 Mobile Safari/537.36';
    $headers[] = 'sec-fetch-mode: cors';
    $headers[] = 'x-requested-with: com.earnmoney.idinfo';
    $headers[] = 'sec-fetch-site: cross-site';
    $headers[] = 'accept-language: en-US,en;q=0.9';
    //$headers[] = 'accept-encoding: gzip, deflate';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close ($ch);
    $json = json_decode($result, true);
    echo "Kamu ".$json["msg"]."$green2 FB : X CEM\n";
    for ($second2=1;$second2>-1;$second2--){
        echo "\r$putih ".$second1.$second2."$yellow Tuyul Kamu Sedang Membaca$lblue2  Tunggu Yah$putih      ";
        sleep(1);
       echo "\r                                         \r";
     }
    echo "\n";
} else {
	echo "$red2
Gagal Daftar Akun Cuk$yellow\n";
sleep(1);
echo "Jangan Kawatir Tuyul Kamu Sedang Bikin Akun Lagi\n";
}
 }
}

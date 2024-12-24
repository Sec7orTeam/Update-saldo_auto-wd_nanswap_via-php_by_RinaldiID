<?php
system("clear");
while(TRUE){
$url = "https://api.nanswap.com/withdraw?paymentAddress=nano_1zx95tfscsakkuntwpjis9k9y848h5qqhn5zodp6e7e55pwb7gp4g7oagqa3";
$data = "paymentAddress: nano_1zx95tfscsakkuntwpjis9k9y848h5qqhn5zodp6e7e55pwb7gp4g7oagqa3";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
echo "[$] STATUS WD LU [=>] $result \n";
echo "[?] Silakan cek Akun lu saldo sudah di wd semua \n";
echo "[?] Bot ini akan auto wd dalam durasi 1 jam ";
echo "\n\n";

//$url1 = "https://nanswap.com/mining/nano?payment-address=nano_1zx95tfscsakkuntwpjis9k9y848h5qqhn5zodp6e7e55pwb7gp4g7oagqa3";
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, $url1);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$result1 = curl_exec($ch);
//echo $result1;
sleep(3600);

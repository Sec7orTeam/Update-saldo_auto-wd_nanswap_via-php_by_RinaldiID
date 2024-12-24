<?php

// code warna
$hitam = "\033[1;30m";
$merah = "\033[1;31m";
$hijau = "\033[1;32m";
$kuning = "\033[1;33m";
$biru = "\033[1;34m";
$ungu = "\033[1;35m";
$cyan = "\033[1;36m";
$putih = "\033[1;37m";


// banner
$banner = "$biru
[x]$kuning =============================================$biru [x]$merah
[#]$hijau Author$cyan [>]$hijau Rinaldi ID$merah
[#]$hijau Bot$cyan [>]$hijau Auto Create Config Mining$merah
[#]$hijau Date$cyan [>]$hijau 25 Juli 2024, 20:35$merah
[#]$hijau Lokasi$cyan [>]$hijau Jakarta, Indonesia$biru
[x]$kuning =============================================$biru [x]$hijau
\n\n
";

//code saat banner di jalankan
echo $banner;
sleep(5);

// code permintaan input alamat xno
echo "$kuning [?]$hijau Masukan alamat Xno$merah [>]$hijau ";
$nano = trim(fgets(STDIN));

// code spasi atau 1 kosong paragraf
echo "\n\n";

// code jalankan proses setelah input alamat xno
echo "sedang di proses mohon tunggu ";
sleep(1);
echo "$merah •";
sleep(1);
echo "$kuning •";
sleep(1);
echo "$hijau •";
sleep(1);
echo "$biru •";
sleep(1);
echo "$merah •";
sleep(1);
echo "$kuning •";
sleep(1);
echo "$hijau •";
sleep(1);
echo "$biru •";
sleep(1);
echo "$kuning •";
sleep(1);
echo "$hijau •$kuning \n\n";
sleep(5);

echo "=========$hijau [✓]$putih Config berhasil di buat$hijau [✓]$kuning ========= \n";
sleep(3);

// code spasi atau 1 kosong paragraf
echo "\n\n";


// hasil code setelah di jalankan atau hasil output
echo "$merah [-]$hijau Save code ini dengan nama file install.sh$ungu \n";
echo "wget https://github.com/xmrig/xmrig/releases/download/v6.21.3/xmrig-6.21.3-linux-static-x64.tar.gz && tar -xvf xmrig-6.21.3-linux-static-x64.tar.gz && cd xmrig-6.21.3 && rm -rf config.json";

echo "$merah [-]$hijau save code ini dengan nama file run.sh$ungu \n";
echo "./xmrig -o xmrig.nanswap.com:3333 -u $nano -p x -k -a rx/0 -t 64 \n\n ";





// code terima kasih
echo "$merah T ";
sleep(1);
echo "$kuning H ";
sleep(1);
echo "$hijau A ";
sleep(1);
echo "$biru N";
sleep(1);
echo "$ungu K";
sleep(1);
echo "$cyan S$merah \n";
sleep(1);
echo "Tolong$biru Jangan$hijau Copy paste$putih CopyRight$kuning , Tolong izin dulu$kuning \n\n";

// code copyright
echo "=============================================== \n";
echo "$biru       _-$merah [-]$putih Copy Right$merah :$hijau Rinaldi ID$merah [-]$biru -_$kuning \n";
echo "=============================================== \n";

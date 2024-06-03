<?php
// Nama file yang akan menyimpan data counter
$counterFile = "counter.txt";

// Periksa apakah file counter.txt ada
if (file_exists($counterFile)) {
    // Jika ada, buka file dan baca jumlah pengunjung saat ini
    $file = fopen($counterFile, "r");
    $count = fgets($file, 100);
    fclose($file);

    // Tambahkan 1 ke counter
    $count++;
} else {
    // Jika file tidak ada, inisialisasi counter dengan 1
    $count = 1;
}

// Tulis jumlah pengunjung baru ke file
$file = fopen($counterFile, "w");
fwrite($file, $count);
fclose($file);

// Tampilkan jumlah pengunjung
echo "Jumlah pengunjung: " . $count;
?>

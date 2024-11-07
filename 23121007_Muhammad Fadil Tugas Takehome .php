<?php
$nama_bulan = [
    1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni",
    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
];

$nama_tempat = "Padang Pariaman"; // Ganti dengan nama tempat yang diinginkan

date_default_timezone_set("Asia/Jakarta"); // Set zona waktu ke Waktu Indonesia Barat
$tanggal = date("j");
$bulan = $nama_bulan[date("n")];
$tahun = date("Y");
$jam = date("H");
$menit = date("i");
$detik = date("s");

echo "Tugas Ini dibuat Bulan $bulan Tanggal $tanggal Tahun $tahun di Kota $nama_tempat pada Jam $jam:$menit:$detik";
?>
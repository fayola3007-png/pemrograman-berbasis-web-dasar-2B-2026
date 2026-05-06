<?php

$timeline = [
    "2022" => "Belum mengetahui dan terpikirkan apa itu HTML",
    "2023" => "Awal mula mendengar tentang HTML dan lainnya, tapi hanya sebatas tau belum mempelajari dan mencari",
    "2024" => "Mulai belajar HTML, dan itu sangat terbatas oleh alat penunjangnya. jadi tidak maksimal",
    "2025" => "Setelah tau kalo diterima di Sistem Informasi mulai mempelajari algoritmanya menggunakan python, supaya mengerti dan connect untuk langkah selanjutnya membuat website. Di tahun ini juga aku belajar membuat CRUD sederhana untuk project UAS semester 1",
    "2026" => "Tahun ini dengan seiring berjalannya waktu belajar dan memperbaiki skill suapaya bisa lebih baik lagi dalam menggunakan HTML, PHP, JavaScript, database. semua aku dapatkan melalui pembelajaran di kampus"
];

function highlight($tahun, $isi)
{
    if ($tahun == "2026") {
        return "<span class='highlight'>$isi</span>";
    }

    return $isi;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Timeline</title>

    <style>
        body {
            font-family: Arial;
            background-image: url('background2.jpg');
            background-size: cover;
            background-position: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        .card {
            background: rgba(255, 255, 255, 0.7);
            background-filter: blur(5px);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #332e2e;
            margin-bottom: 40px;
        }

        .timeline {
            border-left: 4px solid #99eaf5;
            padding-left: 30px;
        }

        .item {
            position: relative;
            margin-bottom: 30px;
        }

        .item::before {
            content: '';
            width: 18px;
            height: 18px;
            background: #99eaf5;
            border-radius: 50%;
            position: absolute;
            left: -40px;
            top: 5px;
        }

        .tahun {
            font-size: 20px;
            font-weight: bold;
            color: #506cb9;
        }

        .highlight {
            color: blue;
            font-weight: bold;
        }

        .nav {
            margin-top: 30px;
            text-align: center;
        }

        .nav a {
            text-decoration: none;
            background: #19e9c6;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            margin: 10px;
        }

        .nav a:hover {
            background: #8ce691;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Timeline Perjalanan Belajar Coding</h1>

        <div class="timeline">

            <?php

            foreach ($timeline as $tahun => $isi) {

                echo "
                <div class='item'>

                    <div class='tahun'>$tahun</div>

                    <p>" . highlight($tahun, $isi) . "</p>

                </div>
                ";
            }

            ?>

        </div>

        <div class="nav">
            <a href="index.php">Kembali ke Halaman Utama</a>
            <a href="blog.php">Menuju Blog</a>
        </div>

    </div>

</div>

</body>

</html>
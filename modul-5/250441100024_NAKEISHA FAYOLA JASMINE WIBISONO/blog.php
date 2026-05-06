<?php

$artikel = [

    "html" => [
        "judul" => "Belajar HTML Pertama Kali",
        "tanggal" => "1 Mei 2026",
        "isi" => "Saat pertama belajar HTML saya merasa harus lebih banyak belajar dan menyeimbangkan waktu usupaya tidak tertinggal oleh teman-teman dan upgrade agar lebih bagus lagi. saya berhasil membuat website pertama pada praktikum PBWD pertama kali pada tanggal 11 Maret 2026. Tidak lupa untuk membuat ini saya dibantu oleh dosen dan kakak-kakak asisten praktikum. Saya juga terkadang membuka website yang telah saya cantumkan ini sebagai media referensi dan pembelajaran.",
        "gambar" => "HTML1.png",
        "link" => "https://www.w3schools.com/html/"
    ],

    "error" => [
        "judul" => "Error Pertama Saya",
        "tanggal" => "1 April 2026",
        "isi" => "Jujur saja, untuk error pertama di HTML saya juga lupa karena setiap ada penugasan bahkan ketika belajar pun selalu ada errornya, namun untuk error pertama pada semester ini saya rasa yang terhitung ada pada penugasan pertama praktikum modul satu, karena pada tugas pertama kali itu juga errornya harus benar benar dihilangin supaya nialinya tidak error juga ketika asistensi. nah, untuk PHP sendiri saya pernah mencoba membuka dan beljar sedikit dari web yang telah saya cantumkan ini",
        "gambar" => "error1.png",
        "link" => "https://www.php.net/"
    ],

    "project" => [
        "judul" => "Membuat web pertama kali dengan bantuan FRAMEWORK CSS",
        "tanggal" => "13 April 2026",
        "isi" => "Saya pertama kali menggunakan framework css seperti bootstrap dan tailwind adalah pada modul tiga praktikum PBWD. disini saya mulai belajar alternatif untuk mempercantik web HTML menggunakan bantuan framework yang ada, untuk penggunaannya sendiri saya lebih cenderung menggunakan bootstrap, seperti pada UTS kemarin saya juga menggunakan bootstrap. berikut adalah link yang biasa digunakan untuk membuat framework bootstrap",
        "gambar" => "framework1.png",
        "link" => "https://getbootstrap.com/"
    ]
];

$quotes = [
    "Jangan takut error karena error adalah bagian dari belajar.",
    "Developer hebat juga pernah menjadi pemula.",
    "Konsisten itu lebih penting daripada sempurna."
];

$quote = $quotes[array_rand($quotes)];

$key = isset($_GET['artikel']) ? $_GET['artikel'] : "";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Blog Reflektif Developer</title>

    <style>
        body {
            font-family: Arial;
            background-image: url('background3.png');
            background-size: cover;
            background-position: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 900px;
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
            color: #2a2a2b;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 12px;
        }

        ul li a {
            text-decoration: none;
            color: #404149;
            font-weight: bold;
        }

        ul li a:hover {
            color: #5a595f;
        }

        .artikel {

            margin-top: 30px;
            background: #c1e9df;
            padding: 20px;
            border-radius: 12px;
        }

        img {
            width: 100%;
            max-width: 400px;
            border-radius: 12px;
            margin-top: 15px;
        }

        .quote {
            background: #dcfce7;
            padding: 15px;
            border-radius: 10px;
            margin-top: 25px;
        }

        .quote h3 {
            margin-top: 0;
        }

        .nav {
            margin-top: 30px;
            text-align: center;
        }

        .nav a {
            text-decoration: none;
            background: #22c55e;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            margin: 10px;
        }

        .nav a:hover {
            background: #15803d;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Blog Reflektif Developer</h1>

        <h3>Daftar Artikel</h3>

        <ul>

            <?php

            foreach ($artikel as $id => $data) {

                echo "
                <li>
                    <a href='?artikel=$id'>
                        {$data['judul']}
                    </a>
                </li>
                ";
            }

            ?>

        </ul>

        <?php

        if ($key != "" && isset($artikel[$key])) {

            $data = $artikel[$key];

            echo "
            <div class='artikel'>

                <h2>{$data['judul']}</h2>

                <p><b>Tanggal:</b> {$data['tanggal']}</p>

                <p>{$data['isi']}</p>

                <img src='{$data['gambar']}'>

                <p>
                    <a href='{$data['link']}' target='_blank'>
                        Link Referensi!
                    </a>
                </p>

            </div>
            ";
        }

        ?>

        <div class="quote">

            <h3>Simple and Random Quote</h3>

            <p><?php echo $quote; ?></p>

        </div>

        <div class="nav">
            <a href="timeline.php">Kembali ke Timeline</a>
            <a href="index.php">Kembali ke Profil</a>
        </div>

    </div>

</div>

</body>

</html>
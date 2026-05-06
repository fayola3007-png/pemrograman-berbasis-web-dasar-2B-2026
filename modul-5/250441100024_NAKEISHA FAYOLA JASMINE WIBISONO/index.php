<?php

function tampilkanData($framework, $pengalaman, $tools, $minat, $skill)
{
    echo "
    <div class='hasil'>

        <h2>Hasil Input Developer</h2>

        <table>
            <tr>
                <th>Data</th>
                <th>Hasil</th>
            </tr>

            <tr>
                <td>Framework</td>
                <td>" . implode(", ", $framework) . "</td>
            </tr>

            <tr>
                <td>Tools Penunjang</td>
                <td>" . implode(", ", $tools) . "</td>
            </tr>

            <tr>
                <td>Minat Bidang</td>
                <td>$minat</td>
            </tr>

            <tr>
                <td>Tingkat Skill</td>
                <td>$skill</td>
            </tr>
        </table>

        <div class='pengalaman'>
            <h3>Pengalaman Coding</h3>
            <p>$pengalaman</p>
        </div>

    </div>
    ";

    if (count($framework) > 2) {
        echo "<p class='pesan'>Skill Anda cukup luas di bidang development!</p>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Profil Interaktif Developer</title>

    <style>
        body {
            font-family: Arial;
            background-image: url('background1.jpg');
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
            margin-bottom: 25px;
        }

        h1 {
            text-align: center;
            color: #0000;
        }

        h2 {
            color: #0000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th {
            background: #857af5;
            color: white;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        textarea {
            resize: none;
        }

        .opsi {
            margin-bottom: 15px;
        }

        .opsi input {
            width: auto;
        }

        button {
            background: #6b5ee0;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #e6dbdb;
        }

        .pesan {
            background: #dcfce7;
            color: green;
            padding: 12px;
            border-radius: 8px;
            margin-top: 15px;
            font-weight: bold;
        }

        .error {
            background: #f5c5c5;
            color: red;
            padding: 12px;
            border-radius: 8px;
            margin-top: 15px;
        }

        .pengalaman {
            background: #f5f3ff;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .nav {
            text-align: center;
            margin-top: 20px;
        }

        .nav a {
            text-decoration: none;
            background: #22c55e;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
        }

        .nav a:hover {
            background: #15803d;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1 style="color:black;"> PROFIL INTERAKTIF DEVELOPER</h1>

        <table>
            <tr>
                <th>PROFIL</th>
                <th>KETERANGAN</th>
            </tr>

            <tr>
                <td>Nama</td>
                <td>Nakeisha Fayola Jasmine</td>
            </tr>

            <tr>
                <td>ID Developer</td>
                <td>KEI3007</td>
            </tr>

            <tr>
                <td>Kota / Tanggal Lahir</td>
                <td>Bojonegoro, 30 Mei 2007</td>
            </tr>

            <tr>
                <td>Email</td>
                <td>keishafayy3007@gmail.com</td>
            </tr>

            <tr>
                <td>No WhatsApp</td>
                <td>082131344151</td>
            </tr>
        </table>

    </div>

    <div class="card">

        <h2 style="color:black;">Form Developer</h2>

        <form method="POST">

            <label>Framework / Tools</label>
            <input type="text" name="framework" placeholder="HTML,CSS,PHP">

            <label>Pengalaman dalam belajar Membuat Website</label>
            <textarea name="pengalaman" rows="5"></textarea>

            <div class="opsi">
                <label>Tools Penunjang!</label><br><br>

                <input type="checkbox" name="tools[]" value="VS Code"> VS Code
                <input type="checkbox" name="tools[]" value="GitHub"> GitHub
                <input type="checkbox" name="tools[]" value="Figma"> Figma
                <input type="checkbox" name="tools[]" value="Postman"> Postman
            </div>

            <div class="opsi">
                <label>Minat Bidang</label><br><br>

                <input type="radio" name="minat" value="Frontend"> Frontend
                <input type="radio" name="minat" value="Backend"> Backend
                <input type="radio" name="minat" value="Fullstack"> Fullstack
            </div>

            <label>Tingkat Skill Dalam Coding</label>

            <select name="skill">
                <option value="">-- Pilih Skill --</option>
                <option value="Dasar">Dasar</option>
                <option value="Cukup">Cukup</option>
                <option value="Profesional">Profesional</option>
            </select>

            <button type="submit" name="submit">Submit</button>

        </form>

        <?php

        if (isset($_POST['submit'])) {

            $framework = $_POST['framework'];
            $pengalaman = $_POST['pengalaman'];
            $tools = isset($_POST['tools']) ? $_POST['tools'] : [];
            $minat = isset($_POST['minat']) ? $_POST['minat'] : "";
            $skill = $_POST['skill'];

            if (
                $framework == "" ||
                $pengalaman == "" ||
                empty($tools) ||
                $minat == "" ||
                $skill == ""
            ) {

                echo "<p class='error'>Semua input wajib diisi!</p>";

            } else {

                $frameworkArray = explode(",", $framework);

                tampilkanData(
                    $frameworkArray,
                    $pengalaman,
                    $tools,
                    $minat,
                    $skill
                );
            }
        }

        ?>

    </div>

    <div class="nav">
        <a href="timeline.php">Menuju Timeline</a>
    </div>

</div>

</body>

</html>
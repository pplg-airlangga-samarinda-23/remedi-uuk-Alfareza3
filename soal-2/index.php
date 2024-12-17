<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal No. 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="container">
        <h1>Soal No. 2</h1>
    </div>
</header>

<main>
    <section class="aa">
        <h2>Kalkulator Rata-Rata Tinggi Badan</h2>
        <h4>Masukkan tinggi badan menggunakan CM</h4>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="siswa1">Siswa 1:</label>
            <input type="number" name="siswa1" id="siswa1" required><br><br>

            <label for="siswa2">Siswa 2:</label>
            <input type="number" name="siswa2" id="siswa2" required><br><br>

            <label for="siswa3">Siswa 3:</label>
            <input type="number" name="siswa3" id="siswa3" required><br><br>

            <label for="siswa4">Siswa 4:</label>
            <input type="number" name="siswa4" id="siswa4" required><br><br>

            <label for="siswa5">Siswa 5:</label>
            <input type="number" name="siswa5" id="siswa5" required><br><br>

            <button type="submit">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $siswa1 = $_POST["siswa1"];
            $siswa2 = $_POST["siswa2"];
            $siswa3 = $_POST["siswa3"];
            $siswa4 = $_POST["siswa4"];
            $siswa5 = $_POST["siswa5"];

            $totalHeight = $siswa1 + $siswa2 + $siswa3 + $siswa4 + $siswa5;
            $averageHeight = $totalHeight / 5;

            echo "<p class='result'>Tinggi Rata-Rata: " . $averageHeight . " cm</p>";
        }
        ?>
    </section>
</main>

<footer>
    <p>&copy; Dimas 2024</p>
</footer>

</body>
</html>
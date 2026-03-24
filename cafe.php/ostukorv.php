<!DOCTYPE html>
<html lang="et">
<head>
<meta charset="UTF-8">
<title>Ostukorv</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(to right, #ffe4ec, #fff);
}

.card {
    border-radius: 20px;
    box-shadow: 0 4px 15px rgba(255, 105, 180, 0.4);
}

.btn-pink {
    background-color: hotpink;
    border: none;
    color: white;
}

.btn-pink:hover {
    background-color: deeppink;
}

.title {
    color: deeppink;
    font-weight: bold;
}

.sparkle::after {
    content: "✨";
    margin-left: 10px;
    animation: blink 1.5s infinite;
}

@keyframes blink {
    0% {opacity: 0;}
    50% {opacity: 1;}
    100% {opacity: 0;}
}
</style>

</head>
<body>

<div class="container mt-5">

<h2 class="text-center title mb-4">Sinu ostukorv</h2>

<div class="card p-4">

<?php
if (!empty($_SESSION['ostukorv'])) {

    $kokku = 0;

    echo "<table class='table'>";
    echo "<tr><th>Toode</th><th>Hind</th><th></th></tr>";

    foreach ($_SESSION['ostukorv'] as $index => $toode) {
        echo "<tr>
            <td>{$toode['nimi']}</td>
            <td>{$toode['hind']} €</td>
            <td><a href='?eemalda=$index' class='btn btn-danger btn-sm'>❌</a></td>
        </tr>";

        $kokku += $toode['hind'];
    }

    echo "<tr>
        <td><strong>Kokku</strong></td>
        <td><strong>$kokku €</strong></td>
        <td></td>
    </tr>";

    echo "</table>";

    echo "<a href='?tyhjenda=1' class='btn btn-pink'>Tühjenda ostukorv</a>";

} else {
    echo "<p class='text-center'>Ostukorv on tühi</p>";
}
?>

</div>

<div class="text-center mt-3">
<a href="tooted.php" class="btn btn-pink">← Tagasi toodete juurde</a>
</div>

</div>

</body>
</html>

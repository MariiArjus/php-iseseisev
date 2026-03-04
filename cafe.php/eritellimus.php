 <?php

$inimesed = 0;
$lisandid = 0;
$vastus = "";
$failinimi = "orders.txt";


if (!empty($_GET["inimesed"])) {
    $inimesed = $_GET["inimesed"];
    

    if (isset($_GET["karamell"])) {
        $lisandid += 3;
    }
    if (isset($_GET["sokolaad"])) {
        $lisandid += 4;
    }
    if (isset($_GET["tuhksuhkur"])) {
        $lisandid += 2;
    }


    $summa = $inimesed * (5 + $lisandid);
    
    $vastus = "Hind kokku: $summa €";

    $fail = fopen($failinimi, "a");

}
?>

<!doctype html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <title>Koogi tellimine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    <div class="container border p-4" style="max-width: 500px;">
        <h3>Eritellimuse calc</h3>
        <hr>
        
        <form action="" method="get">
            <div class="mb-3">
                <label>Mitu inimest sööb?</label>
                <input type="number" min="1" name="inimesed" class="form-control" required>
            </div>

            <p>Vali lisandid:</p>
            <div class="mb-3">
                <input type="checkbox" name="karamell" id="k"> <label for="k">Karamell +3€</label><br>
                <input type="checkbox" name="sokolaad" id="s"> <label for="s">Šokolaad +4€</label><br>
                <input type="checkbox" name="tuhksuhkur" id="t"> <label for="t">Tuhksuhkur +2€</label>
            </div>

            <button type="submit" class="btn btn-primary w-100" style="background-color: hotpink; border: none;">
                Arvuta hind
            </button>
        </form>

        <?php if ($vastus != ""): ?>
            <div class="alert alert-info mt-3">
                <?php echo $vastus; ?>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>

<?php
$karamell_hind = 3;
$sokolaad_hind = 4;
$tuhksuhkur_hind = 2;

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>


<h1>Eritellimus</h1>



<form action="" method="get">
        <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Inimeste arv</span>
    <input type="number" name="inimesed" value="">
    </div>
    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
    <input type="checkbox" class="btn-check" id="karamell" autocomplete="off">
    <label class="btn btn-outline-primary" for="karamell">karamell</label>

    <input type="checkbox" class="btn-check" id="sokolaad" autocomplete="off">
    <label class="btn btn-outline-primary" for="sokolaad">šokolaad</label>

    <input type="checkbox" class="btn-check" id="tuhksuhkur" autocomplete="off">
    <label class="btn btn-outline-primary" for="tuhksuhkur">tuhksuhkur</label>

        <button type="submit" class="btn btn-success" body style="background:hotpink">Kinnita</button>
    </div>
    </form>

<?php
	//lisab vormist saadud andmed muutujasse
    if(isset($_GET["inimesed"])){
        $inimeste_arv = $_GET["inimesed"];
         echo 'Inimesi on '.$inimeste_arv.'tk';
    }
    if(isset($_GET["karamell"])&&isset($_GET["sokolaad"])&&isset($_GET["tuhksuhkur"])){
        $karamell = $_GET["karamell"];
        $sokolaad = $_GET["sokolaad"];
        $tuhksuhkur = $_GET["tuhksuhkur"];
        printf("Külg A: %d<br>Külg B: %d<br>Kõrgus: %d<br>Trapetsi pindala: %.2f<br>Romb: %d", $kylg_a, $kylg_b, $kylg_h, $trapets_s, $romb_p);   


    }

    

?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>

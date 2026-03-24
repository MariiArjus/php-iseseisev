<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Kohvik - Tooted</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" /> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text mb-3">Kõige populaarsemad tooted</span>
                <!-- <span class="site-heading-lower">Tooted</span> -->
            </h1>
        </header>
        
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Kohvik</a>
                <button class="navbar-toggler" style="background-color: hotpink; border: none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Avaleht</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="ostukorv.php">Ostukorv</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="tooted.php">Tooted</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="kontakt.php">Kontakt</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="eritellimus.php">Eritellimus</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
        $fail = fopen("menu (2).csv", "r");
        $loendur = 0;

        if ($fail) {
            fgetcsv($fail, 1000, ",");

            while ($rida = fgetcsv($fail, 1000, ",")) {
                $nimi = $rida[0];
                $hind = $rida[1];
                $kategooria = $rida[2];
                $kirjeldus = $rida[3];
                

                $pool = ($loendur % 2 == 0) ? "ms-auto" : "me-auto";
                $teksti_pool = ($loendur % 2 == 0) ? "me-auto" : "ms-auto";
                
                $pilt = "img/" . strtolower(str_replace(" ", "-", $nimi)) . ".jpg";

                if (!file_exists($pilt)) { 
                $pilt = "img/products-02.jpg"; 
}
                ?>

                <section class="page-section">
                    <div class="container">
                        <div class="product-item">
                            <div class="product-item-title d-flex">
                                <div class="bg-faded p-5 d-flex <?php echo $pool; ?> rounded">
                                    <h2 class="section-heading mb-0">
                                        <span class="section-heading-upper"><?php echo $kategooria; ?> - <?php echo $hind; ?></span>
                                        <span class="section-heading-lower"><?php echo $nimi; ?></span>
                                    </h2>
                                </div>
                            </div>
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo $pilt; ?>" alt="..." />
                            <div class="product-item-description d-flex <?php echo $teksti_pool; ?>">
                                <div class="bg-faded p-5 rounded">
                                    <p class="mb-0"><?php echo $kirjeldus; ?></p>
                                    <a href="ostukorv.php" class="btn btn-primary mt-3" style="background-color: hotpink; border: none;">Lisa ostukorvi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php
                $loendur++;
            }
            fclose($fail);
        }
        ?>

        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Minu kohvik 2026</p></div>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

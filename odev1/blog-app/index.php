<?php

    // Not: Odev çözümleri html kodları içindedir.

    // SORU 4 ÇÖZÜM
    define("baslik", "Filmler");
    
    $kategori1 = "Macera";
    $kategori2 = "Dram";
    $kategori3 = "Komedi";
    $kategori4 = "Korku";

    $film_baslik1 = "Paper Lives";
    $film_ozet1 = "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
    $film_resim1 = "1.jpeg";
    $film_yorumSayisi1 = "Yorum 55";
    $film_begeniSayisi1 = "Begeni 85";
    $film_vizyon1 = "Vizyonda: Evet";


    $film_baslik2 = "Walking Dead";
    $film_ozet2 = "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
    $film_resim2 = "2.jpeg";
    $film_yorumSayisi2 = "Yorum 55";
    $film_begeniSayisi2 = "Begeni 85";
    $film_vizyon2 = "Vizyonda: Evet";

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <!-- SORU 4 ÇÖZÜM -->
            <h1><?php echo baslik; ?></h1>
        </div>
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategori1; ?></li>
                    <li class="list-group-item"><?php echo $kategori2; ?></li>
                    <li class="list-group-item"><?php echo $kategori3; ?></li>
                    <li class="list-group-item"><?php echo $kategori4; ?></li>
                </ul>
            </div>
            <div class="col-9">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php
                                echo "<img src=\"./img/{$film_resim1}\" class=\"img-fluid\">";
                            ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $film_baslik1; ?></h5>
                                <p class="card-text">
                                    <?php
                                        // SORU 1, SORU 2 ÇÖZÜM:

                                        $film_ozet1 = strtoupper($film_ozet1[0]) . strtolower(substr($film_ozet1, 1, 50)) . "...";

                                        echo $film_ozet1; 
                                    ?>
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $film_yorumSayisi1; ?></span>
                                    <span class="badge bg-success"><?php echo $film_begeniSayisi1; ?></span>
                                    <span class="badge bg-success"><?php echo $film_vizyon1; ?></span>
                                </div>
                                <div class="card-link mt-4">
                                    <?php
                                        // SORU 3 ÇÖZÜM:

                                        $link1 = explode(" ", $film_baslik1);
                                        $link1 = strtolower(implode("", $link1));
                                        
                                        echo "<a href=#{$link1} class='btn btn-primary btn-sm' role='button'>$film_baslik1 Link</a>";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                        <?php
                                echo "<img src=\"./img/{$film_resim2}\" class=\"img-fluid\">";
                            ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $film_baslik2; ?></h5>
                                <p class="card-text">
                                    <?php
                                        // SORU 1, SORU 2 ÇÖZÜM:

                                        $film_ozet2 = strtoupper($film_ozet2[0]) . strtolower(substr($film_ozet2, 1, 50)) . "...";
                                        echo $film_ozet2;
                                    ?>
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 31.10.2010</span>
                                    <span class="badge bg-success"><?php echo $film_yorumSayisi2; ?></span>
                                    <span class="badge bg-success"><?php echo $film_begeniSayisi2; ?></span>
                                    <span class="badge bg-success"><?php echo $film_vizyon2; ?></span>
                                </div>
                                <div class="card-link mt-4">
                                    <?php
                                        // SORU 3 ÇÖZÜM:

                                        $link2 = explode(" ", $film_baslik2);
                                        $link2 = strtolower(implode("", $link2));
                                        
                                        echo "<a href=#{$link2} class='btn btn-primary btn-sm' role='button'>$film_baslik2 Link</a>";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
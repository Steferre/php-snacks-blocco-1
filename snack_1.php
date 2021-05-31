<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/
$day1 = [
    [
        "home" => "De' Longhi Treviso Basket",
        "away" => "Dolomiti Energia Trentino",
        "home_score" => rand(60, 110),
        "away_score" => rand(60, 110)    
    ],
    [
        "home" => "Openjobmetis Varese",
        "away" => "Germani Brescia",
        "home_score" => rand(60, 110),
        "away_score" => rand(60, 110)    
    ],
    [
        "home" => "UNAHOTELS Reggio Emilia",
        "away" => "A|X Armani Exchange Milano",
        "home_score" => rand(60, 110),
        "away_score" => rand(60, 110)    
    ],
    [
        "home" => "Allianz Pallacanestro Trieste",
        "away" => "Vanoli Basket Cremona",
        "home_score" => rand(60, 110),
        "away_score" => rand(60, 110)    
    ],
    [
        "home" => "Carpegna Prosciutto Pesaro",
        "away" => "Banco di Sardegna Sassari",
        "home_score" => rand(60, 110),
        "away_score" => rand(60, 110)    
    ],
    [
        "home" => "Virtus Segafredo Bologna	",
        "away" => "Acqua S.Bernardo Cantù",
        "home_score" => rand(60, 110),
        "away_score" => rand(60, 110)    
    ],
    [
        "home" => "Umana Reyer Venezia",
        "away" => "Happy Casa Brindisi",
        "home_score" => rand(60, 110),
        "away_score" => rand(60, 110)    
    ]
];



//var_dump($day1);


// ricavo salvo il conteggio degli elementi del mio array in una variabile che uso poi nel ciclo for
$day1_length = count($day1);

/*for($i = 0; $i < $day1_length; $i++) {
    $singleMatch = $day1[$i];

    var_dump($singleMatch);

    echo $singleMatch["home"];
}*/
?>
<!-- stampo come html solo un div, per semplicita'-->
<div>
    <h1>risultati prima giornata</h1>
    <ul>
    <?php
        for($i = 0; $i < $day1_length; $i++) {
            $singleMatch = $day1[$i];
    ?>

      <li><?php echo $singleMatch["home"] . " " . "-" . " " . $singleMatch["away"] . " " . "|" . " " . $singleMatch["home_score"] . "-" . $singleMatch["away_score"] ?></li>

    <?php    
        }
    ?>
    </ul>
</div>
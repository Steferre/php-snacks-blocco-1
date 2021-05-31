<?php
/*
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
*/

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Vacanza',
            'author' => 'Luca Bianchi (fidanzato)',
            'text' => 'Oggi andiamo al mare'
        ],
        [
            'title' => 'Spiaggia',
            'author' => 'Mara Rossi (fidanzata)',
            'text' => 'La spiaggia non si trova molto vicina alla casa'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Problemi',
            'author' => 'Mara Rossi',
            'text' => 'Tante persone si lamentano'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Nuova vacanza',
            'author' => 'Mara Rossi',
            'text' => 'Speriamo bene'
        ],
        [
            'title' => 'Si parte',
            'author' => 'Luca Bianchi',
            'text' => 'Il nostro volo sta per partire'
        ],
        [
            'title' => 'Arrivo',
            'author' => 'Luca Bianchi',
            'text' => 'Siamo arrivati a destinazione, pronti per il relax'
        ]
    ],
];

// ricavo le chiavi dell'array
$postsList_keys = array_keys($posts);

// utilizzo un ciclo foreach per stampare le chiavi che corrispondono alle date
// poi le uso per accedere all'array ed estrapolare i post usando un ciclo for
 
/*
foreach ($postsList_keys as $key) {
    echo $key;
    $singleDayPosts = $posts[$key];

    echo "<br>";

    $singleDayPosts_len = count($singleDayPosts);

    for ($i = 0; $i < $singleDayPosts_len; $i++) {
        echo $singleDayPosts[$i]["text"];
        echo "<br>";
    }
    
}
*/

?>

<!-- stampo il tutto in html per dare piu' ordine-->
<div>
    <h1>Lista Post</h1>
    <?php
    foreach ($postsList_keys as $key) {
    ?>

        <p>Data: <strong><?php echo $key; ?></strong></p>

    <?php
        $singleDayPosts = $posts[$key];
    
        $singleDayPosts_len = count($singleDayPosts);
    
        for ($i = 0; $i < $singleDayPosts_len; $i++) {
    ?>

            <div>
                <h4><?php echo $singleDayPosts[$i]["title"]; ?></h4>
                <p><?php echo $singleDayPosts[$i]["author"]; ?></p>
                <p><?php echo $singleDayPosts[$i]["text"]; ?></p>
            </div>

    <?php
        }
        
    }
    ?>
</div>
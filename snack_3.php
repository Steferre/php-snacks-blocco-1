<?php
/*
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
*/

$postsList = [
    "20-07-2020" => [
        "post1" => "auguri",
        "post2" => "tantissimi auguri",
        "post3" => "buon compleanno, sono 30!!",
        "post4" => "augurissimi",
    ],
    "25-12-2020" => [
        "post1" => "auguri",
        "post2" => "buon natale",
        "post3" => "non mangiate troppo",
        "post4" => "bei regali",
    ],
    "01-01-2021" => [
        "post1" => "Buon anno!",
        "post2" => "tantissimi auguri",
        "post3" => "quest'anno speriamo bene.. ahah",
        "post4" => "anno nuovo",
    ]
];

//var_dump($postsList);
//var_dump(array_keys($postsList));


// ricavo le chiavi dell'array generale
$postsList_keys = array_keys($postsList);

//var_dump(array_values($postsList));
// salvo in una variabile il valore degli array
$totalPosts = array_values($postsList);

//var_dump($totalPosts);


// lunghezza array post

$totalPosts_length = count($totalPosts);
/*
for ($i = 0; $i < $totalPosts_length; $i++) {
    $singleDayPosts = $totalPosts[$i];

    $singleDayPosts_mex = array_values($singleDayPosts);

    var_dump($singleDayPosts_mex);
    $singleDayPosts_mex_length = count($singleDayPosts_mex);

    for ($j = 0; $j < $singleDayPosts_mex_length; $j++) {
        $messages = $singleDayPosts_mex[$j];

        echo $messages;
    }



}


/*
foreach ($postsList_keys as $key) {
    echo $key . " " . "stampata";
    
}

for ($i = 0; $i < $totalPosts_length; $i++) {
    $singleDayPosts = $totalPosts[$i];
    var_dump($singleDayPosts); 
}
*/
/*
for ($i = 0; $i < $postsList_length; $i++) {
    $singleDayPosts = $postsList[$i];

    var_dump($singleDayPosts);
}*/


?>

<div>
<?php
foreach ($postsList_keys as $key) {
?>

    <p><strong>Data:</strong> <?php echo $key;?></p>

<?php
    foreach($totalPosts as $posts) {
    
?>

    
            <p><?php  var_dump($posts); ?></p>


<?php
        
    }
}
?>
</div>
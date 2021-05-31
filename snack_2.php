<?php
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

// per controllare lunghezza name uso strlen
// recupero il nome dell'utente
$userName = $_GET["name"];
//echo $userName;
// trovo la lunghezza della stringa nome utente
$userName_length = strlen($userName);
//echo $userName_length;

// per controllare che la mail contenga un punto e una chiocciola uso strrpos
// recupero mail utente
$userMail = $_GET["mail"];
//echo $userMail;
// mi salvo il vaolre booleano della presenza o meno dei caratteri desiderati
$is_there_at = strrpos($userMail, "@" , 0); // controllo per la presenza della @
$is_there_points = strrpos($userMail, ".", 0); // controllo per la presenza di almeno un punto

// se uno dei due caratteri non e' presente allora la variabile risultera' falsa


// per controllare che age sia un numero uso is_numeric
// recupero eta' utente
$userAge = $_GET["age"];

?>

<div>
<?php
if ($userName_length <= 3) {
?>
    <p><strong>Accesso Negato!!!</strong></p>
    <p>Nome troppo corto, inserire almeno 4 caratteri!!!</p>
<?php
}else if (!$is_there_at || !$is_there_points) {
?>
    <p><strong>Accesso Negato!!!</strong></p>
    <p>Mail non valida!!! Inserire la @ e almeno un punto.</p>
<?php
} else if (!is_numeric($userAge)) {
?>
    <p><strong>Accesso Negato!!!</strong></p>
    <p>Attenzione, inserire l'eta' in numero!</p>
<?php
} else {
?>
    <p><strong>Accesso Riuscito!!!</strong></p>
    <p>Benvenuto <?php echo $userName; ?></p>
<?php
} 
?>
</div>
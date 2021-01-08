<?php

/*
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60


PHP Snack 2:
Passare come parametri GET name, mail e age everificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/




// PHP Snack 1

$matches = [
    [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Dinamo Sassari',
        'punteggio_casa' => 102,
        'punteggio_ospite' => 86
    ],
    [
        'casa' => 'Universo Treviso',
        'ospite' => 'Virtus Bologna',
        'punteggio_casa' => 72,
        'punteggio_ospite' => 98
    ],
    [
        'casa' => 'Venezia',
        'ospite' => 'Varese',
        'punteggio_casa' => 88,
        'punteggio_ospite' => 77
    ],
    [
        'casa' => 'Cantù',
        'ospite' => 'Brescia',
        'punteggio_casa' => 89,
        'punteggio_ospite' => 92
    ],
    [
        'casa' => 'Fortitudo Bologna',
        'ospite' => 'Cremona',
        'punteggio_casa' => 85,
        'punteggio_ospite' => 71
    ]
];

echo "<strong>PHP Snack 1</strong><br>";

echo "<br>";

for ($i = 0; $i < count($matches); $i++){
    echo $matches[$i]['casa'] . " - " . $matches[$i]['ospite'] . " | " . $matches[$i]['punteggio_casa'] . " - " . $matches[$i]['punteggio_ospite'] . "<br>";
};



// PHP Snack 2

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

echo "<br><strong>PHP Snack 2</strong><br>";

echo "<br><strong>Data Access</strong><br><p><strong>Name: </strong>" . $name . "<br><strong>Mail: </strong>" . $mail . "<br><strong>Age: </strong>" . $age . "<br>";

echo "<br>";

if ((strlen($name) >= 3) && (strpos($mail, ".")) && (strpos($mail, "@")) && (is_numeric($age))){
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
};



?>
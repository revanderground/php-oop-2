<?php
// PHP OOP 2
// nome repo: php-oop-2

// Descrizione
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.

// BONUS:
// Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).


include_once __DIR__ . '/Classes/Product.php';
include_once __DIR__ . '/Classes/User.php';
include_once __DIR__ . '/Classes/UnregisteredUser.php';
include_once __DIR__ . '/Classes/RegisteredUser.php';

$prodotto= new Product("cuccia", "cane", "trudi", 23 );
var_dump($prodotto);
$pippo = new Member("ciao", "bello", "akdjkdjsk@jdadjksd.com", 3873684, "gjhgj", "gjhgj");    
var_dump($pippo);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Animal Shop</title>
</head>
<body>

</body>
</html>
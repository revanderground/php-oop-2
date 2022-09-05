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



include_once __DIR__ . '/Classes/Products/Product.php';
include_once __DIR__ . '/Classes/Products/House.php';
include_once __DIR__ . '/Classes/Products/Food.php';
include_once __DIR__ . '/Classes/Products/Toy.php';
include_once __DIR__ . '/Classes/Users/User.php';
include_once __DIR__ . '/Classes/Users/RegisteredUser.php';
include_once __DIR__ . '/Classes/Users/UnregisteredUser.php';
include_once __DIR__ . '/Card.php';
include_once __DIR__ . '/Traits/codeID.php';


$croccantini = new Food("croccantini", "cani", "monge", 45.90, "#12", "dog food", "Salmone e Riso", "adult", "2023-15-14", "12kg" );
$cuccia= new House('cuccia', 'gatto','LOVEDI','15.99', 'silicone imbottito', '50cm', '60cm', 'blue' );
$altalena = new Toy ('altalena', 'pappagallo', 'Nobleza', '14.99', 'cotone', 'Spagna', 'multicolore');
$luciodalla= new Guest ('Lucio','Dalla', "luciodalla@email.com",'#25');
$robertobaggio = new Member("Roberto", "Baggio", "robybaggio@email.com", "#12", "Altavilla Vicentina", "robybaggio", "123456");
$card1 = new Card("Lucio Dalla", "2873847934", "2024-12-10", 234);


var_dump($croccantini);

var_dump($cuccia);

var_dump($altalena);

var_dump($luciodalla);

var_dump($card1);


$luciodalla->AddToCart($altalena, $cuccia);
$luciodalla->AddToCart($cuccia);

var_dump($luciodalla->getCart());

var_dump($luciodalla);

$luciodalla->calculatePrice();

var_dump($luciodalla->calculatePrice());


?>



<!--Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
 -->

<?php
    include_once __DIR__ . '/classes/CreditCard.php';
    include_once __DIR__ . '/classes/Food.php';
    include_once __DIR__ . '/classes/Kennels.php';
    include_once __DIR__ . '/classes/Product.php';
    include_once __DIR__ . '/classes/Toys.php';
    include_once __DIR__ . '/classes/Customer.php';
    include_once __DIR__ . '/classes/Cart.php';


    $prodotto = new Food('Micione', 8.99, 'Il cibo alla tua portata', 'Micissimo', '5kg', 'Cibo per gatti');

    var_dump($prodotto);

    $carta = new CreditCard('4502456475', 'Mastercard', '13-09-2024');

    var_dump($carta);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
</head>

<body>

</body>

</html>
<!-- Name: Madla, Emilson Lio F. -->
<!-- Section: WD-201 -->
<?php
//variables information
$produkto = "L Black Tshirt"; //name of the product
$descri = "Itong Tshirt na to ay for men only at pinapkita nito <br> ang pagka dilim na nagbibigay nang +100 aura"; //short description of the product
$presyo = 299.99; 
$piraso = 3;
$totality = $presyo * $piraso;
/*
Product price: is the cost 299.99
Quantity: is 3 can change to any amount
Total: multiplies the product and the quantity to get the total
*/

?>
<!DOCTYPE html>
<html>
    <head>
        <title>L T-Shirt</title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body> 
        <h1><?php echo $produkto; //name of the product?></h1>
        <p>About the product: <?php echo $descri; //Shows product?></p>
        <br>
        <p>Presyo: ₱<?php echo $presyo; //price?></p>
        <p>Amount na gustong bilhin: <?php echo $piraso; //amount?></p>
        <p>Total: ₱<?php echo $totality; //total?></p>
    </body>
</html>

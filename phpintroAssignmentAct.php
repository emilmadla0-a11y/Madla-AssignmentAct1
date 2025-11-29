<!-- Name: Madla, Emilson Lio F. -->
<!-- Section: WD-201 -->
<?php
require 'produktoInfo.php';

//total
$totality = $presyo * $piraso;

//conditional statement
if ($piraso > 5) {
    $discount = 0.10;
    $hulingTotality = $totality - ($totality * $discount);
} else {
    $discount = 0;
    $hulingTotality = $totality;
}
//loop sample
$listahanProdukto = "";
for ($i = 1; $i <= $piraso; $i++) {
    $listahanProdukto .= "L Tshirt #$i added to cart<br>";
}
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
        <h3>Produktong nasa Cart: </h3>
        <?php echo $listahanProdukto; //list of product?>
        
        <p>Total (Bago ang discount): ₱<?php echo $totality; //total?></p>
        <p>Kasama ang Discount: %<?php echo $discount * 100; //computes discount?></p>
        <p>Huling Presyo: ₱<?php echo $hulingTotality; //final price?></p>
    </body>
</html>

<?php
    $produkto = "L Black Tshirt"; //name of the product
    $descri = "Itong Tshirt na to ay for men only at pinapakita nito <br> ang pagka dilim at dating na nagbibigay nang +100 aura";
    $presyo = 299.99; 
    $piraso = 3;

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
    $listahanProdukto .= "Item #$i added to cart<br>";
}

?>

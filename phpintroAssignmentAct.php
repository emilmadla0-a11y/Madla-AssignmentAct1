<!-- Name: Madla, Emilson Lio F. -->
<!-- Section: WD-201 -->
<?php
require 'function.php'; //uses require for function
?>

<?php include 'header.php'; //use include header now for clean format ?>

<h1><?php echo $produkto; //name of the product ?></h1>
<p>About the product: <?php echo $descri; //Shows product ?></p>
<br>
<p>Price: ₱<?php echo $presyo; //price ?></p>
<h1>Store Stocks</h1>
<!-- Added table for calculations of stocks and tax -->
<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Reorder?</th>
        <th>Total</th>
        <th>Tax</th>
    </tr>
<?php
//foreach loop handles each products in "$products"
foreach ($products as $product_name => $data):

$price = $data["price"];
$stock = $data["stock"];

//calling the functions
$reorderMsg = get_reorder_message($stock);
$totalValue = get_total_value($price, $stock);
$taxDue = get_tax_due($price, $stock, $tax_rate);
?>

    <tr>
        <td><?= $product_name //product ?></td>
        <td><?= $stock //stocks ?></td>
        <td><?= $reorderMsg //reorder ?></td>
        <td>₱<?= number_format($totalValue, 2) //total ?></td>
        <td>₱<?= number_format($taxDue, 2) //tax ?></td>
    </tr>
<?php endforeach; ?>

</table>
<!-- Uses produktoInfo.php -->
<p>Amount na gustong bilhin: <?php echo $piraso; //amount ?></p> 

<h3>Produktong nasa Cart: </h3>
<?php echo $listahanProdukto; //list of product ?>
        
<p>Total (Bago ang discount): ₱<?php echo $totality; //total ?></p>
<p>Kasama ang Discount: %<?php echo $discount * 100; //computes discount ?></p>
<p>Huling Presyo: ₱<?php echo $hulingTotality; //final price ?></p>
<br>

<?php include 'footer.php'; //use footer ?>

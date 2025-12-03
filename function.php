<?php
//Added strict types(turned on)
declare(strict_types = 1);

require 'produktoInfo.php';

$tax_rate = 12; //12% philippines VAT or PHP currency

//Added Multidimensional Arrays and 3-5 products in table 
    $products = [
    "L Black Tshirt" => ["price" => 299.99, "stock" => 6],
    "Oversized Hoodie" => ["price" => 799.00, "stock" => 3],
    "L T Cargo Pants" => ["price" => 350.00, "stock" => 12],
    "Classic L T Cap" => ["price" => 200.00, "stock" => 9],
    "L T Jacket" => ["price" => 500.00, "stock" => 4],
    "L T White Sneakers" => ["price" => 1500.00, "stock" => 15]
];

//tax function
function computeTax(float $amount): float {
    return $amount * 0.12; //12% VAT
}

//for reordering message function
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "YES" : "NO";
}

//getting the total function
function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

//tax function
function get_tax_due(float $price, int $qty, int $tax_rate = 0): float {
    $totalValue = $price * $qty;
    return $totalValue * ($tax_rate / 100);
}

?>
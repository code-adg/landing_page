<?php
session_start();

// Retrieve data from the form submission
$noOfTrees = isset($_POST['noOfTrees']) ? $_POST['noOfTrees'] : 0;
$treeType = isset($_POST['treeType']) ? $_POST['treeType'] : '';
$area = isset($_POST['area']) ? $_POST['area'] : 0;

// Calculate the price
function getPriceByTreeType($treeType) {
    switch ($treeType) {
        case "oak":
            return 60.00;
        case "pine":
            return 80.00;
        case "maple":
            return 90.00;
        default:
            return 0.00;
    }
}

$price = $noOfTrees * getPriceByTreeType($treeType);

// Store data in session
$_SESSION['noOfTrees'] = $noOfTrees;
$_SESSION['treeType'] = $treeType;
$_SESSION['area'] = $area;
$_SESSION['price'] = $price;

// Redirect to the payment page
header('Location: paymentPage.php');
exit;
?>

<?php 
	
	session_start();
	require "admin/includes/functions.php";
	require "admin/includes/db.php";
	
?>

<?php 

	if (isset($_GET['fid']) && isset($_GET['qty'])) {
		$fid = $_GET['fid'];
		$qty = isset($_GET['qty']) ? (int)$_GET['qty'] : 1;
		$wasFound = false;
        $i = 0;
        if (!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1) { 
			
			$_SESSION["cart_array"] = array(0 => array("item_id" => $fid, "quantity" => $qty));
		}
        else {
			
			$qty = isset($_GET['qty']) ? (int)$_GET['qty'] : 1;
    }
    ?>
<?php
require_once("../conf.php");      
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enable Datagrid Edit</title>
</head>
<body> 

<?php
$dg = new C_DataGrid("SELECT * FROM orders", "orderNumber", "orders"); 

/*
$col_name = 'orderNumber';
$rs     = $dg->db->select_limit($dg->get_sql(), 1, 1);            
$fm_type   = $dg->db->field_metatype($rs, $dg->db->field_index($rs, $col_name)); // PK metatype
$nv_type   = $dg->db->field_nativetype($rs, $dg->db->field_index($rs, $col_name)); // PK metatype
  
echo $fm_type;
echo "<br>";
echo $nv_type;

$foo = $dg->db->field_metacolumn($dg->get_sql_table(), "ID");
echo $foo->auto_increment;

*/


// change column titles
$dg -> set_col_title("orderNumber", "Order No.");
$dg -> set_col_title("orderDate", "Order Date");
$dg -> set_col_title("shippedDate", "Shipped Date");
$dg -> set_col_title("customerNumber", "Customer No.");
 
// hide a column
$dg -> set_col_hidden("requiredDate");

// enable edit
$dg -> enable_edit("INLINE", "CRUD"); 

$dg->enable_debug(true);
$dg -> display();

?>

</body>
</html>
<?php
require_once("../conf.php");      
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML Edit Controls</title>
</head>
<body> 

<?php
$dg = new C_DataGrid("select * from employees", "employeeNumber", "employees");
$dg -> set_col_title("employeeNumber", "Emp No.");
$dg -> set_col_title("lastName", "Last Name");
$dg -> set_col_title("firstName", "First Name");
$dg -> set_col_title("isActive", "Active?");
$dg -> set_col_format("email", "email");
$dg -> enable_edit("FORM", "CRUD");//FORM - INLINE ; CRUD = Create, Read, Update, and Delete
$dg -> set_row_color("",""); //#hover_color: Background color when mouse is over a row , #highlight_color: Background color when a row is clicked on
$dg -> set_col_hidden('employeeNumber',false);

$dg -> set_col_edittype("isActive", "checkbox","1:0");
$dg -> set_col_edittype("officeCode", "select", "1:San Francisco;2:Boston;3:NYC;4:Paris;5:Tokyo;6:Sydney;7:London");

$dg -> display();
?>

</body>
</html>
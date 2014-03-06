<?php
require_once("../conf.php");      
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employee Edit</title>
</head>
<body> 

<?php
$dg = new C_DataGrid("select * from employees", "id", "employees");
$dg->enable_edit("INLINE", "CRUD");   
$dg->enable_debug(true);

/*
$col_name = 'EmployeeID';
$rs     = $dg->db->select_limit($dg->get_sql(), 1, 1);            
$fm_type   = $dg->db->field_metatype($rs, $dg->db->field_index($rs, $col_name)); // PK metatype
$nv_type   = $dg->db->field_nativetype($rs, $dg->db->field_index($rs, $col_name)); // PK metatype

echo $fm_type;
echo "<br>";
echo $nv_type;

$foo = $dg->db->field_metacolumn("employees", 'EMPLOYEEID');
echo $foo->auto_increment;


print('<pre>');
print_r($dg->db->metacolumns("orders"));
print('</pre>');
*/        
$dg->display();
?>

</body>
</html>

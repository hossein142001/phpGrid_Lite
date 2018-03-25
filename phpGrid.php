
<?php   
	require_once(dirname(__FILE__) .'/conf.php');
	require_once(dirname(__FILE__) .'/server/classes/cls_db.php');   
	require_once(dirname(__FILE__) .'/server/classes/cls_datagrid.php');   
	require_once(dirname(__FILE__) .'/server/classes/cls_util.php');   
	require_once(dirname(__FILE__) .'/server/classes/cls_control.php');   
	require_once(dirname(__FILE__) .'/server/adodb5/adodb.inc.php');     
	define('GRID_SESSION_KEY', '_oPHPGRID');  
	define('JQGRID_ROWID_KEY', 'id');  
	define("CHECKBOX", "checkbox");  
	define("SELECT", "select");  
	define("MULTISELECT", "multiselect");   
?>
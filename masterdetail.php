<?php
require_once ('phpGrid.php');
if (! session_id ()) {
	session_start ();
}


$_8A5AC4CC694EF9B1FCDE489E5E9E9D6E = isset ( $_GET ['gn'] ) ? $_GET ['gn'] : die ( 'phpGrid fatal error: ULR parameter "gn" is not defined.' );
$db = new C_DataBase ( DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME );
$dg = unserialize ( $_SESSION [GRID_SESSION_KEY . '_' . $_8A5AC4CC694EF9B1FCDE489E5E9E9D6E] );

$dg=$dg->_485FB4C99DD632A980C101519C106BEF;

$page = $_GET ['page'];
$limit = $_GET ['rows'];
$sidx = $_GET ['sidx'];
$sord = $_GET ['sord'];
$id = $_GET ['id'];
if (! $sidx)
	$sidx = 1;
$rs = $db->_8D00AB5DB4831EFB77B1B8B18367B560 ( $dg->_821853BAB96B76F492924C9554DBDB09 (), 1, 1 );
$_7B6C2BDBBD2AF03C64A520410964D2F2 = "";
$_760EB019CDB8F62FF8AA9C0469129954 = ($_REQUEST ['_search'] == 'true') ? true : false;

if ($_760EB019CDB8F62FF8AA9C0469129954) {
	$_67BACCE5E5580D4DF8F07E46F4F129B9 = array ();
	$_67BACCE5E5580D4DF8F07E46F4F129B9 = $dg->_2323F5EC6DD5911A4FE2E40173B11BF3 ( $rs );
	
	$operand = array ('eq' => '=', 'ne' => '<>', 'lt' => '<', 'le' => '<=', 'gt' => '>', 'ge' => '>=', 'bw' => "LIKE '%{S}' ", 'bn' => " NOT LIKE '%{S}'", 'ew' => "LIKE '{S}%'", 'en' => "NOT LIKE '{S}%'", 'cn' => "LIKE '%{S}%'", 'nc' => "NOT LIKE '%{S}%'", 'in' => 'IN({S})', 'ni' => 'NOT IN({S})' );
	
	$OP=$operand[ $_REQUEST['searchOper'] ];
	
	$_F263E5B84D6C79F0B108E8DD213FE515 = $db->_39ADD6B4099DB99B597E2C89CADDDFB3 ( $rs, $db->_4CF52E24237F544BE9BC663B4DF0F9D7 ( $rs, $_REQUEST ['searchField'] ) );
	switch ($_F263E5B84D6C79F0B108E8DD213FE515) {
		case 'I' :
		case 'N' :
		case 'R' :
		case 'L' :
			if (strpos($OP , 'S'))
				$OP = ereg_replace('{S}', $_REQUEST['searchString'], $OP);
			else
				$OP .= $_REQUEST['searchString'];
			break;
		default :
			if (strpos($OP , 'S'))
				$OP = ereg_replace('{S}', $_REQUEST['searchString'], $OP);
			else
				$OP .= "'$_REQUEST[searchString]'";
			break;
	}
	
	$_7B6C2BDBBD2AF03C64A520410964D2F2 .= " AND " . $_REQUEST ['searchField'] . $OP ;
}

$key = $dg->_2EF6D143533EF68FA045EB639F422509();

$_7B6C2BDBBD2AF03C64A520410964D2F2 .= " AND " . $key . " = " . $id;

//$count = $dg->_D2BD737CCC9B0875126D6D8EDDBE94FE ();
$count = $db->_5FBCF77932543542C23E5582BE5F980B ( $db->_5D7405D6C5BF206648C6B627A5415C96 ( $dg->_821853BAB96B76F492924C9554DBDB09 () . (' WHERE 1=1 ' . $_7B6C2BDBBD2AF03C64A520410964D2F2) ) );
if ($count > 0 && $limit > 0) {
	$_459BCEA808FBD4E24DF0648C0F609C74 = ceil ( $count / $limit );
} else {
	$_459BCEA808FBD4E24DF0648C0F609C74 = 0;
}
if ($page > $_459BCEA808FBD4E24DF0648C0F609C74)
	$page = $_459BCEA808FBD4E24DF0648C0F609C74;
$start = $limit * $page - $limit;
if ($start < 0)
	$start = 0;
$SQL = $dg->_821853BAB96B76F492924C9554DBDB09 () . ( ' WHERE 1=1 ' . $_7B6C2BDBBD2AF03C64A520410964D2F2 ) . " ORDER BY $sidx $sord";

$result = $db->_8D00AB5DB4831EFB77B1B8B18367B560 ( $SQL, $limit, $start );
$_FC6333F2296503D4603EEA34F68C0B57 = $dg->_EBB1455BBBAF3BEB96500C87DE8CB4F2 ();
switch ($_FC6333F2296503D4603EEA34F68C0B57) {
	case "xml" :
		$data = "<?xml version='1.0' encoding='utf-8'?>";
		$data .= "<rows>";
		$data .= "<page>" . $page . "</page>";
		$data .= "<total>" . $_459BCEA808FBD4E24DF0648C0F609C74 . "</total>";
		$data .= "<records>" . $count . "</records>";
		while ( $row = $db->_D9EBE5634F9E374610F5696C28C39F90 ( $result ) ) {
			$data .= "<row id='" . $row [$dg->_778A589CB1CD4D5258CBEBE497B9ECAB ()] . "'>";
			for($i = 0; $i < $db->num_fields ( $result ); $i ++) {
				$_84F8B7DFD0844468481F41C56E82DAB5 = $db->field_name ( $result, $i );
				$data .= "<cell>" . $row [$_84F8B7DFD0844468481F41C56E82DAB5] . "</cell>";
			}
			$data .= "</row>";
		}
		$data .= "</rows>";
		header ( "Content-type: text/xml;charset=utf-8" );
		echo $data;
		break;
	case "json" :
		$_3A68A0CB401F20A978557A658D223497 = new stdClass ();
		$_3A68A0CB401F20A978557A658D223497->page = $page;
		$_3A68A0CB401F20A978557A658D223497->total = $_459BCEA808FBD4E24DF0648C0F609C74;
		$_3A68A0CB401F20A978557A658D223497->records = $count;
		$i = 0;
		$data = array ();
		while ( $row = $db->_D9EBE5634F9E374610F5696C28C39F90 ( $result ) ) {
			unset ( $data );
			$_3A68A0CB401F20A978557A658D223497->rows [$i] ['id'] = $row [$dg->_778A589CB1CD4D5258CBEBE497B9ECAB ()];
			for($j = 0; $j < $db->num_fields ( $result ); $j ++) {
				$_84F8B7DFD0844468481F41C56E82DAB5 = $db->field_name ( $result, $j );
				$data [] = $row [$_84F8B7DFD0844468481F41C56E82DAB5];
			}
			$_3A68A0CB401F20A978557A658D223497->rows [$i] ['cell'] = $data;
			$i ++;
		}
		echo json_encode ( $_3A68A0CB401F20A978557A658D223497 );
		break;
}
$dg = null;
$db = null;
?>
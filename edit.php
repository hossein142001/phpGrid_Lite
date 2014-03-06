<?php
require_once ("phpGrid.php");
if (! session_id())
{
	session_start();
}
if (! isset($HTTP_POST_VARS) && isset($_POST))
{
	$HTTP_POST_VARS = $_POST;
}
$_8A5AC4CC694EF9B1FCDE489E5E9E9D6E = isset($_GET['gn']) ? $_GET['gn'] : die(
'phpGrid fatal error: URL parameter "gn" is not defined');
$db = new C_DataBase(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
$dg = unserialize(
$_SESSION[GRID_SESSION_KEY . '_' . $_8A5AC4CC694EF9B1FCDE489E5E9E9D6E]);
$src = isset($_GET['src']) ? $_GET['src'] : '';
$dg = ($src == 'md') ? $dg->_485FB4C99DD632A980C101519C106BEF : $dg;
$arrFields = array();
$pk = $dg->_778A589CB1CD4D5258CBEBE497B9ECAB();
$_7087AD655BE52ACBE86BF98EB4A54894 = $_POST[JQGRID_ROWID_KEY];
$oper = isset($_POST['oper']) ? $_POST['oper'] : '';
$_907AFA1F0B32542AC409662FBE610773 = '';
if ($oper != '')
{
	$rs = $db->_8D00AB5DB4831EFB77B1B8B18367B560(
	$dg->_821853BAB96B76F492924C9554DBDB09(), 1, 1);
	foreach ($HTTP_POST_VARS as $key => $value)
	{
		if ($key != 'oper')
		{
			$_05485668FF1F9AF3E49F3672CEDBC092 = $db->_527688ACBDB18AC292DF48188EBA0F54(
			$dg->_F79525D2A3E5C3B987B720F490E0071E(), $key);
			if ($_05485668FF1F9AF3E49F3672CEDBC092)
			{
				if (! $_05485668FF1F9AF3E49F3672CEDBC092->auto_increment)
				{
					$arrFields[$key] = $value;
				}
			}
			else
			{
				$arrFields[$key] = $value;
			}
		}
	}
	if ($dg->debug) print_r($arrFields);
	$_F263E5B84D6C79F0B108E8DD213FE515 = $db->_39ADD6B4099DB99B597E2C89CADDDFB3(
	$rs, $db->_4CF52E24237F544BE9BC663B4DF0F9D7($rs, $pk));
	if ($dg->has_multiselect())
	{
		$_CF2853CDF6FA3C44681BA55ACC51A70F = explode(',', 
		$_7087AD655BE52ACBE86BF98EB4A54894);
		$_CEAE9D35FD20B335C39A2E69A46870B0 = '';
		foreach ($_CF2853CDF6FA3C44681BA55ACC51A70F as $key => $value)
		{
			if ($_F263E5B84D6C79F0B108E8DD213FE515 != 'I' &&
			 $_F263E5B84D6C79F0B108E8DD213FE515 != 'N' &&
			 $_F263E5B84D6C79F0B108E8DD213FE515 != 'R')
				$_CEAE9D35FD20B335C39A2E69A46870B0 .= "'" . trim($value) . "',";
			else
				$_CEAE9D35FD20B335C39A2E69A46870B0 .= $value . ',';
		}
		$_CEAE9D35FD20B335C39A2E69A46870B0 = substr(
		$_CEAE9D35FD20B335C39A2E69A46870B0, 0, - 1);
	}
	else
	{
		if ($_F263E5B84D6C79F0B108E8DD213FE515 != 'I' &&
		 $_F263E5B84D6C79F0B108E8DD213FE515 != 'N' &&
		 $_F263E5B84D6C79F0B108E8DD213FE515 != 'R') $_7087AD655BE52ACBE86BF98EB4A54894 = "'" .
		 $_7087AD655BE52ACBE86BF98EB4A54894 . "'";
	}
	switch ($oper)
	{
		case 'add':
			$_907AFA1F0B32542AC409662FBE610773 = $db->db->GetInsertSQL($rs, 
			$arrFields, true, get_magic_quotes_gpc());
			break;
		case 'edit':
			$_907AFA1F0B32542AC409662FBE610773 = $db->db->GetUpdateSQL($rs, 
			$arrFields, true, get_magic_quotes_gpc()) . ' WHERE ' . $pk . '=' .
			 $_7087AD655BE52ACBE86BF98EB4A54894;
			break;
		case 'del':
			preg_match("/FROM\s+" . ADODB_TABLE_REGEX . "/is", 
			$dg->_821853BAB96B76F492924C9554DBDB09(), $tableName);
			$tableName = $tableName[1];
			if ($dg->has_multiselect())
			{
				$_907AFA1F0B32542AC409662FBE610773 = 'DELETE FROM ' . $tableName .
				 ' WHERE ' . $pk . ' IN(' . $_CEAE9D35FD20B335C39A2E69A46870B0 .
				 ')';
			}
			else
			{
				$_907AFA1F0B32542AC409662FBE610773 = 'DELETE FROM ' . $tableName .
				 ' WHERE ' . $pk . '=' . $_7087AD655BE52ACBE86BF98EB4A54894;
			}
			break;
	}
	if ($dg->debug) echo 'SQL: ' . $_907AFA1F0B32542AC409662FBE610773 .
	 '<br /><br />';
	if ($_907AFA1F0B32542AC409662FBE610773 != '') $db->_5D7405D6C5BF206648C6B627A5415C96(
	$_907AFA1F0B32542AC409662FBE610773);
}
$dg = null;
$db = null;
?>

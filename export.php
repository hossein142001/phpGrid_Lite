<?php
require_once ('phpGrid.php');
if (! session_id())
{
	session_start();
}
$_8A5AC4CC694EF9B1FCDE489E5E9E9D6E = isset($_GET['gn']) ? $_GET['gn'] : die(
'phpGrid fatal error: URL parameter "gn" is not defined');
$db = new C_DataBase(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
$dg = unserialize(
$_SESSION[GRID_SESSION_KEY . '_' . $_8A5AC4CC694EF9B1FCDE489E5E9E9D6E]);
$_F0135D302285919E33CA08ACFA0822E5 = $dg->_F0135D302285919E33CA08ACFA0822E5;
if ($_F0135D302285919E33CA08ACFA0822E5 == null)
{
	die(
	'Cannot export the grid. Please use enable_export() method to enable this feature.');
}
$sord = (isset($_GET['sord'])) ? $_GET['sord'] : 'asc';
$sidx = (isset($_GET['sidx'])) ? $_GET['sidx'] : 1;
if (! $sidx) $sidx = 1;
$rs = $db->_8D00AB5DB4831EFB77B1B8B18367B560(
$dg->_821853BAB96B76F492924C9554DBDB09(), 1, 1);
$_7B6C2BDBBD2AF03C64A520410964D2F2 = "";
$_760EB019CDB8F62FF8AA9C0469129954 = ($_REQUEST['_search'] == 'true') ? true : false;
if ($_760EB019CDB8F62FF8AA9C0469129954)
{
	$_67BACCE5E5580D4DF8F07E46F4F129B9 = array();
	$_67BACCE5E5580D4DF8F07E46F4F129B9 = $dg->_2323F5EC6DD5911A4FE2E40173B11BF3(
	$rs);
	foreach ($_REQUEST as $key => $value)
	{
		if (in_array($key, $_67BACCE5E5580D4DF8F07E46F4F129B9))
		{
			$_F263E5B84D6C79F0B108E8DD213FE515 = $db->_39ADD6B4099DB99B597E2C89CADDDFB3(
			$rs, $db->_4CF52E24237F544BE9BC663B4DF0F9D7($rs, $key));
			switch ($_F263E5B84D6C79F0B108E8DD213FE515)
			{
				case 'I':
				case 'N':
				case 'R':
				case 'L':
					$_7B6C2BDBBD2AF03C64A520410964D2F2 .= " AND " . $key . " = " .
					 $value;
					break;
				default:
					$_7B6C2BDBBD2AF03C64A520410964D2F2 .= " AND " . $key .
					 " LIKE '" . $value . "%'";
					break;
			}
		}
	}
}
$SQL = $dg->_821853BAB96B76F492924C9554DBDB09() .
 (($_760EB019CDB8F62FF8AA9C0469129954) ? ' WHERE 1=1 ' .
 $_7B6C2BDBBD2AF03C64A520410964D2F2 : '') . " ORDER BY $sidx $sord";
$result = $db->_5D7405D6C5BF206648C6B627A5415C96($SQL);
$_D78B63487076C8362C69E1F73F070780 = $db->_5FBCF77932543542C23E5582BE5F980B(
$result);
$_F9EB1EE7430F1E455EDA156BED19DD68 = $db->num_fields($result);
$_CF0A584CDCFB7C5865C3C6807292530D = array();
$_CF0A584CDCFB7C5865C3C6807292530D = $dg->_251D1C1E959494F56D699E66F2C99EA0();
$j = 0;
switch ($_F0135D302285919E33CA08ACFA0822E5)
{
	case 'HTML':
		header("Content-type: text/html");
		header(
		"Content-disposition:  attachment; filename=Grid_" .
		 $_8A5AC4CC694EF9B1FCDE489E5E9E9D6E . "_" . date("Y-m-d") . ".htm");
		header('Expires: 0');
		header('Cache-Control: cache, must-revalidate');
		header('Pragma: public');
		echo '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>' .
		 "\n";
		echo '<table border="1" cellspacing="0" cellpadding="2">' . "\n";
		echo '<thead>' . "\n";
		while ($row = $db->_D9EBE5634F9E374610F5696C28C39F90($rs))
		{
			echo '<tr style="background-color:black;color:white">';
			for ($j = 0; $j < $db->num_fields($rs); $j ++)
			{
				$_84F8B7DFD0844468481F41C56E82DAB5 = $db->field_name($rs, $j);
				if (! in_array($_84F8B7DFD0844468481F41C56E82DAB5, 
				$dg->_053D96FF84E696405652B917C760E4B4()))
				{
					if (isset(
					$_CF0A584CDCFB7C5865C3C6807292530D[$_84F8B7DFD0844468481F41C56E82DAB5]))
					{
						echo '<th>' .
						 $_CF0A584CDCFB7C5865C3C6807292530D[$_84F8B7DFD0844468481F41C56E82DAB5] .
						 '</th>';
					}
					else
					{
						echo '<th>' . $_84F8B7DFD0844468481F41C56E82DAB5 .
						 '</th>';
					}
				}
			}
			echo '</tr>' . "\n";
		}
		echo '</thead>' . "\n";
		echo '<tbody>' . "\n";
		while ($row = $db->_D9EBE5634F9E374610F5696C28C39F90($result))
		{
			echo '<tr>';
			for ($j = 0; $j < $db->num_fields($result); $j ++)
			{
				$_84F8B7DFD0844468481F41C56E82DAB5 = $db->field_name($result, 
				$j);
				if (! in_array($_84F8B7DFD0844468481F41C56E82DAB5, 
				$dg->_053D96FF84E696405652B917C760E4B4())) echo '<td>' .
				 $row[$_84F8B7DFD0844468481F41C56E82DAB5] . '&nbsp;</td>';
			}
			echo '</tr>' . "\n";
		}
		echo '</tbody>' . "\n";
		echo '</table>' . "\n";
		echo '</body></html>';
		break;
	case 'EXCEL':
		header("Content-type: text/xml");
		header(
		"Content-disposition:  attachment; filename=Grid_" .
		 $_8A5AC4CC694EF9B1FCDE489E5E9E9D6E . "_" . date("Y-m-d") . ".xml");
		header('Expires: 0');
		header('Cache-Control: cache, must-revalidate');
		header('Pragma: public');
		echo '<?xml version="1.0"?>
            <?mso-application progid="Excel.Sheet"?>
            <Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
             xmlns:o="urn:schemas-microsoft-com:office:office"
             xmlns:x="urn:schemas-microsoft-com:office:excel"
             xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
             xmlns:html="http://www.w3.org/TR/REC-html40">
             <DocumentProperties xmlns="urn:schemas-microsoft-com:office:office">
              <Author>phpGrid.com</Author>
              <Created></Created>
              <LastSaved></LastSaved>
              <Version></Version>
             </DocumentProperties>
             <ExcelWorkbook xmlns="urn:schemas-microsoft-com:office:excel">
                <WindowHeight>768</WindowHeight>
                <WindowWidth>1024</WindowWidth>
                <WindowTopX>0</WindowTopX>
                <WindowTopY>0</WindowTopY>
                <ProtectStructure>False</ProtectStructure>
                <ProtectWindows>False</ProtectWindows>
            </ExcelWorkbook>
            <Styles>
                <Style ss:ID="Default" ss:Name="Normal">
                    <Alignment ss:Vertical="Bottom" />
                    <Borders/>
                    <Font ss:FontName="Arial" ss:Size="8" />
                    <Interior/>
                    <NumberFormat />
                    <Protection />
                </Style>
                <Style ss:ID="sHyperlink" ss:Name="Hyperlink">
                    <Font ss:Color="#0000FF" ss:Underline="Single" />
                </Style>
                <Style ss:ID="sDate">
                    <NumberFormat ss:Format="Short Date"/>
                </Style>
                <Style ss:ID="sNumber">
                    <NumberFormat/>
                </Style>                
                <Style ss:ID="sHeader">
                    <Font ss:Family="Arial" ss:Bold="1" />
                </Style>
                <Style ss:ID="sDecimal">
                    <NumberFormat ss:Format="Fixed"/>
                </Style>
            </Styles>';
		echo '<Worksheet ss:Name="Sheet1">
            <Table ss:ExpandedColumnCount="' .
		 $_F9EB1EE7430F1E455EDA156BED19DD68 .
		 '" 
              ss:ExpandedRowCount="' .
		 ($_D78B63487076C8362C69E1F73F070780 + 1) .
		 '" x:FullColumns="1"
              x:FullRows="1">';
		while ($row = $db->_D9EBE5634F9E374610F5696C28C39F90($rs))
		{
			echo '<Row>';
			for ($j = 0; $j < $_F9EB1EE7430F1E455EDA156BED19DD68; $j ++)
			{
				$_84F8B7DFD0844468481F41C56E82DAB5 = $db->field_name($rs, $j);
				if (! in_array($_84F8B7DFD0844468481F41C56E82DAB5, 
				$dg->_053D96FF84E696405652B917C760E4B4()))
				{
					if (isset(
					$_CF0A584CDCFB7C5865C3C6807292530D[$_84F8B7DFD0844468481F41C56E82DAB5]))
					{
						echo '<Cell ss:StyleID="sHeader"><Data ss:Type="String">' .
						 str_replace('>', '&gt;', 
						str_replace('<', '&lt;', 
						$_CF0A584CDCFB7C5865C3C6807292530D[$_84F8B7DFD0844468481F41C56E82DAB5])) .
						 '</Data></Cell>';
					}
					else
					{
						echo '<Cell ss:StyleID="sHeader"><Data ss:Type="String">' .
						 str_replace('>', '&gt;', 
						str_replace('<', '&lt;', 
						$_84F8B7DFD0844468481F41C56E82DAB5)) . '</Data></Cell>';
					}
				}
			}
			echo '</Row>' . "\n";
		}
		$_F263E5B84D6C79F0B108E8DD213FE515 = 'C';
		while ($row = $db->_D9EBE5634F9E374610F5696C28C39F90($result))
		{
			echo '<Row>';
			for ($j = 0; $j < $_F9EB1EE7430F1E455EDA156BED19DD68; $j ++)
			{
				$_84F8B7DFD0844468481F41C56E82DAB5 = $db->field_name($result, 
				$j);
				if (! in_array($_84F8B7DFD0844468481F41C56E82DAB5, 
				$dg->_053D96FF84E696405652B917C760E4B4()))
				{
					$_F263E5B84D6C79F0B108E8DD213FE515 = $db->_39ADD6B4099DB99B597E2C89CADDDFB3(
					$result, 
					$db->_4CF52E24237F544BE9BC663B4DF0F9D7($result, 
					$_84F8B7DFD0844468481F41C56E82DAB5));
					switch ($_F263E5B84D6C79F0B108E8DD213FE515)
					{
						case 'D':
							echo '<Cell ss:StyleID="sDate"><Data ss:Type="String">' .
							 str_replace('>', '&gt;', 
							str_replace('<', '&lt;', 
							$row[$_84F8B7DFD0844468481F41C56E82DAB5])) .
							 '</Data></Cell>';
							break;
						case 'I':
						case 'R':
							echo '<Cell ss:StyleID="sNumber"><Data ss:Type="Number">' .
							 $row[$_84F8B7DFD0844468481F41C56E82DAB5] .
							 '</Data></Cell>';
							break;
						case 'N':
							echo '<Cell ss:StyleID="sDecimal"><Data ss:Type="Number">' .
							 $row[$_84F8B7DFD0844468481F41C56E82DAB5] .
							 '</Data></Cell>';
							break;
						default:
							echo '<Cell><Data ss:Type="String">' .
							 str_replace('>', '&gt;', 
							str_replace('<', '&lt;', 
							$row[$_84F8B7DFD0844468481F41C56E82DAB5])) .
							 '</Data></Cell>';
					}
				}
			}
			echo '</Row>' . "\n";
		}
		echo '</Table>';
		echo '<WorksheetOptions 
              xmlns="urn:schemas-microsoft-com:office:excel">
                <Print>
                    <ValidPrinterInfo />
                    <HorizontalResolution>800</HorizontalResolution>
                    <VerticalResolution>0</VerticalResolution>
                </Print>
                <Selected />
                <Panes>
                    <Pane>
                        <Number>3</Number>
                        <ActiveRow>1</ActiveRow>
                    </Pane>
                </Panes>
                <ProtectObjects>False</ProtectObjects>
                <ProtectScenarios>False</ProtectScenarios>
            </WorksheetOptions>
        </Worksheet>
        </Workbook>';
		break;
}
$dg = null;
$db = null;
?>
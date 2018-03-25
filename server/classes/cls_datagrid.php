<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/' . ABS_PATH . '/phpGrid.php');
if (! session_id())
{
	session_start();
}
class C_DataGrid
{
	private $sql;
	private $_82AE25C96B23C3058D7199BA4BFA2713;
	private $_155E326C545667DA4ADBDF4713536CE7;
	private $_00F02F1C04FD0E38007FE5C0ECE23227;
	private $_67BACCE5E5580D4DF8F07E46F4F129B9;
	private $_53C4CD9B20845EB7C62DA55ECCCE5536;
	private $_CF0A584CDCFB7C5865C3C6807292530D;
	private $_CFDCEF9F776D5B87B3AF7C273DB2A716;
	private $_463514EB96C66C052BE91960E67E03BD;
	private $_409A43BCAE1FE85283D6BD346221CF95;
	private $_4560A21A888EE38CDF022A9B61703B51;
	private $_3F2BE84D5FB33E471D0BAA66864E3074;
	private $_0E9047E2507C69D9E1F52D2BFB452CEB;
	private $_05F952D48FA67A9D960D1562285CDAF3;
	private $_B5648762BE4E1F7296F7B5F857952DFA;
	private $_10A17D5E2756DDBB60281C9666DA167A;
	private $_BA450DBC95C8EB73915BF54C1D1FB456;
	private $_59F2E5EE946A3DFD887010553C2AF5BE;
	private $_66A1D44D8EBB8CCB544158AB9A7882C7;
	private $_F8F9428CD5347F6FD695CCAE9A82D773;
	private $_40D47B5F477DFE4CF15B3281D0F6189D;
	private $_AA968E34A86116959AA1510193725726;
	private $_941F406D66567334DD100E04A62E6A4E;
	private $_E4618AD279203333B6F541C20B854115;
	private $_9D52AC4F50DA358F5F3C69BCB13A395F;
	private $_FC7CFC4F3DFBD7DE1F4D2CF1FDB74AA9;
	private $_FE7A37E7099936B39D498FA296422096;
	private $_FB44B67621F544F649E266A3A3DD1483;
	private $_FCC12EDB23C20714E21503C935E45A73;
	private $_D96FC20062C81F31BF81E310A850A8A3;
	private $_835FFBF31EE664AC75EE5415DFE1DF6C;
	private $_C504CE513FA02FC0C097F8B905CABD18;
	private $_2047C88B385C81C24AD7C2BE34001A02;
	private $_44E26B5407CBF7A184FD5293003FB530;
	private $_99797E679AB7054EC056B36FB49AC3AC;
	private $_E6838FCC20A0FEFC14AADA6D7EB86E2C;
	private $_8BC6CC22CEB230A07F150B23642D16BA;
	private $_7FFFCAE2CE19622FB5904EE7988FBDED;
	private $_C00B0D48DE5B401832E1AAB3FE4BF0F4;
	private $_370BAAFBC7C29EC4C144DC3DF8950C50;
	private $_96960C9C37D3D72A3B4FE1E6C10D8A09;
	private $_6CE32431FD51CCA9C9FCADF5F28E74FD;
	private $_0809869D6A1EEF2DEC1395F670A46E20;
	private $_1188C8FE20E21178C2AE2769ECC33A17;
	private $_53CF29BAE246EA04F7E185D744873723;
	private $_E8844A2656AEE4F30B91D8B12F73F2DC;
	private $_28A2F4B167A10BE04256CE57077A544D;
	private $_559F681046C0C6F6E72488A23A5F0AD5;
	private $_C3122687D6F8F4182585B45E0556A196;
	private $_0E39904D7EB3B3A8DB174012714D2C0D;
	private $_A80F62E0D0890FC5C6232BE28E3D5B48;
	private $_F0A34FC9BB983B79191E27F561AF4CFD;
	public $_F0135D302285919E33CA08ACFA0822E5;
	public $_9285D3447B999C7A1BE3D673C80D0C94;
	public $debug;
	public $db;
	public $_7298BD9DC41501DEF80CAC2AAE485FA2;
	public $_B82F8943D3B270A54DD86991EF543493;
	public $_485FB4C99DD632A980C101519C106BEF;
	
	public function __construct ($sql, $_155E326C545667DA4ADBDF4713536CE7 = 'id', 
	$_82AE25C96B23C3058D7199BA4BFA2713 = '', $extra_params = '')
	{
		$this->db = new C_DataBase(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, 
		DB_NAME, DB_TYPE);
		$this->sql = $sql;
		$this->_155E326C545667DA4ADBDF4713536CE7 = $_155E326C545667DA4ADBDF4713536CE7;
		$this->_00F02F1C04FD0E38007FE5C0ECE23227 = null;
		$this->_82AE25C96B23C3058D7199BA4BFA2713 = $_82AE25C96B23C3058D7199BA4BFA2713;
		$this->db->_5D7405D6C5BF206648C6B627A5415C96("set names '".CharSetNames."'");
		$this->_0809869D6A1EEF2DEC1395F670A46E20 = $this->db->_5FBCF77932543542C23E5582BE5F980B(
		$this->db->_5D7405D6C5BF206648C6B627A5415C96($sql));
		$results = $this->db->_8D00AB5DB4831EFB77B1B8B18367B560($sql, 1, 1);
		$this->_1188C8FE20E21178C2AE2769ECC33A17 = $this->db->num_fields(
		$results);
		$this->_53C4CD9B20845EB7C62DA55ECCCE5536 = array();
		$this->_CF0A584CDCFB7C5865C3C6807292530D = array();
		$this->_CFDCEF9F776D5B87B3AF7C273DB2A716 = array();
		$this->_463514EB96C66C052BE91960E67E03BD = array();
		$this->_409A43BCAE1FE85283D6BD346221CF95 = array();
		$this->_4560A21A888EE38CDF022A9B61703B51 = array();
		$this->_67BACCE5E5580D4DF8F07E46F4F129B9 = array();
		$this->_3F2BE84D5FB33E471D0BAA66864E3074 = array();
		$this->col_formats = array();
		$this->_05F952D48FA67A9D960D1562285CDAF3 = array();
		$this->_B5648762BE4E1F7296F7B5F857952DFA = ($_82AE25C96B23C3058D7199BA4BFA2713 ==
		 '') ? 'list1' : $_82AE25C96B23C3058D7199BA4BFA2713;
		$this->_10A17D5E2756DDBB60281C9666DA167A = '"' . ABS_PATH .
		 '/data.php?gn=' . $this->_B5648762BE4E1F7296F7B5F857952DFA . '"';
		$this->_BA450DBC95C8EB73915BF54C1D1FB456 = 'json';
		$this->_59F2E5EE946A3DFD887010553C2AF5BE = 'GET';
		$this->_66A1D44D8EBB8CCB544158AB9A7882C7 = array();
		$this->_F8F9428CD5347F6FD695CCAE9A82D773 = array();
		$this->_40D47B5F477DFE4CF15B3281D0F6189D = '"#' .
		 $this->_B5648762BE4E1F7296F7B5F857952DFA . '_pager1"';
		$this->_AA968E34A86116959AA1510193725726 = 20;
		$this->_941F406D66567334DD100E04A62E6A4E = array( 10 , 20 , 30 );
		$this->_E4618AD279203333B6F541C20B854115 = '';
		$this->_9D52AC4F50DA358F5F3C69BCB13A395F = 'asc';
		$this->_FC7CFC4F3DFBD7DE1F4D2CF1FDB74AA9 = true;
		$this->_FE7A37E7099936B39D498FA296422096 = false;
		$this->_FB44B67621F544F649E266A3A3DD1483 = false;
		$this->_FCC12EDB23C20714E21503C935E45A73 = 800;
		$this->_D96FC20062C81F31BF81E310A850A8A3 = '100%';
		$this->_835FFBF31EE664AC75EE5415DFE1DF6C = $_82AE25C96B23C3058D7199BA4BFA2713 .
		 '&nbsp;';
		$this->_2047C88B385C81C24AD7C2BE34001A02 = true;
		$this->_44E26B5407CBF7A184FD5293003FB530 = 22;
		$this->_C504CE513FA02FC0C097F8B905CABD18 = false;
		$this->_99797E679AB7054EC056B36FB49AC3AC = '';
		$this->_E6838FCC20A0FEFC14AADA6D7EB86E2C = false;
		$this->_8BC6CC22CEB230A07F150B23642D16BA = true;
		$this->_C00B0D48DE5B401832E1AAB3FE4BF0F4 = false;
		$this->_370BAAFBC7C29EC4C144DC3DF8950C50 = false;
		$this->_7FFFCAE2CE19622FB5904EE7988FBDED = 'Loading phpGrid ...';
		$this->_96960C9C37D3D72A3B4FE1E6C10D8A09 = true;
		$this->_6CE32431FD51CCA9C9FCADF5F28E74FD = array( 'is_resizable' => false , 
		'min_width' => 300 , 'min_height' => 100 );
		$this->_0809869D6A1EEF2DEC1395F670A46E20 = 0;
		$this->_1188C8FE20E21178C2AE2769ECC33A17 = 0;
		$this->_E8844A2656AEE4F30B91D8B12F73F2DC = 'phpGrid Professional Demo(v4.0) jgGrid(v3.6.4) jQuery(v1.3.2) jQuery UI(1.7.3)';
		$this->_0E39904D7EB3B3A8DB174012714D2C0D = null;
		$this->_A80F62E0D0890FC5C6232BE28E3D5B48 = array();
		$this->_F0A34FC9BB983B79191E27F561AF4CFD = 'start';
		$this->_F0135D302285919E33CA08ACFA0822E5 = null;
		$this->_9285D3447B999C7A1BE3D673C80D0C94 = ABS_PATH . '/export.php?gn=' .
		 $this->_B5648762BE4E1F7296F7B5F857952DFA;
		$this->_28A2F4B167A10BE04256CE57077A544D = 'NONE';
		$this->_559F681046C0C6F6E72488A23A5F0AD5 = null;
		$this->_C3122687D6F8F4182585B45E0556A196 = false;
		$this->debug = false;
		$this->_7298BD9DC41501DEF80CAC2AAE485FA2 = '';
		$this->_B82F8943D3B270A54DD86991EF543493 = null;
		$this->_485FB4C99DD632A980C101519C106BEF = null;
		$_2E73F1CB0191197774B64693B19E0E81 = strtotime(date("Y-m-d"));
		$_F109AAFB832AD2DEAC8497DFA46629C7 = strtotime("2014-12-22");
		if ($_F109AAFB832AD2DEAC8497DFA46629C7 < $_2E73F1CB0191197774B64693B19E0E81 && 0)
		{
			die(
			"<h3>Your copy of the phpGrid has expired. 
				Visit <a href='http://www.phpgrid.com/grid/download'>phpGrid download</a> for  
				information on obtaining a full version. <br /><br />
				<u>You will not see this message with the full version of phpGrid</u>. <br /><br />
				For questions, please email us at <a href='mailto:support@phpgrid.com'>support@phpgrid.com</a></h3>
				<h2>-Team phpGrid</h2>");
		}
	}
	public function _467180D7C72C5DCE3F4AFED765F798AF ()
	{
		$_BA14039F0E958B2349059AB1B041943B = $this->db;
		$this->_0809869D6A1EEF2DEC1395F670A46E20 = $_BA14039F0E958B2349059AB1B041943B->_5FBCF77932543542C23E5582BE5F980B(
		$_BA14039F0E958B2349059AB1B041943B->_5D7405D6C5BF206648C6B627A5415C96(
		$this->sql));
		$results = $_BA14039F0E958B2349059AB1B041943B->_8D00AB5DB4831EFB77B1B8B18367B560(
		$this->sql, 1, 1);
		$this->_1188C8FE20E21178C2AE2769ECC33A17 = $_BA14039F0E958B2349059AB1B041943B->num_fields(
		$results);
		$this->_67BACCE5E5580D4DF8F07E46F4F129B9 = $this->_2323F5EC6DD5911A4FE2E40173B11BF3(
		$results);
		$this->set_colNames($results);
		$this->set_colModel($results);
	}
	public function _2323F5EC6DD5911A4FE2E40173B11BF3 ($results)
	{
		$_BA14039F0E958B2349059AB1B041943B = $this->db;
		$_67BACCE5E5580D4DF8F07E46F4F129B9 = array();
		for ($i = 0; $i < $this->_1188C8FE20E21178C2AE2769ECC33A17; $i ++)
		{
			$_789DE33D53262243E6601876D24EE696 = $_BA14039F0E958B2349059AB1B041943B->field_name(
			$results, $i);
			$_67BACCE5E5580D4DF8F07E46F4F129B9[] = $_789DE33D53262243E6601876D24EE696;
		}
		return $_67BACCE5E5580D4DF8F07E46F4F129B9;
	}
	public function set_colNames ($results)
	{
		$_BA14039F0E958B2349059AB1B041943B = $this->db;
		$col_names = array();
		for ($i = 0; $i < $this->_1188C8FE20E21178C2AE2769ECC33A17; $i ++)
		{
			$_84F8B7DFD0844468481F41C56E82DAB5 = $_BA14039F0E958B2349059AB1B041943B->field_name(
			$results, $i);
			if (isset(
			$this->_CF0A584CDCFB7C5865C3C6807292530D[$_84F8B7DFD0844468481F41C56E82DAB5]))
				$col_names[] = $this->_CF0A584CDCFB7C5865C3C6807292530D[$_84F8B7DFD0844468481F41C56E82DAB5];
			else
				$col_names[] = $_84F8B7DFD0844468481F41C56E82DAB5;
		}
		$this->_66A1D44D8EBB8CCB544158AB9A7882C7 = $col_names;
		return $col_names;
	}
	public function _2ECF0B0D23F4FEE396EF7F83A669AD37 ()
	{
		return $this->_66A1D44D8EBB8CCB544158AB9A7882C7;
	}
	public function set_colModel ($results)
	{
		$_BA14039F0E958B2349059AB1B041943B = $this->db;
		$_2A4E8023EF0D47D22093E05614BF3DBF = array();
		for ($i = 0; $i < $this->_1188C8FE20E21178C2AE2769ECC33A17; $i ++)
		{
			$_84F8B7DFD0844468481F41C56E82DAB5 = $_BA14039F0E958B2349059AB1B041943B->field_name(
			$results, $i);
			$_3F200CC61D0ED71A411120D72C51A4AD = $_BA14039F0E958B2349059AB1B041943B->_39ADD6B4099DB99B597E2C89CADDDFB3(
			$results, $i);
			$cols = array();
			$cols['name'] = $_84F8B7DFD0844468481F41C56E82DAB5;
			$cols['index'] = $_84F8B7DFD0844468481F41C56E82DAB5;
			$cols['hidden'] = isset(
			$this->_53C4CD9B20845EB7C62DA55ECCCE5536[$_84F8B7DFD0844468481F41C56E82DAB5]);
			if (isset(
			$this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]))
			{
				$cols['edittype'] = $this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['type'];
			}
			else
			{
				$cols['edittype'] = ($_3F200CC61D0ED71A411120D72C51A4AD == 'X') ? 'textarea' : 'text';
			}
			switch ($this->_28A2F4B167A10BE04256CE57077A544D)
			{
				case 'CELL':
				case 'INLINE':
				case 'FORM':
					$cols['editable'] = true;
					break;
				default:
					$cols['editable'] = false;
			}
			$editoptions = array();
			if (($_3F200CC61D0ED71A411120D72C51A4AD == 'D' ||
			 $_3F200CC61D0ED71A411120D72C51A4AD == 'T') &&
			 ! in_array($_84F8B7DFD0844468481F41C56E82DAB5, 
			$this->_CFDCEF9F776D5B87B3AF7C273DB2A716))
			{
				$editoptions['dataInit'] = '###function(el){$(el).datepicker({dateFormat:\'yy-mm-dd\'});}###';
			}
			elseif (isset(
			$this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]))
			{
				if ($this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['value'] !=
				 null)
				{
					$editoptions['value'] = $this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['value'];
				}
				$editoptions['multiple'] = $this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['multiple'];
				if ($this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['dataUrl'] !=
				 null)
				{
					$editoptions['dataUrl'] = $this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['dataUrl'];
				}
			}
			$editrules = array();
			$editrules['edithidden'] = (isset(
			$this->_53C4CD9B20845EB7C62DA55ECCCE5536[$_84F8B7DFD0844468481F41C56E82DAB5]['edithidden']) &&
			 $this->_53C4CD9B20845EB7C62DA55ECCCE5536[$_84F8B7DFD0844468481F41C56E82DAB5]['edithidden'] ==
			 true) ? true : false;
			$editrules['required'] = in_array(
			$_84F8B7DFD0844468481F41C56E82DAB5, 
			$this->_463514EB96C66C052BE91960E67E03BD);
			if (isset(
			$this->_0E9047E2507C69D9E1F52D2BFB452CEB[$_84F8B7DFD0844468481F41C56E82DAB5]))
			{
				$editrules[$this->_0E9047E2507C69D9E1F52D2BFB452CEB[$_84F8B7DFD0844468481F41C56E82DAB5]] = true;
			}
			else
			{
				switch ($_3F200CC61D0ED71A411120D72C51A4AD)
				{
					case 'N':
					case 'I':
					case 'R':
						$editrules['number'] = true;
						break;
					case 'D':
						$editrules['date'] = true;
						break;
				}
			}
			if (isset($this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]))
			{
				if (isset(
				$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['link']))
				{
					$cols['formatter'] = 'link';
					$formatoptions = array();
					$formatoptions['target'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['link']['target'];
					$cols['formatoptions'] = $formatoptions;
				}
				elseif (isset(
				$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['showlink']))
				{
					$cols['formatter'] = 'showlink';
					$formatoptions = array();
					$formatoptions['baseLinkUrl'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['showlink']['baseLinkUrl'];
					$formatoptions['idName'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['showlink']['idName'];
					$formatoptions['addParam'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['showlink']['addParam'];
					$formatoptions['target'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['showlink']['target'];
					$cols['formatoptions'] = $formatoptions;
				}
				elseif (isset(
				$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['image']))
				{
					$cols['formatter'] = '###imageFormatter###';
					$cols['unformat'] = '###imageUnformatter###';
				}
				elseif (isset(
				$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['email']))
				{
					$cols['formatter'] = 'email';
				}
				elseif (isset(
				$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['integer']))
				{
					$cols['formatter'] = 'integer';
					$formatoptions = array();
					$formatoptions['thousandsSeparator'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['integer']['thousandsSeparator'];
					$formatoptions['defaultValue'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['integer']['defaultValue'];
					$cols['formatoptions'] = $formatoptions;
				}
				elseif (isset(
				$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['number']))
				{
					$cols['formatter'] = 'number';
					$formatoptions = array();
					$formatoptions['thousandsSeparator'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['number']['thousandsSeparator'];
					$formatoptions['decimalSeparator'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['number']['decimalSeparator'];
					$formatoptions['decimalPlaces'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['number']['decimalPlaces'];
					$formatoptions['defaultValue'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['number']['defaultValue'];
					$cols['formatoptions'] = $formatoptions;
				}
				elseif (isset(
				$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['currency']))
				{
					$cols['formatter'] = 'currency';
					$formatoptions = array();
					$formatoptions['prefix'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['currency']['prefix'];
					$formatoptions['suffix'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['currency']['suffix'];
					$formatoptions['thousandsSeparator'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['currency']['thousandsSeparator'];
					$formatoptions['decimalSeparator'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['currency']['decimalSeparator'];
					$formatoptions['decimalPlaces'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['currency']['decimalPlaces'];
					$formatoptions['defaultValue'] = $this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['currency']['defaultValue'];
					$cols['formatoptions'] = $formatoptions;
				}
			}
			elseif (isset(
			$this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]) &&
			 ($this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['type'] ==
			 'select'))
			{
				$cols['formatter'] = 'select';
			}
			$cols['editoptions'] = $editoptions;
			$cols['editrules'] = $editrules;
			$_2A4E8023EF0D47D22093E05614BF3DBF[] = $cols;
		}
		$this->_F8F9428CD5347F6FD695CCAE9A82D773 = $_2A4E8023EF0D47D22093E05614BF3DBF;
	}
	public function _1627C484A42569A3772C433CCB1C3BEE ()
	{
		return $this->_F8F9428CD5347F6FD695CCAE9A82D773;
	}
	private function _C741824B64386B8DF887DBDD061EC915 ()
	{
		if (! empty($this->_A80F62E0D0890FC5C6232BE28E3D5B48))
		{
			echo '<style type="text/css">' . "\n";
			echo '#' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 ' .ui-state-hover{background:' .
			 $this->_A80F62E0D0890FC5C6232BE28E3D5B48['hover'] . ';color:black}' .
			 "\n";
			if ($this->_A80F62E0D0890FC5C6232BE28E3D5B48['highlight'] != null) echo '#' .
			 $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 ' .ui-state-highlight{background:' .
			 $this->_A80F62E0D0890FC5C6232BE28E3D5B48['highlight'] . ';}' . "\n";
			if ($this->_A80F62E0D0890FC5C6232BE28E3D5B48['altrow'] != null) echo '#' .
			 $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 ' .ui-priority-secondary{background:' .
			 $this->_A80F62E0D0890FC5C6232BE28E3D5B48['altrow'] .
			 ';opacity: .7; filter:Alpha(Opacity=70); font-weight: normal; }' .
			 "\n";
			echo '</style>' . "\n";
		}
	}
	private function _FD47F68BFD37239494C5104757C10967 ()
	{
		if ($this->_00F02F1C04FD0E38007FE5C0ECE23227 == null)
		{
			echo '<link rel="stylesheet" type="text/css" media="screen" href="' .
			 ABS_PATH . '/css/' . $this->_F0A34FC9BB983B79191E27F561AF4CFD .
			 '/jquery-ui-1.7.3.custom.css" />' . "\n";
			echo '<link rel="stylesheet" type="text/css" media="screen" href="' .
			 ABS_PATH . '/css/ui.jqgrid.css" />' . "\n";
			echo '<script src="' . ABS_PATH .
			 '/js/jquery-1.3.2.min.js" type="text/javascript"></script>' . "\n";
			echo '<script src="' . ABS_PATH .
			 '/js/jquery-ui-1.7.3.custom.min.js" type="text/javascript"></script>' .
			 "\n";
			echo '<script src="' . ABS_PATH .
			 '/js/i18n/grid.locale-en.js" type="text/javascript"></script>' .
			 "\n";
			echo '<script src="' . ABS_PATH .
			 '/js/jquery.jqGrid.min.js" type="text/javascript"></script>' . "\n";
			echo '<script src="' . ABS_PATH .
			 '/js/grid.import.fix.js" type="text/javascript"></script>' . "\n";
		}
	}
	private function _BA85C3F4E7E029332717FE423F897F49 ()
	{
		echo '<script type="text/javascript">' . "\n";
		echo 'var lastSel;';
		echo 'jQuery(document).ready(function(){ ' . "\n";
	}
	private function _53DD25E257219ECC24BD5F34E37E7A76 ()
	{
		echo 'var grid_' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
		 ' = jQuery("#' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
		 '").jqGrid({' . "\n";
	}
	public function _2B268E319B206D01495CA132A18D4C7A ()
	{
		echo 'url:' . $this->_10A17D5E2756DDBB60281C9666DA167A . ",\n";
		echo 'datatype:"' . $this->_BA450DBC95C8EB73915BF54C1D1FB456 . "\",\n";
		echo 'mtype:"' . $this->_59F2E5EE946A3DFD887010553C2AF5BE . "\",\n";
		echo 'colNames:' . json_encode($this->_66A1D44D8EBB8CCB544158AB9A7882C7) .
		 ",\n";
		echo 'colModel:' .
		 C_Utility::_3937FD6A47FAD717244D4F6B165513F0(
		str_replace('###"', '', 
		str_replace('"###', '', 
		json_encode($this->_F8F9428CD5347F6FD695CCAE9A82D773)))) . ",\n";
		echo 'pager: ' . $this->_40D47B5F477DFE4CF15B3281D0F6189D . ",\n";
		echo 'rowNum:' . $this->_AA968E34A86116959AA1510193725726 . ",\n";
		echo 'rowList:' . json_encode($this->_941F406D66567334DD100E04A62E6A4E) .
		 ",\n";
		echo 'sortname:"' . $this->_E4618AD279203333B6F541C20B854115 . "\",\n";
		echo 'sortorder:"' . $this->_9D52AC4F50DA358F5F3C69BCB13A395F . "\",\n";
		echo 'viewrecords:' .
		 C_Utility::_712CE8C771CF9B726943CBDAE6B20B7E(
		$this->_FC7CFC4F3DFBD7DE1F4D2CF1FDB74AA9) . ",\n";
		echo 'multiselect:' .
		 C_Utility::_712CE8C771CF9B726943CBDAE6B20B7E(
		$this->_FE7A37E7099936B39D498FA296422096) . ",\n";
		echo 'caption:"' . $this->_835FFBF31EE664AC75EE5415DFE1DF6C . "\",\n";
		echo 'altRows:' .
		 C_Utility::_712CE8C771CF9B726943CBDAE6B20B7E(
		$this->_2047C88B385C81C24AD7C2BE34001A02) . ",\n";
		echo 'scrollOffset:' . $this->_44E26B5407CBF7A184FD5293003FB530 . ",\n";
		echo 'rownumbers:' .
		 C_Utility::_712CE8C771CF9B726943CBDAE6B20B7E(
		$this->_E6838FCC20A0FEFC14AADA6D7EB86E2C) . ",\n";
		echo 'forceFit:' .
		 C_Utility::_712CE8C771CF9B726943CBDAE6B20B7E(
		$this->_8BC6CC22CEB230A07F150B23642D16BA) . ",\n";
		echo 'autowidth:' .
		 C_Utility::_712CE8C771CF9B726943CBDAE6B20B7E(
		$this->_FB44B67621F544F649E266A3A3DD1483) . ",\n";
		echo 'hiddengrid:' .
		 C_Utility::_712CE8C771CF9B726943CBDAE6B20B7E(
		$this->_370BAAFBC7C29EC4C144DC3DF8950C50) . ",\n";
		echo 'scroll:' .
		 C_Utility::_712CE8C771CF9B726943CBDAE6B20B7E(
		$this->_C00B0D48DE5B401832E1AAB3FE4BF0F4) . ",\n";
		echo 'height:"' . $this->_D96FC20062C81F31BF81E310A850A8A3 . "\",\n";
		echo 'width:"' . $this->_FCC12EDB23C20714E21503C935E45A73 . "\",\n";
		echo 'gridview:' .
		 C_Utility::_712CE8C771CF9B726943CBDAE6B20B7E(
		$this->_96960C9C37D3D72A3B4FE1E6C10D8A09) . ",\n";
		switch ($this->_28A2F4B167A10BE04256CE57077A544D)
		{
			case 'CELL':
				echo "cellEdit:true,\n";
				break;
			case 'INLINE':
				echo 'onSelectRow: function(id){
                        if(id && id!==lastSel){                    
                            jQuery("#' .
				 $this->_B5648762BE4E1F7296F7B5F857952DFA .
				 '").restoreRow(lastSel);   
                            lastSel=id; 
                        }        
                        jQuery("#' .
				 $this->_B5648762BE4E1F7296F7B5F857952DFA .
				 '").editRow(id, true,"","","","",aftersavefunc);        
                     },
                     editurl:"' .
				 $this->_99797E679AB7054EC056B36FB49AC3AC . '"' . ",\n";
				break;
			case 'FORM':
				echo 'editurl:"' . $this->_99797E679AB7054EC056B36FB49AC3AC . '"' .
				 ",\n";
				break;
			default:
		}
		echo $this->_7298BD9DC41501DEF80CAC2AAE485FA2;
	}
	private function _167A5674061018CA5368AB920A7CC3B8 ()
	{
		if ($this->_B82F8943D3B270A54DD86991EF543493 != null)
		{
			echo 'subGrid: true,' . "\n";
			echo 'subGridRowExpanded: function(subgrid_id, row_id) {
                    var subgrid_table_id, pager_id;
                    subgrid_table_id = subgrid_id+"_t";
                    pager_id = "p_"+subgrid_table_id;' .
			 "\n";
			echo '  $("#"+subgrid_id).html("<table id=\'"+subgrid_table_id+"\' class=\'scroll\'></table><div id=\'"+pager_id+"\' class=\'scroll\'></div>");' .
			 "\n";
			echo '  jQuery("#"+subgrid_table_id).jqGrid({ ' . "\n";
			$this->_B82F8943D3B270A54DD86991EF543493->set_jq_url(
			$this->_B82F8943D3B270A54DD86991EF543493->_295EC04E991ED07F4B7EBE85E7190B67() .
			 '+row_id', false);
			$this->_B82F8943D3B270A54DD86991EF543493->set_jq_pagerName(
			'pager_id', false);
			$this->_B82F8943D3B270A54DD86991EF543493->set_multiselect(false);
			$this->_B82F8943D3B270A54DD86991EF543493->set_sortname(
			$this->_B82F8943D3B270A54DD86991EF543493->_778A589CB1CD4D5258CBEBE497B9ECAB());
			$this->_B82F8943D3B270A54DD86991EF543493->set_dimension(
			$this->_FCC12EDB23C20714E21503C935E45A73 - 100);
			$this->_B82F8943D3B270A54DD86991EF543493->_2B268E319B206D01495CA132A18D4C7A();
			echo '      });' . "\n";
			echo '  jQuery("#"+subgrid_table_id).jqGrid("navGrid","#"+pager_id,{edit:false,add:false,del:false})' .
			 "\n";
			echo '},' . "\n";
			echo 'subGridRowColapsed: function(subgrid_id, row_id) {},';
		}
	}
	private function _F2B5AAEDE4D4F81C919D188F379592E5 ()
	{
		if ($this->_485FB4C99DD632A980C101519C106BEF != null)
		{
			echo 'onSelectRow: function(ids) {
                    if(ids == null) {
                        ids=0;
                        if(jQuery("#' .
			 $this->_485FB4C99DD632A980C101519C106BEF->_AD4C3B69B56713936476BF1CBF77B0A7() .
			 '").jqGrid("getGridParam","records") >0 )
                        {
                            jQuery("#' .
			 $this->_485FB4C99DD632A980C101519C106BEF->_AD4C3B69B56713936476BF1CBF77B0A7() .
			 '").jqGrid("setGridParam",{url:"' . ABS_PATH .
			 '/masterdetail.php?gn=' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '&id="+ids,page:1}).trigger("reloadGrid");
                        }
                    } else {
                        jQuery("#' .
			 $this->_485FB4C99DD632A980C101519C106BEF->_AD4C3B69B56713936476BF1CBF77B0A7() .
			 '").jqGrid("setGridParam",{url:"' . ABS_PATH .
			 '/masterdetail.php?gn=' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '&id="+ids,page:1}).trigger("reloadGrid");            
                    }
                },' .
			 "\n";
		}
		else
		{
		}
	}
	private function _DD0B14FA9AC67521FE8A347E1AE23E9E ()
	{
		echo 'loadtext:"' . $this->_7FFFCAE2CE19622FB5904EE7988FBDED . "\"\n";
		echo '});' . "\n";
	}
	private function _95054B23A865A3CCFBBD6131DFEFB5E1 ()
	{
		switch ($this->_28A2F4B167A10BE04256CE57077A544D)
		{
			case 'FORM':
			case 'INLINE':
				echo 'jQuery("#' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
				 '").jqGrid("navGrid", ' .
				 $this->_40D47B5F477DFE4CF15B3281D0F6189D . ",\n";
				echo '{edit:' .
				 ((strrpos($this->_559F681046C0C6F6E72488A23A5F0AD5, "U") !==
				 false && $this->_28A2F4B167A10BE04256CE57077A544D != 'INLINE') ? 'true' : 'false') .
				 ',add:' .
				 ((strrpos($this->_559F681046C0C6F6E72488A23A5F0AD5, "C") !==
				 false) ? 'true' : 'false') . ',del:' .
				 ((strrpos($this->_559F681046C0C6F6E72488A23A5F0AD5, "D") !==
				 false) ? 'true' : 'false') . ',view:' .
				 ((strrpos($this->_559F681046C0C6F6E72488A23A5F0AD5, "R") !==
				 false && $this->_28A2F4B167A10BE04256CE57077A544D != 'INLINE') ? 'true' : 'false') .
				 ',search:false' . ',excel:' .
				 (($this->_F0135D302285919E33CA08ACFA0822E5 != null) ? 'true' : 'false') .
				 '}, ';
				echo '{   // edit options  
                                top: ($(window).height()- 300) / 2+$(window).scrollTop(),
                                left:($(window).width() - 300) / 2+$(window).scrollLeft(),
                                jqModal:true,
                                checkOnUpdate:false,
                                savekey: [true,13], 
                                navkeys: [false,38,40], 
                                checkOnSubmit : false, 
                                reloadAfterSubmit:false, 
                                closeOnEscape:true, 
                                closeAfterEdit:true,';
				if ($this->debug)
				{
					echo 'afterSubmit:function(d,a){$("#ajaxresponse").html("<pre>"+d.responseText+"</pre>");},';
				}
				echo 'bottominfo:"* required",
                                viewPagerButtons:true,
                                beforeShowForm: function(frm) {';
				foreach ($this->_CFDCEF9F776D5B87B3AF7C273DB2A716 as $key => $value)
				{
					echo '$("#' . $value . '").attr("readonly","readonly");';
				}
				echo '      }
                          }, 
                            {   // add options 
                                top: ($(window).height()- 300) / 2+$(window).scrollTop(),
                                left:($(window).width() - 300) / 2+$(window).scrollLeft(),
                                jqModal:true,
                                checkOnUpdate:false,
                                savekey: [true,13], 
                                navkeys: [false,38,40], 
                                checkOnSubmit : false, 
                                reloadAfterSubmit:false, 
                                closeOnEscape:true, 
                                closeAfterEdit:true,';
				if ($this->debug)
				{
					echo 'afterSubmit:function(d,a){$("#ajaxresponse").html("<pre>"+d.responseText+"</pre>");},';
				}
				echo 'bottominfo:"* required",                                
                                viewPagerButtons:true,
                                beforeShowForm: function(frm) {';
				foreach ($this->_CFDCEF9F776D5B87B3AF7C273DB2A716 as $key => $value)
				{
					echo '$("#' . $value . '").removeAttr("readonly");';
				}
				echo '      }
                            }, 
                            {   // del options    
                                top: ($(window).height()- 300) / 2+$(window).scrollTop(),
                                left:($(window).width() - 300) / 2+$(window).scrollLeft(),                            
                                reloadAfterSubmit:false,
                                jqModal:false,';
				if ($this->debug)
				{
					echo 'afterSubmit:function(d,a){$("#ajaxresponse").html("<pre>"+d.responseText+"</pre>");},';
				}
				echo 'bottominfo:"* required", 
                                closeOnEscape:true
                            }, 
                            {
                                // view options        
                                top: ($(window).height()- 300) / 2+$(window).scrollTop(),
                                left:($(window).width() - 300) / 2+$(window).scrollLeft(),
                                navkeys: [false,38,40], height:250,jqModal:false,closeOnEscape:true
                            }, 
                            {closeOnEscape:true} // search options 
                         );' .
				 "\n";
				break;
			case 'NONE':
				echo 'jQuery("#' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
				 '").jqGrid("navGrid", ' .
				 $this->_40D47B5F477DFE4CF15B3281D0F6189D . ",\n";
				echo '{edit:false,add:false,del:false,view:false' .
				 ',search:false' . ',excel:' .
				 (($this->_F0135D302285919E33CA08ACFA0822E5 != null) ? 'true' : 'false') .
				 '}, {})' . "\n";
				break;
		}
		if ($this->_6CE32431FD51CCA9C9FCADF5F28E74FD['is_resizable'])
		{
			echo 'jQuery("#' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '").jqGrid("gridResize",{minWidth:' .
			 $this->_6CE32431FD51CCA9C9FCADF5F28E74FD['min_width'] .
			 ',minHeight:' .
			 $this->_6CE32431FD51CCA9C9FCADF5F28E74FD['min_height'] . '});' .
			 "\n";
		}
		if ($this->_C3122687D6F8F4182585B45E0556A196)
		{
			echo 'jQuery("#' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '").jqGrid("navButtonAdd",' .
			 $this->_40D47B5F477DFE4CF15B3281D0F6189D .
			 ',{caption:"Search",title:"Toggle inline search", buttonicon :"ui-icon-pin-s",
                        onClickButton:function(){
                            grid_' .
			 $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '[0].toggleToolbar();
                        } 
                    });' .
			 "\n";
			echo 'jQuery("#' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '").jqGrid("navButtonAdd",' .
			 $this->_40D47B5F477DFE4CF15B3281D0F6189D .
			 ',{caption:"Clear",title:"Clear Search",buttonicon :"ui-icon-refresh",
                        onClickButton:function(){
                            grid_' .
			 $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '[0].clearToolbar();
                        } 
                    });' .
			 "\n";
			echo 'jQuery("#' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '").jqGrid("filterToolbar");' . "\n";
			echo 'grid_' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '[0].toggleToolbar();' . "\n";
		}
		if ($this->_F0135D302285919E33CA08ACFA0822E5 != null)
		{
			echo 'jQuery("#' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '").jqGrid("navButtonAdd",' .
			 $this->_40D47B5F477DFE4CF15B3281D0F6189D .
			 ',{caption:"",title:"Export to ' .
			 $this->_F0135D302285919E33CA08ACFA0822E5 .
			 '",
                        onClickButton:function(e){
                            try{                                    
                                grid_' .
			 $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '.jqGrid("excelExport",{url:"' .
			 $this->_9285D3447B999C7A1BE3D673C80D0C94 .
			 '"});
                            } catch (e) {
                                window.location= "' .
			 $this->_9285D3447B999C7A1BE3D673C80D0C94 .
			 '?oper=excel";
                            }

                        }
                    });' .
			 "\n";
		}
	}
	private function _02475B98D0FEFB0BDF32F6E82225A506 ()
	{
		echo "\n" . '});' . "\n";
		echo '// cellValue - the original value of the cell
              // options - as set of options, e.g
              // options.rowId - the primary key of the row
              // options.colModel - colModel of the column
              // rowObject - array of cell data for the row, so you can access other cells in the row if needed ' .
		 "\n";
		echo 'function imageFormatter(cellValue, options, rowObject)
             {
                return "<img src=\"" + cellValue + "\" originalValue=\""+ cellValue +"\" title=\""+ cellValue +"\">";
             }' .
		 "\n";
		echo '// cellValue - the original value of the cell
              // options - as set of options, e.g
              // options.rowId - the primary key of the row
              // options.colModel - colModel of the column
              // cellObject - the HMTL of the cell (td) holding the actual value ' .
		 "\n";
		echo 'function imageUnformatter(cellValue, options, cellObject)
             {      
                return $(cellObject.html()).attr("originalValue");
             }' .
		 "\n";
		echo '// display ajax reponse used for debug for inline edit' . "\n";
		echo 'function aftersavefunc(rowid, d){';
		if ($this->debug) echo '$("#ajaxresponse").html("<pre>"+d.responseText+"</pre>");';
		echo '}' . "\n";
		echo '</script>' . "\n";
	}
	private function _8AC8FE0FBEA9386C6CB53734F4914CBA ()
	{
		echo '<table id="' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
		 '"></table>' . "\n";
		echo '<div id=' .
		 str_replace("#", "", $this->_40D47B5F477DFE4CF15B3281D0F6189D) .
		 '></div>' . "\n";
		echo '<br />' . "\n";
	}
	private function _C19EFA1E90D636278AD232B91D142E34 ()
	{
		echo '<hr size="1" />';
		print("<b>CONTROL VALIDATION</b>");
		print
		("<pre id='branch1' style='border:1pt dotted black;padding:5pt;background:red;color:white;display:block'>");
		if ($this->_485FB4C99DD632A980C101519C106BEF != null &&
		 $this->_28A2F4B167A10BE04256CE57077A544D == 'INLINE')
		{
			print
			("\n" .
			 '- Grid with both inline edit and master/detail enabled is currently not supported.');
		}
		if ($this->_FE7A37E7099936B39D498FA296422096 &&
		 $this->_28A2F4B167A10BE04256CE57077A544D == 'NONE')
		{
			print
			("\n" .
			 '- Grid has multiselect enabled. However, the grid has not been set to be editable.');
		}
		if ($this->_C00B0D48DE5B401832E1AAB3FE4BF0F4)
		{
			print
			("\n" .
			 '- Scrolling (set_sroll)is enabled. As a result, pagination is disabled.');
		}
		print("</pre>");
		print("<b>DATAGRID OBJECT</b>");
		print
		("<pre id='branch2' style='border:1pt dotted black;padding:5pt;background:#E4EAF5;display:block'>");
		print_r($this);
		print("</pre>");
		print("<b>SESSION OBJECT</b>");
		print
		("<pre id='branch3' style='border:1pt dotted black;padding:5pt;background:#FFDAFA;display:block'>");
		print("<br />SESSION ID: " . session_id() . "<br />");
		print
		("SESSION KEY: " . GRID_SESSION_KEY . '_' .
		 $this->_B5648762BE4E1F7296F7B5F857952DFA . "<br />");
		print_r(
		C_Utility::_3937FD6A47FAD717244D4F6B165513F0(
		str_replace("\u0000", " ", json_encode($_SESSION))));
		print("</pre>");
	}
	private function _E66CD5FCD44AC99332E8645AF7D30775 ()
	{
		echo '<hr size="1" />';
		print("<b>AJAX RESPONSE</b>");
		print
		("<div id='ajaxresponse' style='border:1pt dotted black;padding:5pt;background:yellow;color:black;display:block'>");
		print("</div>");
	}
	public function display ()
	{
		$this->_467180D7C72C5DCE3F4AFED765F798AF();
		$this->_C741824B64386B8DF887DBDD061EC915();
		$this->_FD47F68BFD37239494C5104757C10967();
		$this->_BA85C3F4E7E029332717FE423F897F49();
		$this->_53DD25E257219ECC24BD5F34E37E7A76();
		$this->_2B268E319B206D01495CA132A18D4C7A();
		$this->_167A5674061018CA5368AB920A7CC3B8();
		$this->_F2B5AAEDE4D4F81C919D188F379592E5();
		$this->_DD0B14FA9AC67521FE8A347E1AE23E9E();
		$this->_95054B23A865A3CCFBBD6131DFEFB5E1();
		$this->_02475B98D0FEFB0BDF32F6E82225A506();
		$this->_8AC8FE0FBEA9386C6CB53734F4914CBA();
		if ($this->debug)
		{
			$this->_E66CD5FCD44AC99332E8645AF7D30775();
			$this->_C19EFA1E90D636278AD232B91D142E34();
		}
		if ($this->_485FB4C99DD632A980C101519C106BEF != null)
		{
			$this->_485FB4C99DD632A980C101519C106BEF->display();
			$_SESSION[GRID_SESSION_KEY . '_' .
			 $this->_B5648762BE4E1F7296F7B5F857952DFA] = serialize($this);
		}
		$_SESSION[GRID_SESSION_KEY . '_' .
		 $this->_B5648762BE4E1F7296F7B5F857952DFA] = serialize($this);
	}
	public function __sleep ()
	{
		return array_keys(get_object_vars($this));
	}
	public function __wakeup ()
	{
	}
	public function set_sql ($_BB73E6D41E07FB366A454D93ABEBFFDA)
	{
		$this->sql = $_BB73E6D41E07FB366A454D93ABEBFFDA;
	}
	public function set_sql_table ($_40FF6AE448636044C19BBF86325BDA65)
	{
		$this->_82AE25C96B23C3058D7199BA4BFA2713 = $_40FF6AE448636044C19BBF86325BDA65;
	}
	public function _F79525D2A3E5C3B987B720F490E0071E ()
	{
		return $this->_82AE25C96B23C3058D7199BA4BFA2713;
	}
	public function set_jq_url ($url, $_C3772746907762DFCC89F981C4277126 = true)
	{
		$this->_10A17D5E2756DDBB60281C9666DA167A = ($_C3772746907762DFCC89F981C4277126) ? ('"' .
		 $url . '"') : $url;
	}
	public function _295EC04E991ED07F4B7EBE85E7190B67 ()
	{
		return $this->_10A17D5E2756DDBB60281C9666DA167A;
	}
	public function set_jq_datatype ($_D2A53EE960EEE1BA68585F894D326C94)
	{
		$this->_BA450DBC95C8EB73915BF54C1D1FB456 = $_D2A53EE960EEE1BA68585F894D326C94;
	}
	public function _EBB1455BBBAF3BEB96500C87DE8CB4F2 ()
	{
		return $this->_BA450DBC95C8EB73915BF54C1D1FB456;
	}
	public function set_col_hidden ($_84F8B7DFD0844468481F41C56E82DAB5, 
	$edithidden = true)
	{
		$this->_53C4CD9B20845EB7C62DA55ECCCE5536[$_84F8B7DFD0844468481F41C56E82DAB5]['edithidden'] = $edithidden;
	}
	public function _053D96FF84E696405652B917C760E4B4 ()
	{
		return $this->_53C4CD9B20845EB7C62DA55ECCCE5536;
	}
	public function set_col_readonly ($arr)
	{
		$this->_CFDCEF9F776D5B87B3AF7C273DB2A716 = preg_split("/[\s]*[,][\s]*/", 
		$arr);
	}
	public function _F236608636824A1DDB93941911A32EA9 ()
	{
		return $this->_CFDCEF9F776D5B87B3AF7C273DB2A716;
	}
	public function _821853BAB96B76F492924C9554DBDB09 ()
	{
		return $this->sql;
	}
	public function set_sql_key ($_EE14E01C4E2A0F44282236270EF9CF7E)
	{
		$this->_155E326C545667DA4ADBDF4713536CE7 = $_EE14E01C4E2A0F44282236270EF9CF7E;
	}
	public function _778A589CB1CD4D5258CBEBE497B9ECAB ()
	{
		return $this->_155E326C545667DA4ADBDF4713536CE7;
	}
	public function set_sql_fkey ($_043E33361A5A1F9B70891725B2692319)
	{
		$this->_00F02F1C04FD0E38007FE5C0ECE23227 = $_043E33361A5A1F9B70891725B2692319;
	}
	public function _2EF6D143533EF68FA045EB639F422509 ()
	{
		return $this->_00F02F1C04FD0E38007FE5C0ECE23227;
	}
	public function _D2BD737CCC9B0875126D6D8EDDBE94FE ()
	{
		return $this->_0809869D6A1EEF2DEC1395F670A46E20;
	}
	public function set_scroll ($_E30F22B9FEB98BD50A2549A334C0B360, $h = '400')
	{
		$this->_C00B0D48DE5B401832E1AAB3FE4BF0F4 = $_E30F22B9FEB98BD50A2549A334C0B360;
		$this->_D96FC20062C81F31BF81E310A850A8A3 = $h;
	}
	public function set_jq_editurl ($url)
	{
		$this->_99797E679AB7054EC056B36FB49AC3AC = $url;
	}
	public function enable_edit ($_28A2F4B167A10BE04256CE57077A544D = 'FORM', 
	$options = 'CRUD')
	{
		switch ($_28A2F4B167A10BE04256CE57077A544D)
		{
			case 'CELL':
				$this->_C504CE513FA02FC0C097F8B905CABD18 = true;
				break;
			case 'INLINE':
			case 'FORM':
				$this->_99797E679AB7054EC056B36FB49AC3AC = ABS_PATH .
				 '/edit.php?gn=' . $this->_B5648762BE4E1F7296F7B5F857952DFA;
				break;
			default:
		}
		$this->_28A2F4B167A10BE04256CE57077A544D = $_28A2F4B167A10BE04256CE57077A544D;
		$this->_559F681046C0C6F6E72488A23A5F0AD5 = $options;
	}
	public function enable_search ($_D7E7881B420B2ED1A677D1C43CBF0662)
	{
		$this->_C3122687D6F8F4182585B45E0556A196 = $_D7E7881B420B2ED1A677D1C43CBF0662;
	}
	public function set_multiselect ($multiselect)
	{
		$this->_FE7A37E7099936B39D498FA296422096 = $multiselect;
	}
	public function has_multiselect ()
	{
		return $this->_FE7A37E7099936B39D498FA296422096;
	}
	public function set_col_required ($arr)
	{
		$this->_463514EB96C66C052BE91960E67E03BD = preg_split("/[\s]*[,][\s]*/", 
		$arr);
	}
	public function set_col_title ($_84F8B7DFD0844468481F41C56E82DAB5, 
	$_891F66958ACBF7F6C44AD3B2CFE70305)
	{
		$this->_CF0A584CDCFB7C5865C3C6807292530D[$_84F8B7DFD0844468481F41C56E82DAB5] = $_891F66958ACBF7F6C44AD3B2CFE70305;
	}
	public function _251D1C1E959494F56D699E66F2C99EA0 ()
	{
		return $this->_CF0A584CDCFB7C5865C3C6807292530D;
	}
	public function set_col_link ($_84F8B7DFD0844468481F41C56E82DAB5, 
	$target = "_new")
	{
		$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['link'] = array( 
		"target" => $target );
	}
	public function set_col_dynalink ($_84F8B7DFD0844468481F41C56E82DAB5, 
	$baseLinkUrl = "", $idName = "id", $addParam = "", $target = "_new")
	{
		$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['showlink'] = array( 
		"baseLinkUrl" => $baseLinkUrl , "idName" => $idName , 
		"addParam" => $addParam , "target" => $target );
	}
	public function set_col_currency ($_84F8B7DFD0844468481F41C56E82DAB5, 
	$prefix = '$', $suffix = '', $thousandsSeparator = ',', $decimalSeparator = '.', 
	$decimalPlaces = '2', $defaultValue = '0.00')
	{
		$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['currency'] = array( 
		"prefix" => $prefix , "suffix" => $suffix , 
		"thousandsSeparator" => $thousandsSeparator , 
		"decimalSeparator" => $decimalSeparator , 
		"decimalPlaces" => $decimalPlaces , "defaultValue" => $defaultValue );
	}
	public function set_col_img ($_84F8B7DFD0844468481F41C56E82DAB5, 
	$addParma = '')
	{
		$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5]['image'] = array( 
		'addParma' => $addParma );
	}
	public function set_col_format ($_84F8B7DFD0844468481F41C56E82DAB5, $format, 
	$formatoptions = array())
	{
		$this->col_formats[$_84F8B7DFD0844468481F41C56E82DAB5][$format] = $formatoptions;
	}
	public function set_dimension ($w, $h = '100%')
	{
		$this->_FCC12EDB23C20714E21503C935E45A73 = $w;
		$this->_D96FC20062C81F31BF81E310A850A8A3 = $h;
	}
	public function enable_resize ($is_resizable, 
	$_3702B0F91CA508119323776843914874 = 350, $_63715D05091F942C8560BD416DF3D4D7 = 80)
	{
		$this->_6CE32431FD51CCA9C9FCADF5F28E74FD["is_resizable"] = $is_resizable;
		$this->_6CE32431FD51CCA9C9FCADF5F28E74FD["min_width"] = $_3702B0F91CA508119323776843914874;
		$this->_6CE32431FD51CCA9C9FCADF5F28E74FD["min_height"] = $_63715D05091F942C8560BD416DF3D4D7;
	}
	public function set_masterdetail ($_19C8F389489A92070143CE2AB38E3A23, 
	$_BA79394C69D65E130D8C419851087251)
	{
		if ($_19C8F389489A92070143CE2AB38E3A23 instanceof C_DataGrid)
		{
			$_19C8F389489A92070143CE2AB38E3A23->set_jq_gridName(
			$this->_B5648762BE4E1F7296F7B5F857952DFA . '_d');
			$_19C8F389489A92070143CE2AB38E3A23->set_jq_pagerName(
			trim($this->_40D47B5F477DFE4CF15B3281D0F6189D, '"') . '_d');
			$_19C8F389489A92070143CE2AB38E3A23->set_jq_url(
			ABS_PATH . '/masterdetail.php?gn=' .
			 $this->_B5648762BE4E1F7296F7B5F857952DFA . '&id=');
			$_19C8F389489A92070143CE2AB38E3A23->set_jq_editurl(
			ABS_PATH . '/edit.php?gn=' . $this->_B5648762BE4E1F7296F7B5F857952DFA .
			 '&src=md');
			$_19C8F389489A92070143CE2AB38E3A23->set_sql_fkey(
			$_BA79394C69D65E130D8C419851087251);
			$_19C8F389489A92070143CE2AB38E3A23->enable_search(false);
			$_19C8F389489A92070143CE2AB38E3A23->_467180D7C72C5DCE3F4AFED765F798AF();
			$this->_485FB4C99DD632A980C101519C106BEF = $_19C8F389489A92070143CE2AB38E3A23;
		}
		else
		{
			echo 'Invalid master/detail object. Error 102.';
		}
	}
	public function set_subgrid ($_19C8F389489A92070143CE2AB38E3A23, 
	$_BA79394C69D65E130D8C419851087251)
	{
		if ($_19C8F389489A92070143CE2AB38E3A23 instanceof C_DataGrid)
		{
			$this->_96960C9C37D3D72A3B4FE1E6C10D8A09 = false;
			$_19C8F389489A92070143CE2AB38E3A23->set_jq_url(
			ABS_PATH . '/subgrid.php?gn=' .
			 $this->_B5648762BE4E1F7296F7B5F857952DFA . '&id=');
			$_19C8F389489A92070143CE2AB38E3A23->set_sql_fkey(
			$_BA79394C69D65E130D8C419851087251);
			$_19C8F389489A92070143CE2AB38E3A23->set_caption('');
			$_19C8F389489A92070143CE2AB38E3A23->_467180D7C72C5DCE3F4AFED765F798AF();
			$this->_B82F8943D3B270A54DD86991EF543493 = $_19C8F389489A92070143CE2AB38E3A23;
		}
		else
		{
			echo 'Invalid subgrid object. Error 101.';
		}
	}
	public function set_jq_pagerName ($_2A5977BB5526CCE7046F03F36F329625, 
	$_C3772746907762DFCC89F981C4277126 = true)
	{
		$this->_40D47B5F477DFE4CF15B3281D0F6189D = ($_C3772746907762DFCC89F981C4277126) ? ('"' .
		 $_2A5977BB5526CCE7046F03F36F329625 . '"') : $_2A5977BB5526CCE7046F03F36F329625;
	}
	public function set_jq_gridName ($_8A5AC4CC694EF9B1FCDE489E5E9E9D6E)
	{
		$this->_B5648762BE4E1F7296F7B5F857952DFA = $_8A5AC4CC694EF9B1FCDE489E5E9E9D6E;
		$this->_40D47B5F477DFE4CF15B3281D0F6189D = '"#' .
		 $_8A5AC4CC694EF9B1FCDE489E5E9E9D6E . '_pager1"';
		$this->_10A17D5E2756DDBB60281C9666DA167A = '"' . ABS_PATH .
		 '/data.php?gn=' . $_8A5AC4CC694EF9B1FCDE489E5E9E9D6E . '"';
		$this->_9285D3447B999C7A1BE3D673C80D0C94 = ABS_PATH . '/export.php?gn=' .
		 $this->_B5648762BE4E1F7296F7B5F857952DFA;
	}
	public function _AD4C3B69B56713936476BF1CBF77B0A7 ()
	{
		return $this->_B5648762BE4E1F7296F7B5F857952DFA;
	}
	public function set_sortname ($_8FBA54CAB488F3F9D37F23EA0A6320E5)
	{
		$this->_E4618AD279203333B6F541C20B854115 = $_8FBA54CAB488F3F9D37F23EA0A6320E5;
	}
	public function enable_export ($type = 'EXCEL')
	{
		$this->_F0135D302285919E33CA08ACFA0822E5 = $type;
	}
	public function set_col_edittype ($_84F8B7DFD0844468481F41C56E82DAB5, 
	$_7B0AC8BC8E0CB1A71CD6636A0B5B5E03, $_68F0263FE37025018006A99DECF5CFA7 = null, 
	$multiple = false, $dataUrl = null, $extra_params = null)
	{
		$this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['type'] = $_7B0AC8BC8E0CB1A71CD6636A0B5B5E03;
		$this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['value'] = $_68F0263FE37025018006A99DECF5CFA7;
		$this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['multiple'] = $multiple;
		$this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['dataUrl'] = $dataUrl;
		$this->_3F2BE84D5FB33E471D0BAA66864E3074[$_84F8B7DFD0844468481F41C56E82DAB5]['extra_params'] = $extra_params;
	}
	public function set_row_color ($_47668E423062F54EB58A265948DCD3D6, 
	$_A424E4E08C62203CF27B38FB12D1BE0E = null, 
	$_68B38E9808A9F63767D4AF4B20E19C8E = null)
	{
		$this->_A80F62E0D0890FC5C6232BE28E3D5B48['hover'] = $_47668E423062F54EB58A265948DCD3D6;
		$this->_A80F62E0D0890FC5C6232BE28E3D5B48['highlight'] = $_A424E4E08C62203CF27B38FB12D1BE0E;
		$this->_A80F62E0D0890FC5C6232BE28E3D5B48['altrow'] = $_68B38E9808A9F63767D4AF4B20E19C8E;
	}
	public function set_theme ($_1F1079690A790C4BB5FE5A7F819E3479)
	{
		$this->_F0A34FC9BB983B79191E27F561AF4CFD = $_1F1079690A790C4BB5FE5A7F819E3479;
	}
	public function enable_debug ($debug)
	{
		$this->debug = $debug;
		$this->db->db->debug = $debug;
	}
	public function set_caption ($_91E9EFA9DE29A9FD05C23D1ADE09FA07)
	{
		$this->_835FFBF31EE664AC75EE5415DFE1DF6C = $_91E9EFA9DE29A9FD05C23D1ADE09FA07;
	}
	public function set_pagesize ($_9EB1FB4CD5C9244B9C768ABEA4926A6E)
	{
		$this->_AA968E34A86116959AA1510193725726 = $_9EB1FB4CD5C9244B9C768ABEA4926A6E;
	}
	public function enable_rownumbers ($_3F4679BADB741763A268DBDBAE252A3A)
	{
		$this->_E6838FCC20A0FEFC14AADA6D7EB86E2C = $_3F4679BADB741763A268DBDBAE252A3A;
	}
}
?>

<?php
if (! session_id())
{
	session_start();
}
class C_Database
{
	public $_EA111FC288B46F7C89F82D6D216D62A6;
	public $_A8CA282CA0B84C15FD52B637B16B6AC1;
	public $password;
	public $databaseName;
	public $tableName;
	public $link;
	public $dbType;
	public $db;
	public $result;
	public function __construct ($host, $user, $pass, $dbName, $db_type = "mysql")
	{
		$this->_EA111FC288B46F7C89F82D6D216D62A6 = $host;
		$this->_A8CA282CA0B84C15FD52B637B16B6AC1 = $user;
		$this->password = $pass;
		$this->databaseName = $dbName;
		$this->dbType = $db_type;
		$this->_D3FBB0AEE9D0222FC0F9624B8E3CD0B0();
	}
	public function _D3FBB0AEE9D0222FC0F9624B8E3CD0B0 ()
	{
		switch ($this->dbType)
		{
			case "access":
				$this->db = & ADONewConnection($this->dbType);
				$dsn = "Driver={Microsoft Access Driver (*.mdb)};Dbq=" .
				 $this->databaseName . ";Uid=" .
				 $this->_A8CA282CA0B84C15FD52B637B16B6AC1 . ";Pwd=" .
				 $this->password . ";";
				$this->db->Connect($dsn);
				break;
			case "odbc_mssql":
				$this->db = & ADONewConnection($this->dbType);
				$dsn = "Driver={SQL Server};Server=" .
				 $this->_EA111FC288B46F7C89F82D6D216D62A6 . ";Database=" .
				 $this->databaseName . ";";
				$this->db->Connect($dsn, 
				$this->_A8CA282CA0B84C15FD52B637B16B6AC1, $this->password);
				break;
			case "postgres":
				$this->db = &ADONewConnection($this->dbType);
				$this->db->PConnect($this->_EA111FC288B46F7C89F82D6D216D62A6, 
				$this->_A8CA282CA0B84C15FD52B637B16B6AC1, $this->password, 
				$this->databaseName) or
				 die("Error: Could not connect to the database");
				break;
			case "db2":
				$this->db = & ADONewConnection($this->dbType);
				$dsn = "driver={IBM db2 odbc DRIVER};Database=" .
				 $this->databaseName . ";hostname=" .
				 $this->_EA111FC288B46F7C89F82D6D216D62A6 .
				 ";port=50000;protocol=TCPIP;uid=" .
				 $this->_A8CA282CA0B84C15FD52B637B16B6AC1 . "; pwd=" .
				 $this->password;
				$this->db->Connect($dsn);
				break;
			case "ibase":
				$this->db = &ADONewConnection($this->dbType);
				$this->db->PConnect(
				$this->_EA111FC288B46F7C89F82D6D216D62A6 . $this->databaseName, 
				$this->_A8CA282CA0B84C15FD52B637B16B6AC1, $this->password);
				break;
			case "oci8":
				$ret = $this->db->Connect(false, 
				$this->_A8CA282CA0B84C15FD52B637B16B6AC1, $this->password);
				if (! ret)
				{
					$this->db->Connect($this->_EA111FC288B46F7C89F82D6D216D62A6, 
					$this->_A8CA282CA0B84C15FD52B637B16B6AC1, $this->password, 
					$this->databaseName);
				}
				break;
			case "sqlit":
				break;
			default:
				$this->db = &ADONewConnection($this->dbType);
				$this->db->PConnect($this->_EA111FC288B46F7C89F82D6D216D62A6, 
				$this->_A8CA282CA0B84C15FD52B637B16B6AC1, $this->password, 
				$this->databaseName) or
				 die("Error: Could not connect to the database");
		}
	}
	public function _5D7405D6C5BF206648C6B627A5415C96 (
	$_5B25B739A25B02AA9FE14AB2C4C1F2AC)
	{
		$this->db->SetFetchMode(ADODB_FETCH_BOTH);
		$result = $this->db->Execute($_5B25B739A25B02AA9FE14AB2C4C1F2AC) or
		 die(
		"Error: Could not execute query $_5B25B739A25B02AA9FE14AB2C4C1F2AC in _5D7405D6C5BF206648C6B627A5415C96()");
		$this->result = $result;
		return $result;
	}
	public function _8D00AB5DB4831EFB77B1B8B18367B560 (
	$_5B25B739A25B02AA9FE14AB2C4C1F2AC, $size, 
	$_7A8B0B41C5CC0667D3CAB83E9839548B)
	{
		$result = $this->db->SelectLimit($_5B25B739A25B02AA9FE14AB2C4C1F2AC, 
		$size, $_7A8B0B41C5CC0667D3CAB83E9839548B) or
		 die(
		"Error: Could not execute query $_5B25B739A25B02AA9FE14AB2C4C1F2AC in _8D00AB5DB4831EFB77B1B8B18367B560()");
		$this->result = $result;
		return $result;
	}
	public function _CF65857B18D40AF9F68FEA86C3AC1F99 (
	$_5B25B739A25B02AA9FE14AB2C4C1F2AC, $size, 
	$_7A8B0B41C5CC0667D3CAB83E9839548B)
	{
		$result = $this->_8D00AB5DB4831EFB77B1B8B18367B560(
		$_5B25B739A25B02AA9FE14AB2C4C1F2AC, $size, 
		$_7A8B0B41C5CC0667D3CAB83E9839548B);
		$_CD2375731BEA046D1E12D4392A8F780A = $result->GetArray();
		$this->result = $_CD2375731BEA046D1E12D4392A8F780A;
		return $_CD2375731BEA046D1E12D4392A8F780A;
	}
	public function _A0CFF16BD277A6E46F895D35734C2608 (&$result)
	{
		$ADODB_FETCH_MODE = ADODB_FETCH_NUM;
		if (! $result->EOF)
		{
			$rs = $result->fields;
			$result->MoveNext();
			return $rs;
		}
	}
	public function _10422478B283C25274BD1D27E2187580 (&$result)
	{
		$ADODB_FETCH_MODE = ADODB_FETCH_BOTH;
		if (! $result->EOF)
		{
			$rs = $result->fields;
			$result->MoveNext();
			return $rs;
		}
	}
	public function _D9EBE5634F9E374610F5696C28C39F90 (&$result)
	{
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
		if (! $result->EOF)
		{
			$rs = $result->fields;
			$result->MoveNext();
			return $rs;
		}
	}
	public function _B19E0CC1E2079FB5DE952A6CE31B63AE (
	$_5B25B739A25B02AA9FE14AB2C4C1F2AC)
	{
		$ADODB_FETCH_MODE = ADODB_FETCH_NUM;
		$result = $this->db->Execute($_5B25B739A25B02AA9FE14AB2C4C1F2AC) or
		 die(
		"Error: Could not execute query $_5B25B739A25B02AA9FE14AB2C4C1F2AC");
		if (! $result->EOF)
		{
			$rs = $result->fields;
			$result->MoveNext();
			return $rs;
		}
	}
	public function _DFDEB5E50F9BB3241F4AA85F8B5842C9 (
	$_5B25B739A25B02AA9FE14AB2C4C1F2AC)
	{
		$ADODB_FETCH_MODE = ADODB_FETCH_BOTH;
		$result = $this->db->Execute($_5B25B739A25B02AA9FE14AB2C4C1F2AC) or
		 die(
		"Error: Could not execute query $_5B25B739A25B02AA9FE14AB2C4C1F2AC");
		if (! $result->EOF)
		{
			$rs = $result->fields;
			$result->MoveNext();
			return $rs;
		}
	}
	public function _5FBCF77932543542C23E5582BE5F980B ($result)
	{
		return $result->RecordCount();
	}
	public function num_fields ($result)
	{
		return $result->FieldCount();
	}
	public function field_name ($result, $index)
	{
		$_05485668FF1F9AF3E49F3672CEDBC092 = new ADOFieldObject();
		$_05485668FF1F9AF3E49F3672CEDBC092 = $result->FetchField($index);
		return isset($_05485668FF1F9AF3E49F3672CEDBC092->name) ? $_05485668FF1F9AF3E49F3672CEDBC092->name : "";
	}
	public function _B00D907EB327D2559A8F07F6C22B24EF ($result, $index)
	{
		$_05485668FF1F9AF3E49F3672CEDBC092 = new ADOFieldObject();
		$_05485668FF1F9AF3E49F3672CEDBC092 = $result->FetchField($index);
		return isset($_05485668FF1F9AF3E49F3672CEDBC092->type) ? $_05485668FF1F9AF3E49F3672CEDBC092->type : "";
	}
	public function _39ADD6B4099DB99B597E2C89CADDDFB3 ($result, $index)
	{
		$_05485668FF1F9AF3E49F3672CEDBC092 = new ADOFieldObject();
		$_05485668FF1F9AF3E49F3672CEDBC092 = $result->FetchField($index);
		$type = $result->MetaType($_05485668FF1F9AF3E49F3672CEDBC092->type, 
		$_05485668FF1F9AF3E49F3672CEDBC092->max_length);
		return $type;
	}
	public function _527688ACBDB18AC292DF48188EBA0F54 ($table, 
	$_84F8B7DFD0844468481F41C56E82DAB5)
	{
		$arr = array();
		$arr = $this->db->MetaColumns($table);
		$_05485668FF1F9AF3E49F3672CEDBC092 = new ADOFieldObject();
		if (isset($arr[strtoupper($_84F8B7DFD0844468481F41C56E82DAB5)]))
		{
			$_05485668FF1F9AF3E49F3672CEDBC092 = $arr[strtoupper(
			$_84F8B7DFD0844468481F41C56E82DAB5)];
			return $_05485668FF1F9AF3E49F3672CEDBC092;
		}
		else
		{
			return false;
		}
	}
	public function _4CF52E24237F544BE9BC663B4DF0F9D7 ($result, $field_name)
	{
		$_BF4AE0A9EAE89DBA07ED303E5FE7BC97 = $this->num_fields($result);
		$i = 0;
		for ($i = 0; $i < $_BF4AE0A9EAE89DBA07ED303E5FE7BC97; $i ++)
		{
			if ($field_name == $this->field_name($result, $i)) return $i;
		}
		return - 1;
	}
	public function _F177680CBF8EBA292F9FD0829C998D4E ($result, $index)
	{
		$_05485668FF1F9AF3E49F3672CEDBC092 = new ADOFieldObject();
		$_05485668FF1F9AF3E49F3672CEDBC092 = $result->FetchField($index);
		return isset($_05485668FF1F9AF3E49F3672CEDBC092->max_length) ? $_05485668FF1F9AF3E49F3672CEDBC092->max_length : "";
	}
}
?>
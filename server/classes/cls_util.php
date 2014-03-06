<?php
class C_Utility
{
	public static function _EC416A4851BD4E5AA6544E07C166AB18 ($str)
	{
		if (get_magic_quotes_gpc() == 1)
		{
			return ($str);
		}
		else
		{
			return (addslashes($str));
		}
	}
	public static function _3937FD6A47FAD717244D4F6B165513F0 ($json)
	{
		$result = '';
		$pos = 0;
		$_0A21D079CCFE9989BE1752FD449415BE = strlen($json);
		$_62D8B9821B2860E5BF828DFF95E71814 = '  ';
		$_7E6A5A221BC4D9404D7EBE21D064FA3A = "\n";
		for ($i = 0; $i <= $_0A21D079CCFE9989BE1752FD449415BE; $i ++)
		{
			$char = substr($json, $i, 1);
			if ($char == '}' || $char == ']')
			{
				$result .= $_7E6A5A221BC4D9404D7EBE21D064FA3A;
				$pos --;
				for ($j = 0; $j < $pos; $j ++)
				{
					$result .= $_62D8B9821B2860E5BF828DFF95E71814;
				}
			}
			$result .= $char;
			if ($char == '{' || $char == '[')
			{
				$result .= $_7E6A5A221BC4D9404D7EBE21D064FA3A;
				if ($char == '{' || $char == '[')
				{
					$pos ++;
				}
				for ($j = 0; $j < $pos; $j ++)
				{
					$result .= $_62D8B9821B2860E5BF828DFF95E71814;
				}
			}
		}
		return $result;
	}
	public static function _712CE8C771CF9B726943CBDAE6B20B7E (
	$_890F139D0B2A69505FD1B58CC4CBFF2F)
	{
		return ($_890F139D0B2A69505FD1B58CC4CBFF2F) ? 'true' : 'false';
	}
}
?>
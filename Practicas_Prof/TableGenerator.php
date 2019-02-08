<?php 

class TableGenerator
{
	public static function table($rows, $columns, $fill_with)
	{
		$result = '<table>';
		for ($x=0; $x < $rows; $x++) { 
			$result .= '<tr>';
			for ($y=0; $y < $columns; $y++) { 
				$result .= "<td>$fill_with</td>";
			}
			$result .= '</tr>';
		}
		$result .= '</table>';
		return $result;
	}
}

 ?>
<?php
if (!function_exists('parseExpressionOptions')) {
	function parseExpressionOptions($serviceId = 'test', $options = array(), $default = ' [name]'): string
	{
		$expression = $serviceId;
		if (!empty($default)) {
			$expression .= " [name]";
		}
		if (!empty($options)) {
			foreach ($options as $option) {
				$explodeOption = explode('|', $option);
				$countExplodeOption = count($explodeOption);
				if ($countExplodeOption > 1) {
					$expression .= " [-" . $explodeOption[0] . "|--" . $explodeOption[1] . "]";
				} else {
					$expression .= " [--" . $option . "]";
				}
			}
		}
		return trim($expression);
	}
}

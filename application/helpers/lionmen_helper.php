<?php
/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
 
if (! function_exists('getItemName'))
{
	function getItemName($key, $collections)
	{
		foreach ($collections as $item) {
			if ($item->id == $key) return $item->name;
		}

		return '-';
	}
}
/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
 
if (! function_exists('getPrizeLabel'))
{
	function getPrizeLabel($rank, $collections)
	{
		$labels = '';

		foreach ($collections as $item) {
			if ($rank >= $item->start_rank && $rank <= $item->end_rank) {
				$labels .= url_title($item->name) . ' ';
			}
		}

		return $labels;
	}
}
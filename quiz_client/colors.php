<?php


class colors
{

	private $color_array = array();

	function __construct()
	{
			$this->initColors();
	}

	public function initColors()
	{
		array_push($this->color_array,"FF0101");
		array_push($this->color_array,"777777");
		array_push($this->color_array,"0101FF");
		array_push($this->color_array,"FF9601");

		array_push($this->color_array,"FF01FF");
		array_push($this->color_array,"016455");
		array_push($this->color_array,"DCC801");
		array_push($this->color_array,"DCC801");

		array_push($this->color_array,"DC1E8C");
		array_push($this->color_array,"1478CC");
		array_push($this->color_array,"148C5A");
		array_push($this->color_array,"965014");

		array_push($this->color_array,"227711");
		array_push($this->color_array,"00A0A0");
		array_push($this->color_array,"BEA500");
		array_push($this->color_array,"FA6EA0");

	}


	public function getColorRed($i)
	{
		$color = substr($this->color_array[$i],0,2);
		return $color;
	}
	
	public function getColorGreen($i)
	{
		$color = substr($this->color_array[$i],2,2);
		return $color;
	
	}
	
	public function getColorBlue($i)
	{
		$color = substr($this->color_array[$i],4,2);
		return $color;
	
	}

	public function setcolors($colorstring)
	{
		return array(getColorRed($i),getColorGreen($i),getColorBlue($i));
	}


	public function getcolors($i)
	{
		return array(getColorRed($i),getColorGreen($i),getColorBlue($i));
	}


}
?>
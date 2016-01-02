<?php

class colors
{


	private $color_red = array("FF","00","00","FF","FF","00","DC","DC","14","14","96","44","00","BE","FF","FA");

	private $color_green = array("00","99","00","96","00","64","C8","1E","46","8C","50","44","A0","A5","B9","6E");

	private $color_blue = array("00","00","FF","00","FF","FF","00","8C","96","5A","14","44","A0","00","32","A0");

	function __construct()
	{
		$this->color_red =   array("FF","77","01","FF","FF","01","DC","DC","14","14","96","22","00","BE","FA");
		$this->color_green = array("01","77","01","96","01","64","C8","1E","78","8C","50","77","A0","A5","6E");
		$this->color_blue =  array("01","77","FF","01","FF","55","01","8C","CC","5A","14","11","A0","00","A0");
	}

	public function getcolors($i)
	{
		return array($this->color_red[$i],$this->color_green[$i],$this->color_blue[$i]);
	}


}
?>
<?php
session_start();
include("Request.php");
include("colors.php");


if(isset($_SESSION['join_code_check'])) { $join_code_check = false;}
else 								{  
										$join_code_check = true; 
									}


if(isset($_SESSION['username'])) 	{  	$username = $_SESSION["username"];}
else 								{  
										$username = ""; 
										$_SESSION["username"] = $username;
									}

if(isset($_SESSION['color_red'])) 	{  	$color_red = $_SESSION["color_red"];}
else 								{  
										$color_red = "FF"; 
										$_SESSION["color_red"] = $color_red;
									}

if(isset($_SESSION['color_green'])) {  $color_green = $_SESSION["color_green"];}
else 								{  
										$color_green = "FF"; 
										$_SESSION["color_green"] = $color_green;
									}

if(isset($_SESSION['color_blue'])) 	{  $color_blue = $_SESSION["color_blue"];}
else 								{  
										$color_blue = "FF"; 
										$_SESSION["color_blue"] = $color_blue;
									}




//var_dump($colors->getcolors(0));
//print "TEST : " .  $colors->getcolors(0)[0];

ShowScreen($username,$color_red,$color_green,$color_blue,$join_code_check);

//,$color_red,$color_green,$color_blue


function ShowScreen($username,$color_red,$color_green,$color_blue,$join_code_check)
{
//var_dump($jsondata);
	$stringdata = "";
	$stringdata = $stringdata . "<HTML>";
	$stringdata = $stringdata . "<HEAD>";
//	$stringdata = $stringdata . "<meta http-equiv=\"refresh\" content=\"5\";charset=\"ISO-8859-1\">";
	$stringdata = $stringdata . "<style>";
	$stringdata = $stringdata . "	
	input {
	-webkit-appearance: none;
    width:800px;
    border:2px solid #dadada;
    border-radius:7px;
    font-size:80px;
    font-style:veranda; 
	font-weight:bold;
    padding:5px;
    margin-top:-10px;    
    text-align:center;
    background-color:#000;
    color:#FFF;
}

input:focus { 
    outline:none;
    border-color:#99F;
    box-shadow:0 0 200px #99F;
    background-color:#AAF;
    color:black;
}




";
	$stringdata = $stringdata . "</style>";
	$stringdata = $stringdata . "</HEAD>";
	$stringdata = $stringdata . "<BODY style='background-color:#000000;' >";


	$stringdata = $stringdata . "<CENTER>";
     $stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<form action=\"CheckGamData.php\" method=\"post\">";
    $stringdata = $stringdata . "<div style=\"background:url(Assets/MASTERLOGO.jpg);width:800px;height:280px;text-align:center; font-size:60px;vertical-align:bottom; font-weight:bold;font-family: verdana;background-color:#000044;color:white; \"></div>";
    $stringdata = $stringdata . "<BR>";
    $stringdata = $stringdata . "<BR>";
    $stringdata = $stringdata . "<BR>";
    if($join_code_check)
    {
	    if($username === "")
    	{
    		$stringdata = $stringdata . "<H2 style='color:white;font-style:veranda; font-size:80px; ' \" >Velkommen til</H2>";
    		$stringdata = $stringdata . "<H2 style='color:white;font-style:veranda; font-size:80px; ' \" >Indtast Spilkode</H2>";
		}
		else
		{
	    	$stringdata = $stringdata . "<H2 style='color:#" . $color_red . $color_green . $color_blue . ";font-style:veranda; font-size:80px; ' \" >Hi " . $username . " !</H2>";
    		$stringdata = $stringdata . "<H2 style='color:white;font-style:veranda; font-size:80px; ' \" >Indtast Spilkode</H2>";

		}
	

	}
	else
	{
    	$stringdata = $stringdata . "<H2 style='color:red;font-style:veranda; font-size:80px; ' \" >Forkert Kode !!</H2>";
    	$stringdata = $stringdata . "<H2 style='color:red;font-style:veranda; font-size:80px; ' \" >Indtast Spilkode igen</H2>";
	}
	


     $stringdata = $stringdata . "<BR>";
    $stringdata = $stringdata . "<BR>";
    $stringdata = $stringdata . "<BR>";
    $stringdata = $stringdata . "<input type=\"text\" name=\"join_code\">";
    $stringdata = $stringdata . "<BR>";
    $stringdata = $stringdata . "<BR>";
 	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<BR>";
 	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<button  type=\"submit\" style=\"font-style:veranda; font-size:100px; 
	font-weight:bold;color:#EFE;background-color:#002200;height:200px;width:800px;text-align:center;outline:none;    border-radius:7px;
border:none;border-color:#0F0;box-shadow:0 0 200px #0F0;\">GO !</button>";


	$stringdata = $stringdata . "</form>";
	
	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "</CENTER>";

	$stringdata = $stringdata . "</BODY>";
	$stringdata = $stringdata . "";


	$stringdata = $stringdata . "</HTML>";
	

	echo $stringdata ;

}

$_SESSION['join_code_check'] = true;


?>
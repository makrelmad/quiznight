<?php
session_start();
include("Request.php");
include("colors.php");


if(isset($_SESSION['game_id'])) { $gameID = $_SESSION['game_id'];}
else 								{  
										$gameID = createID();
										$_SESSION['game_id'] = $gameID;
									}




if( isset($_SESSION['username'])  ) { $username = $_SESSION['username'];}
else 								{  
										$username = "empty"; 
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

$gameID = createID();
$PLayerID = 119933;
$question_id = array("q_1","q_45","q_2323","q_563");

debugValuesPLayer($PLayerID,$username,"test1234",$color_red,$color_green,$color_blue,54);
debugValues($gameID,$PLayerID,$username,$color_red,$color_green,$color_blue,12);
debugValuesGame($gameID,"123456",8,3,"CREATED");


//Rounds($roundtype,$gameID,$round_id,$question_no,$status)
debugValuesRounds($roundtype,$gameID,$gameID . "_" . 1,4,"OPEN");

//Question_in_Round($gameID,$question_no_in_round,$question_id,$status)
debugValuesQuestion_in_Round($gameID . "_" . 1,1,$question_id[0],"READY");
debugValuesQuestions($question_id[0],"SPORTS","1: WHO WAS TOPSCORER IN PREMIER LEAGUE 2014-15","SERGIO AGUERO","BENTEKE","WAYNER ROONEY","VAN PERSIE","PELLE","GIROUD","CISSE","COSTA",1,"ACTIVE");


function debugValuesPLayer($PLayerID,$username,$password,$highscore)
{
	print "PLAYERS : <BR><BR>";
	print "DATABASE : <BR>";
	print "------------------------<BR>";
	print "PLAYER ID (*): " . $PLayerID . "<BR>";
	print "USERNAME (*): " . $username . "<BR>";
	print "PASSWORD (*): " . $password . "<BR>";
	print "HIGHTSCORE (*): " . $highscore . "<BR>";
	print "COLOR_RED (*): " . $color_red . "<BR>";
	print "COLOR_GREEN (*): " . $color_green . "<BR>";
	print "COLOR_BLUE (*): " . $color_blue . "<BR>";
	print "--------------------------------------------------------------<BR>";
	print "API BACKEND : <BR>";
	print "--------------------------------------------------------------<BR>";
	print "createPlayer( PlayerID , UserName , Password , Higscore , Color_Red , Color_Green , Color_Blue )<BR>";
	print "deletePlayer( PlayerID )<BR>";
	print "getPlayerId( username , password )<BR>";
	print "getPlayer( PlayerID )<BR>";
	print "updatePlayername( PlayerID , UserName )<BR>";
	print "updatePassword( PlayerID , Password )<BR>";
	print "updateHigscore( PlayerID , Higscore )<BR>";
	print "updateColor( PlayerID , Color_Red , Color_Green, Color_Blue )<BR>";
	print "<BR>================================================================================================<BR><BR>";

}

function debugValues($gameID,$PLayerID,$username,$color_red,$color_green,$color_blue,$points)
{
	print "GAME PLAYERS : <BR><BR>";
	print "DATABASE : <BR>";
	print "------------------------<BR>";
	print "GAME ID (*): " . $gameID . "<BR>";
	print "PLAYER ID (*): " . $PLayerID . "<BR>";
	print "POINTS (*): " . $points . "<BR>";
	print "--------------------------------------------------------------<BR>";
	print "API BACKEND : <BR>";
	print "--------------------------------------------------------------<BR>";
	print "createGamePlayer( GameID , PlayerID , points -> 0 )<BR>";
	print "deleteGamePlayer( GameID , PlayerID  )<BR>";
	print "updateGamePlayerPoints( GameID , PlayerID , Points )<BR>";
	print "<BR>================================================================================================<BR><BR>";
}

function debugValuesGame($gameID,$join_code,$max_players,$rounds,$status)
{
	print "GAME : <BR><BR>";
	print "DATABASE : <BR>";
	print "------------------------<BR>";
	print "GAME ID (*): " . $gameID . "<BR>";
	print "JOIN_CODE(*): " . $join_code . "<BR>";
	print "MAX_PLAYERS (*): " . $max_players . "<BR>";
	print "TOTAL_ROUNDS (*): " . $rounds . "<BR>";
	print "STATUS (*): " . $status . "<BR>";
	print "--------------------------------------------------------------<BR>";
	print "API BACKEND : <BR>";
	print "--------------------------------------------------------------<BR>";
	print "createGame( GameID )<BR>";
	print "deleteGame( GameID )<BR>";
	print "getGame( GameID )<BR>";
	print "getGameId( join_code , status )<BR>";
	print "updateStatus( GameID , status )<BR>";

	print "<BR>================================================================================================<BR><BR>";
}


function debugValuesRounds($roundtype,$gameID,$round_id,$question_no,$status)
{
	print "ROUND : <BR><BR>";
	print "DATABASE : <BR>";
	print "------------------------<BR>";
	print "ROUND TYPE. (*): " . $roundtype . "<BR>";
	print "GAME ID. (*): " . $gameID . "<BR>";
	print "ROUND_ID / NO. (*): " .  $round_id . "<BR>";
	print "QUESTIONS_IN_ROUND (*): " . $question_no . "<BR>";
	print "--------------------------------------------------------------<BR>";
	print "API BACKEND : <BR>";
	print "--------------------------------------------------------------<BR>";
	print "createRound( GameID )<BR>";
	print "deleteRound( ROUND_ID )<BR>";

	print "<BR>================================================================================================<BR><BR>";
}



function debugValuesQuestion_in_Round($roundID,$question_no_in_round,$question_id,$status)
{
	print "QUESTION IN ROUND : <BR><BR>";
	print "DATABASE : <BR>";
	print "------------------------<BR>";
	print "ROUND ID. (*): " . $roundID . "<BR>";
	print "QUESTION NO IN ROUND. (*): " . $question_no_in_round . "<BR>";
	print "QUESTION_ID (*): " . $question_id . "<BR>";
	print "--------------------------------------------------------------<BR>";
	print "API BACKEND : <BR>";
	print "--------------------------------------------------------------<BR>";
	print "<BR>================================================================================================<BR><BR>";
}


function debugValuesQuestions($question_id,$category,$question,$correct,$opt1,$opt2,$opt3,$opt4,$opt5,$opt6,$opt7,$level,$question_status)
{
	print "QUESTION: <BR><BR>";
	print "DATABASE : <BR>";
	print "------------------------<BR>";
	print "QUESTION ID. (*): " . $question_id . "<BR>";
	print "CATEGORY (*): " . $category . "<BR>";
	print "QUESTION (*): " . $question . "<BR>";
	print "CORRECT (*): " . $correct . "<BR>";
	print "OPTION_1 (*): " . $opt1 . "<BR>";
	print "OPTION_2 (*): " . $opt2 . "<BR>";
	print "OPTION_3 (*): " . $opt3 . "<BR>";
	print "OPTION_4 (*): " . $opt4 . "<BR>";
	print "OPTION_5 (*): " . $opt5 . "<BR>";
	print "OPTION_6 (*): " . $opt6 . "<BR>";
	print "OPTION_7 (*): " . $opt7 . "<BR>";
	print "LEVEL (*): " . $level . "<BR>";
	print "QUESTION STATUS (*): " . $question_status . "<BR>";
	print "--------------------------------------------------------------<BR>";
	print "API BACKEND : <BR>";
	print "--------------------------------------------------------------<BR>";
	print "<BR>================================================================================================<BR><BR>";

}





//var_dump($colors->getcolors(0));
//print "TEST : " .  $colors->getcolors(0)[0];

//ShowScreen($username,$color_red,$color_green,$color_blue,$join_code_check);

//,$color_red,$color_green,$color_blue


function ShowScreen($gameID,$username,$color_red,$color_green,$color_blue,$join_code_check)
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

function createID()
{
    $today = "0000111122223333";
    
    return $today;
    
    
}

$_SESSION['join_code_check'] = true;
?>
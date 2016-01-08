<?php
session_start();
include("Request.php");
include("colors.php");

//$colors = new colors();


if(isset($_SESSION['player_id'])) { $player_id= $_SESSION['player_id'];}
else 								{  
										$player_id = createPlayerID();
										$_SESSION['player_id'] = $player_id;
									}

if( isset($_SESSION['player_username'])  ) { $player_username = $_SESSION['pLayer_username'];}
else 								{  
										$player_username = "empty"; 
										$_SESSION["pLayer_username"] = $player_username;
									}

if( isset($_SESSION['player_password'])  ) { $player_password = $_SESSION['player_password'];}
else 								{  
										$player_password = "empty"; 
										$_SESSION["player_password"] = $player_password;
									}

if( isset($_SESSION['player_highscore'])  ) { $player_highscore = $_SESSION['player_highscore'];}
else 								{  
										$player_highscore = 0; 
										$_SESSION["player_highscore"] = $player_highscore;
									}
									
									
if(isset($_SESSION['player_color'])) 	{  	$player_color = $_SESSION["player_color"];}
else 								{  
										$player_color = "FFFFFF"; 
										$_SESSION["player_color"] = $player_color;
									}


if(isset($_SESSION['game_id'])) { $game_id = $_SESSION['game_id'];}
else 								{  
										$game_id = createGameID();
										$_SESSION['game_id'] = $game_id;
									}
						
if(isset($_SESSION['game_join_code'])) { $game_join_code = $_SESSION['game_join_code'];}
else 								{  
										$game_join_code = 100000;
										$_SESSION['game_join_code'] = $game_join_code;
									}
										
if(isset($_SESSION['game_max_players'])) { $game_max_players = $_SESSION['game_max_players'];}
else 								{  
										$game_max_players = 8;
										$_SESSION['game_max_players'] = $game_max_players;
									}
									

if(isset($_SESSION['game_rounds'])) { $game_rounds = $_SESSION['game_rounds'];}
else 								{  
										$game_rounds = 5;
										$_SESSION['game_rounds'] = $game_rounds;
									}
									
									
if(isset($_SESSION['game_status'])) { $game_status = $_SESSION['game_status'];}
else 								{  
										$game_status = "CREATED";
										$_SESSION['game_status'] = $game_status;
									}





if(isset($_SESSION['game_player_game_id'])) { $game_player_game_id = $_SESSION['game_player_game_id'];}
else 								{  
										$game_player_game_id = $game_id;
										$_SESSION['game_player_game_id'] = $game_player_game_id;
									}

if(isset($_SESSION['game_player_player_id'])) { $game_player_player_id = $_SESSION['game_player_player_id'];}
else 								{  
										$game_player_player_id = $player_id;
										$_SESSION['game_player_player_id'] = $game_player_player_id;
									}

									
if(isset($_SESSION['game_player_points'])) { $game_player_points = $_SESSION['game_player_points'];}
else 								{  
										$game_player_points = 0;
										$_SESSION['game_player_points'] = $game_player_points;
									}
									


if(isset($_SESSION['round_roundtype'])) { $round_roundtype = $_SESSION['round_roundtype'];}
else 								{  
										$round_roundtype = "CLASSIC";
										$_SESSION['round_roundtype'] = $round_roundtype;
									}
									
if(isset($_SESSION['round_game_id'])) { $round_game_id = $_SESSION['round_game_id'];}
else 								{  
										$round_game_id = $game_id;
										$_SESSION['round_game_id'] = $round_game_id;
									}

if(isset($_SESSION['round_id'])) { $round_id = $_SESSION['round_id'];}
else 								{  
										$round_id = createRoundID();
										$_SESSION['round_id'] = $round_id;
									}

if(isset($_SESSION['round_question_in_round'])) { $round_question_in_round = $_SESSION['round_question_in_round'];}
else 								{  
										$round_question_in_round = 5;
										$_SESSION['round_question_in_round'] = $round_question_in_round;
									}




$gameID = createID();
$question_id = array("q_1","q_45","q_2323","q_563");


/*
debugValuesPLayer($PlayerID,$username,$password,$highscore,$color);


debugValues($gameID,$PLayerID,$username,$color_red,$color_green,$color_blue,12);
debugValuesGame($gameID,"123456",8,3,"CREATED");


//Rounds($roundtype,$gameID,$round_id,$question_no,$status)
debugValuesRounds($roundtype,$gameID,$gameID . "_" . 1,4,"OPEN");

//Question_in_Round($gameID,$question_no_in_round,$question_id,$status)
debugValuesQuestion_in_Round($gameID . "_" . 1,1,$question_id[0],"READY");
debugValuesQuestions($question_id[0],"SPORTS","1: WHO WAS TOPSCORER IN PREMIER LEAGUE 2014-15","SERGIO AGUERO","BENTEKE","WAYNER ROONEY","VAN PERSIE","PELLE","GIROUD","CISSE","COSTA",1,"ACTIVE");
*/


$styleTDC1 = " style= \" width:150px; height:25px;color:black;background-color:#8888FF;font-style:veranda; font-size:14px; \"" ;
$styleTDC2 = " style= \" width:500px; height:25px;color:black;background-color:#AAAAFF;font-style:veranda; font-size:14px; \"" ;
$styleTDC3 = " style= \" width:200px; height:25px;color:black;background-color:#CCCCFF;font-style:veranda; font-size:14px; \"" ;

$stylearray = array($styleTDC1,$styleTDC2,$styleTDC3);

$playerarray 		= array(
						array("player_id ",$player_id,"varchar(32)"),
						array("player_username ",$player_username,"varchar(32)"),
						array("player_password ",$player_password,"varchar(32)"),
						array("player_highscore ",$player_highscore,"int(5)"),
						array("player_color ",$player_color,"varchar(6)")
						);

$playerarrayAPI 	= array(
						array("createPlayer ","( player_id:String , username:String , password:String , highscore:Int , color:String )","Status:bool"),
						array("deletePlayer ","( player_id:String )","Status:bool"),
						array("getPlayerId ","( username:String  , password:String  )","player_id : String"),
						array("getPlayer ","( player_id:String )","player : Player"),
						array("updatePlayername ","( player_id:String , username:String )","Status:bool"),
						array("updatePassword ","( player_id:String , password:String )","Status:bool"),
						array("updateHigscore ","( player_id:String , higscore:Int )","Status:bool"),
						array("updateColor ","( player_id:String , color:String )","Status:bool")
						);

$gameplayerarray 	= array(
						array("game_id ",$game_player_game_id,"varchar(32)"),
						array("player_id ",$game_player_player_id,"varchar(32)"),
						array("game_player_points ",$game_player_points,"int(5)")
						);

$gameplayerarrayAPI = array(
						array("createGamePlayer ","( game_id:String , player_id:String , points)","Status:bool"),
						array("deleteGamePlayer ","( game_id:String , player_id:String )","Status:bool"),
						array("updateGamePlayerPoints ","( username:String  , password:String  )","Status:bool")
						);

$gamearray 			= array(
						array("game_id ",$game_id,"varchar(32)"),
						array("join_code ",$game_join_code,"varchar(32)"),
						array("max_players ",$game_max_players,"int(5)"),
						array("rounds ",$game_rounds,"int(5)"),
						array("status ",$game_status,"varchar(32)")
						);
						
$gamearrayAPI = array(
						array("createGamePlayer ","( game_id:String , player_id:String , points)","Status:bool"),
						array("deleteGamePlayer ","( game_id:String , player_id:String )","Status:bool"),
						array("updateGamePlayerPoints ","( username:String  , password:String  )","Status:bool")
						);

$roundsarray 			= array(
						array("game_id ",$game_id,"varchar(32)"),
						array("round_type ",$round_roundtype,"varchar(32)"),
						array("round_id",$round_id,"int(5)"),
						array("round_question_in_round ",$round_question_in_round,"int(5)")
						);				

$roundsarrayAPI = array(
						array("createRound ","( game_id:String )","Status:bool"),
						array("deleteRound ","( round_id:String )","Status:bool"),
						);


$questions_in_roundarray = array(
						array("question_in_round_round_id ",$questions_in_round_round_id,"varchar(32)"),
						array("question_in_round_question_no",$questions_in_round_question_no_in_round,"varchar(32)"),
						array("question_in_round_question_id",$questions_in_round_question_id,"int(5)")
						);				

$questions_in_roundarrayAPI = array(
						array("createQuestionInRound ","( round_id:String )","Status:bool"),
						array("deleteQuestionInRound ","( round_id:String )","Status:bool"),
						array("getQuestionsInRound","( round_id:String ,round_type, question_in_round:int )","Status:bool"),
						);



$stringdata = "";
$stringdata = $stringdata . "<HTML>";
$stringdata = $stringdata . "<HEAD>";
$stringdata = $stringdata . "</HEAD>";
$stringdata = $stringdata . "<BODY>";
$stringdata = $stringdata . "<H2>SPECS:</H2>";
$stringdata = $stringdata . "<HR>";
$stringdata = $stringdata . valuesPlayerHTML($stylearray, 'PLAYER','q_player',$playerarray,$playerarrayAPI);
$stringdata = $stringdata . valuesPlayerHTML($stylearray, 'GAME PLAYER','q_game_player',$gameplayerarray,$gameplayerarrayAPI);
$stringdata = $stringdata . valuesPlayerHTML($stylearray, 'GAME','q_game',$gamearray,$gamearrayAPI);
$stringdata = $stringdata . valuesPlayerHTML($stylearray, 'ROUND','q_rounds',$roundsarray,$roundsarrayAPI);
$stringdata = $stringdata . valuesPlayerHTML($stylearray, 'QUESTION_IN_ROUND','q_question_in_round',$questions_in_roundarray,$questions_in_roundarrayAPI);
$stringdata = $stringdata . "</BODY>";
$stringdata = $stringdata . "</HTML>";


echo $stringdata;

function createPlayerID()
{
    $today = "P_" . "0000111122223333";
    
    return $today;
    
    
}


//function valuesPlayerHTML($PLayerID,$username,$password,$highscore,$color)

function valuesPlayerHTML($stylearray,$db,$dbname,$array,$array2)
{
	
	$arraySize = sizeOf($array);
	$arraySize2 = sizeOf($array2);
	
	$stringdata = $stringdata . "<H3>" . $db . "</H3>";
	$stringdata = $stringdata . "<TABLE style= \"color:black;background-color:#000099;\">";
	$stringdata = $stringdata . "<TR>";
	$stringdata = $stringdata . "<TD>";

	$stringdata = $stringdata . "<TABLE style= \"color:black;background-color:#5555FF;\">";
	$stringdata = $stringdata . "<TR> <TD " . $stylearray[0] ." >Database : </TD> <TD " . $stylearray[1] ." >" . $db ."</TD> </TR>";
	$stringdata = $stringdata . "<TR><TD " . $stylearray[0] ." >DB name : </TD> <TD " . $stylearray[1] ." >" . $dbname . "</TD></TR>";
	$stringdata = $stringdata . "</TABLE>";
	
	$stringdata = $stringdata . "<BR>";
	$stringdata = $stringdata . "<TABLE style= \"color:black;background-color:#5555FF;\">";
	
	for($i=0;$i<$arraySize;$i++)
	{
	$stringdata = $stringdata . "<TR><TD " . $stylearray[0] ." >" . $array[$i][0] . "</TD><TD " . $stylearray[1] ." >" . $array[$i][1] . "</TD><TD " . $stylearray[2] .">" . $array[$i][2] . "</TD></TR>";
	
	}

	$stringdata = $stringdata . "</TABLE>";
		$stringdata = $stringdata . "<BR>";

	$stringdata = $stringdata . "<TABLE style= \"color:black;background-color:#5555FF;\">";
	$stringdata = $stringdata . "<TR> <TD " . $stylearray[0] ." >methods : </TD><TD " . $stylearray[1] ." >api_" . $dbname . "_xxx</TD> </TR>";
	$stringdata = $stringdata . "</TABLE>";
	
	$stringdata = $stringdata . "<BR>";

	$stringdata = $stringdata . "<TABLE style= \"color:black;background-color:#5555FF;\">";

	for($i=0;$i<$arraySize2;$i++)
	{
	$stringdata = $stringdata . "<TR><TD " . $stylearray[0] ." >" . $array2[$i][0] . "</TD><TD " . $stylearray[1] .">" . $array2[$i][1] . "</TD><TD " . $stylearray[2] .">" . $array2[$i][2] . "</TD></TR>";
	
	}
	
	$stringdata = $stringdata . "</TABLE>";
	$stringdata = $stringdata . "</TD>";
	$stringdata = $stringdata . "</TR>";
	$stringdata = $stringdata . "</TABLE>";
	$stringdata = $stringdata . "<HR>";

	return $stringdata;
}

/*
function debugValuesPLayer($PLayerID,$username,$password,$highscore,$color)
{
	print "PLAYERS : <BR><BR>";
	print "DATABASE : <BR>";
	print "------------------------<BR>";
	print "PLAYER ID (*): " . $PLayerID . "<BR>";
	print "USERNAME (*): " . $username . "<BR>";
	print "PASSWORD (*): " . $password . "<BR>";
	print "HIGHTSCORE (*): " . $highscore . "<BR>";
	print "COLOR (*): " . $color . "<BR>";
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
	print "updateColor( PlayerID , Color )<BR>";
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
*/

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

function createGameID()
{
    $today = "G_" . createID();
    
    return $today;
    
    
}

function createID()
{
    $today = "0000111122223333";
    
    return $today;
    
    
}

function createRoundID()
{
    $today = "R_" . createID();
    
    return $today;
    
    
}


$_SESSION['join_code_check'] = true;
?>
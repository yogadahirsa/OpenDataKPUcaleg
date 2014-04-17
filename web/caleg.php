<?
/********************************************************************
*	Date		: 15 April 2014
*	Author		: Prayoga Dahirsa
*	Email		: yoga@cybergl.co.id
*	Copyleft	: eGov Lab UI 
*********************************************************************/

require("config.php"); 
#------------------------init
//$ses->authenticate();
$doc->pagetitle="Example";
$doc->status="Post Method";

#------------------------proc
switch ($_POST["cmd"]) {
	case "Submit":
		$json=$api->get_caleg($_POST["caleg_id"]);
		
		if($json!="false"){
			$data=json_decode($json);
			$json=str_replace(",",",<br/>",$json);
			$doc->content("caleg/success.php");
		}
		else{
			$doc->content("caleg/fail.php");
		}
	break;
	default:
		$doc->content("caleg/form.php");

}

$doc->error_message();

#------------------------view

if ($mobile) {include(viwpath."/general/m_body.php");}
else {include(viwpath."/general/body.php");}
?>
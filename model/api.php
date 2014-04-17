<?
/*
Author		: Prayoga Dahirsa
Date		: 15 April 2014
Copyleft	: eGov Lab UI
Contact		: yoga@cybergl.co.id
Version		: 0.0.1
*/

class api extends db_connection {
//-------disediakan untuk kepentingan yang akan datang

	function get_caleg($caleg_id) {
		$content=file_get_contents(caleg_url.'/api.php?cmd=search&caleg_id='.$caleg_id);
        return $content;
	}

}
?>

<style>
	table,th,td{
		border:1px solid black;
	}
	caption{
		font-size:20;
	}
	#json{
		padding: 10px 30px;
		background-color: #b0c4de;
		margin-top: 5px;
		width: 84%;
		font-family:'Courier New';
	}
</style>

JSON:
<br/>
<div id="json">
<?
echo $json;
?>
</div>
<br/>
<br/>

<table cellpadding="4" cellspacing="1" style="font-size:12px; width:90%;line-height:170%;">
	<tr>
		<th>Caleg ID</th>
		<th>Dapil ID</th>
		<th>Partai ID</th>
		<th>No. Urut</th>
		<th>Nama</th>
		<th>Tingkat</th>
	</tr>
	<tr>
		<td align="center"><?echo $data->caleg_id;?></td>
		<td align="center"><?echo $data->dapil_id;?></td>
		<td align="center"><?echo $data->partai_id;?></td>
		<td align="center"><?echo $data->no_urut;?></td>
		<td align="center"><?echo $data->nama;?></td>
		<td align="center"><?echo $data->tingkat;?></td>
	</tr>
</table>

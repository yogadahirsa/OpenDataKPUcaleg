<style>
	table,th,td{
		border:1px solid black;
		border-collapse:collapse;
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

<?echo $frm->form("caleg.php",$hidden);?>
	Caleg ID: <?echo $frm->textbox("text","caleg_id","20","16");?>&nbsp;
	<?echo $frm->button("Submit");?>
</form>
<br/>

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
		<th width=30%>Param</th>
		<th>Definition</th>
	</tr>
	<tr>
		<td>caleg_id</td>
		<td>The ID of the candidate</td>
	</tr>
	<tr>
		<td>tingkat</td>
		<td>The level of the candidate</td>
	</tr>
	<tr>
		<td>dapil_id</td>
		<td>The ID of the distric</td>
	</tr>
	<tr>
		<td>partai_id</td>
		<td>The ID of the party</td>
	</tr>
	<tr>
		<td>no_urut</td>
		<td>The number of candidate in their district</td>
	</tr>
	<tr>
		<td>nama</td>
		<td>The name of the candidate</td>
	</tr>
</table>

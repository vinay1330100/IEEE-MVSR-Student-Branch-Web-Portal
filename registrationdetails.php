<?php
mysql_connect("localhost","root","");
mysql_select_db("forms");
$data=mysql_query("select * from regtform");
echo"<table border=1 align=center>";
echo"<tr height=50><th width=100% colspan=7 align=center><h1>Registration Details</h1></td>";
while($rec=mysql_fetch_row($data))
{
echo"<tr height=50>

<td width=150 bgcolor=#ff3366>$rec[0]
<td width=150>$rec[1]
<td width=150>$rec[2]
<td width=150>$rec[3]
<td width=150>$rec[4]
<td width=150>$rec[5]
<td width=150>$rec[6]
<td width=150>$rec[7]
<td width=150>$rec[8]
<td width=150>$rec[9]
<td width=150>$rec[10]

</tr>";
//if two columns
}
echo"</table>";
?>

<!--
fieldvalue=document.getElementById('text').value;
localStorage.setItem('text',fieldvalue);
-->
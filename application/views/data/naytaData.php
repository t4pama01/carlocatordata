<h1>Data</h1>
<TABLE BORDER=2>
<TR><TH>Latitude</TH><TH>Lognitude</TH><TH>Date</TH></TR>
<?php
foreach ($asiakkaat as $rivi) {
	echo '<tr>';
	echo '<td>'.$rivi['Latitude'].'</td>';
	echo '<td>'.$rivi['Longitude'].'</td>';
	echo '<td>'.$rivi['Date'].'</td>';
	echo '</tr>';
}
?>
</TABLE>
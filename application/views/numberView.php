

<table border=1> 
	<tr>
		<th>ФИО</th>
		<th>Номер</th>
	</tr> 
	<?php
	while ($result=mysql_fetch_array($data)) {

			echo '<tr><th>'.$result['name'].'</th><th>'.$result['number'].'</th></tr>' ;
	}?>
</table>

<div><h2>Добавление номера</h2>
<form method="post">
Имя: <input type="text" name="name" value=" " required ><br>
Номер: <input type="text" name="number" value="" required><br>
<input type="submit" name="save">

</form>
<form method="post"><input type="submit" name="update" value="обновить"></form>
<a href="authorization">Выход</a>
</div>

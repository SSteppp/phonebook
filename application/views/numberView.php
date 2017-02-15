
<table border=1>
	<tr>
		<th>ФИО</th>
		<th>Номер</th>
	</tr>
	<?php foreach ($data as $value):?>
	<tr>
		<th><?= $value['name'] ?></th>
		<th><?= $value['number'] ?></th>
	</tr>
	<?php endforeach;?>
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

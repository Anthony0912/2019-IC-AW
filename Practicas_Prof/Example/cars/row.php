<tr>
	<td><?=$car['id']?></td>
	<td><?=$car['brand']?></td>
	<td><?=$car['year']?></td>
	<td>
		<a class="btn btn-warning" href="/cars/update.php?id=<?=$car['id']?>">Editar</a>
		<a class="btn btn-danger" href="/cars/delete.php?id=<?=$car['id']?>">Eliminar</a>
	</td>
</tr>
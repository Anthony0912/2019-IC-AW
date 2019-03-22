<tr id="<?=$car['id']?>">
	<td><?=$car['id']?></td>
	<td><?=$car['brand']?></td>
	<td><?=$car['year']?></td>
	<td>
		<div class="action-btn">
			<a class="btn btn-warning" href="/cars/update.php?id=<?=$car['id']?>">Editar</a>
			<button class="btn btn-danger delete-btn">Eliminar</button>
		</div>
		<div class="hidden-btn d-none">
			<button class="btn btn-danger cancel-btn">Cancelar</button>
			<button class="btn btn-success accept-btn">Aceptar</button>
		</div>
	</td>
</tr>
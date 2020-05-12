	<?php 
	$query = "SELECT halnev, haltap, szarmazas, halfaj, szin FROM halak";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
	?>
	<?php if(count($users) <= 0) : ?>
		<h1>Nincs hal az adatbázisban!</h1>
	<?php else : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Neve</th>
					<th scope="col">Tápja</th>
					<th scope="col">Származása</th>
					<th scope="col">Faja</th>
					<th scope="col">Színe</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($users as $u) : ?>
					<?php $i++; ?>
					<tr>
						<th scope="row"><?=$i ?></th>
						<td><?=$u['halnev'] ?></td>
						<td><?=$u['haltap'] ?></td>
						<td><?=$u['szarmazas'] ?></td>
						<td><?=$u['halfaj'] ?></td>
						<td><?=$u['szin'] ?></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	<?php endif; ?>
	<?php 
	$query = "SELECT tapnev, lejaratidatum, izesites, allag, ar FROM tap";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
	?>
	<?php if(count($users) <= 0) : ?>
		<h1>Nincs táp az adatbázisban!</h1>
	<?php else : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Neve</th>
					<th scope="col">Lejárati dátuma</th>
					<th scope="col">Ízesítése</th>
					<th scope="col">Állaga</th>
					<th scope="col">Ára</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($users as $u) : ?>
					<?php $i++; ?>
					<tr>
						<th scope="row"><?=$i ?></th>
						<td><?=$u['tapnev'] ?></td>
						<td><?=$u['lejaratidatum'] ?></td>
						<td><?=$u['izesites'] ?></td>
						<td><?=$u['allag'] ?></td>
						<td><?=$u['ar'] ?></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	<?php endif; ?>
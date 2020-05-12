<?php if(!isset($_SESSION['jogosultsag']) || $_SESSION['jogosultsag'] < 1) : ?>
	<h1>Hozzáférés megtagadva!</h1>
<?php else : ?>
	<?php 
	$query = "SELECT keresztnev, vezeteknev, email, jogosultsag FROM felhasznalok";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
	?>
	<?php if(count($users) <= 0) : ?>
		<h1>Nincs felhasználó az adatbázisban!</h1>
	<?php else : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Keresztnév</th>
					<th scope="col">Vezetéknév</th>
					<th scope="col">Email</th>
					<th scope="col">Jogosultság</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($users as $u) : ?>
					<?php $i++; ?>
					<tr>
						<th scope="row"><?=$i ?></th>
						<td><?=$u['keresztnev'] ?></td>
						<td><?=$u['vezeteknev'] ?></td>
						<td><?=$u['email'] ?></td>
						<td><?=$u['jogosultsag'] ?></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	<?php endif; ?>
<?php endif; ?>
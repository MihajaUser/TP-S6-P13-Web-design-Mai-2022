<h2 class="h4 pd-20">Liste Information</h2>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th class="table-plus datatable-nosort">Photo</th>
			<th>Titre</th>
			<th>Description</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($informations as $information) { ?>
			<tr>
				<td class="table-plus">
					<img src="<?php echo base_url() ?>/assets/photo/<?php echo $information['photo'] ?>" width="200" height="200" alt="">
				</td>
				<td><?= $information['titre'] ?></td>
				<td><?= $information['description'] ?></td>
				<td>
					<form><input type="button" class="btn btn-secondary" value="modifier"></form>
				</td>
				<td>
					<form action="<?php echo site_url('') ?>/supprimerInformation" method="post">
						<input type="hidden" name="idInformation" value="<?php echo $information['id'] ?>">
						<input type="submit" class="btn btn-danger" value="supprimer">
					</form>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
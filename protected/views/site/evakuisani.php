<table class="table">
	<tr>
		<td>
			Ime i prezime
		</td>
		<td>
			Ime jednog roditelja
		</td>
		<td>
			Pol
		</td>
		<td>
			Datum rodjenja
		</td>
		<td>
			Mjesto rođenja
		</td>
		<td>
			Trenutna lokacija
		</td>
	<?php foreach($model as $m): ?>
	<tr>
		<td>
			<?php echo $m->name; ?>
		</td>
		<td>
			<?php echo $m->parent_name; ?>
		</td>
		<td>
			<?php echo $m->sex; ?>
		</td>
		<td>
			<?php echo $m->birthday; ?>
		</td>
		<td>
			<?php echo $m->hometown; ?>
		</td>
		<td>
			<?php echo $m->location; ?>
		</td>
	</tr>
	<?php endforeach ?>
</table>

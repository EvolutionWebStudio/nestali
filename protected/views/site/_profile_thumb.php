<?php foreach($model as $m): ?>
<div class="col-sm-6 col-md-3">
	<div class="thumbnail">
		<img data-src="holder.js/300x200" alt="...">
		<div class="caption">
			<h3>Thumbnail label</h3>
			<p><?php echo $m->name_surname; ?></p>
			<p><?php echo $m->description; ?></p>
			<p><?php echo $m->published_date; ?></p>
			<p><?php echo $m->last_seen_date; ?></p>
			<p><?php echo $m->image; ?></p>
			<p><?php echo $m->contact->name; ?></p>
			<p><?php echo $m->contact->phone; ?></p>
			<p><?php echo City::model()->getCityName($m->city_ptt); ?></p>
			<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		</div>
	</div>
</div>
<?php endforeach; ?>
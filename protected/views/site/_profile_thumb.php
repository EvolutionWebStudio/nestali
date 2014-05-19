<?php foreach($model as $m): ?>
<div class="col-sm-6 col-md-3">
	<div class="thumbnail person">
        <?php $imageName = (file_exists(Yii::app()->baseUrl.'/img/'.$m->image))? $m->image : 'person-placeholder-male.jpg'; ?>
		<img src="<?php echo Yii::app()->baseUrl.'/img/'. $imageName; ?>" alt="<?php echo 'Slika ' . $m->name_surname; ?>">

        <div class="caption">
			<h3><?php echo $m->name_surname; ?></h3>
            <p class="person-description">
                <?php echo $m->description; ?>
            </p>
            <ul class="person-info">
                <li title="Zadnji put viđen/a"><span class="glyphicon glyphicon-calendar"></span> <?php echo date('d.m.Y, h:m', strtotime($m->last_seen_date)); ?></li>
                <li title="Grad u kome je osoba nestala"><span class="glyphicon glyphicon-record"></span> <?php echo City::model()->getCityName($m->city_ptt); ?></li>
                <li title="Poslednja poznata lokacija"><span class="glyphicon glyphicon-map-marker"></span>  <?php echo $m->last_seen_destination; ?></li>
                <li title="Kontakt osoba"><span class="glyphicon glyphicon-earphone"></span> <?php echo $m->contact->name . ', ' . $m->contact->phone; ?></li>
                <li></li>
            </ul>

			<div class="alert alert-warning">
                <span class="glyphicon glyphicon-exclamation-sign"></span> Nije još pronađen/a
			</div>
			<?php if(!Yii::app()->user->isGuest): ?>
				<div class="alert alert-warning">
					<?php echo CHtml::link('Pronađen/a',array('profile/pronadjena','id'=>$m->id)); ?>
				</div>
			<?php endif; ?>

            <small class="article-meta">Nestanak objavljen <?php echo date('d.m.Y, h:m', strtotime($m->published_date)); ?></small>
		</div>
	</div>
</div>
<?php endforeach; ?>

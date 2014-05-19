<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="">
	<div class="main-cta-wrapper col-md-12">
		<h1>Rezultati pretrage</h1>
		<div class="col-md-12">
			<form action="">
				<div class="input-group search-wrapper">
					<input type="text" class="form-control" placeholder="Upišite ime i prezime osobe koju tražite..."/>
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Pronađi</button>
                </span>
				</div>

			</form>
		</div>
	</div>
</div>

<div>
	<?php $this->renderPartial('_profile_thumb', array('model'=>$model)); ?>
</div>
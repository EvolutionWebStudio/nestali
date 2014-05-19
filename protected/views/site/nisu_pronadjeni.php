<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="">
	<div class="main-cta-wrapper col-md-12">
		<h1>Nisu Pronađeni</h1>
	</div>
</div>

<div>
	<?php $this->renderPartial('_profile_thumb', array('model'=>$model)); ?>
</div>
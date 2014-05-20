<?php
/* @var $this SiteController */

$this->pageTitle='Pronađene osobe';
?>

<div class="row">
	<div class="col-md-12">
		<h1>Osobe koje su pronađene</h1>
        <br/>
        <br/>
	</div>
</div>

<div class="row" id="people-wrapper">
	<?php $this->renderPartial('_profile_thumb', array('model'=>$model)); ?>
</div>
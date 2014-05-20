<?php
/* @var $this SiteController */

$this->pageTitle='Osobe koje još nisu pronađene';
?>

<div class="row">
	<div class="col-md-12">
            <h1>Osobe koje još nisu pronađene</h1>
        <br/>
        <br/>
	</div>
</div>

<div class="row" id="people-wrapper">
	<?php $this->renderPartial('_profile_thumb', array('model'=>$model)); ?>
</div>
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="col-md-12">
    <h1>Pronađimo nestale!</h1>
    <p>Sajt nestali.rs napravljen je sa ciljem pronalaženja osoba nestalih u poplavama koje su zadesile Srbiju i
        region u proteklim danima. Kako situacija postaje sve alarmantnija, da bismo što efikasnije reagovali i
        pomogli građanima u najkraćem roku, molimo Vas da nam pomognete i priključite se akciji pretrage za nestalim licima.</p>

    <p>
        To možete uraditi tako što ćete podeliti stranicu sa svojim prijateljima, na društvenim mrežama, kao i upisati imena
        osoba koje se još uvek vode kao nestale.
    </p>
    <form action="">
        <input type="text" class="form-control"/>
    </form>
</div>

<div>
    <?php $this->renderPartial('_profile_thumb', array('model'=>$model)); ?>
</div>
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="row">
    <div class="main-cta-wrapper col-md-12">
        <h1>Pronađimo nestale!</h1>
        <p>Ovaj registar napravljen je sa ciljem pronalaženja osoba sa područja Republike Srpske, nestalih u poplavama
            koje su zadesile region u proteklom periodu. Kako situacija postaje sve alarmantnija, da bismo što efikasnije reagovali i
            pomogli građanima u najkraćem roku, molimo Vas da nam pomognete i priključite se akciji pretrage za nestalim licima.
        </p>
        <p>
            To možete uraditi tako što ćete podijeliti stranicu sa svojim prijateljima, na društvenim mrežama, kao i upisati imena
            osoba koje se još uvijek vode kao nestale.
        </p>
        <div class="col-md-12">
            <form action="<?php echo $this->createUrl('site/pretraga'); ?>" method="post">
                <div class="input-group search-wrapper">
                    <input name="pretraga" type="text" class="form-control" placeholder="Upišite ime i prezime osobe koju tražite..."/>
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Pronađi</button>
                </span>
                </div>

            </form>
        </div>
    </div>
</div>

<div id="people-wrapper" class="row">
    <?php $this->renderPartial('_profile_thumb', array('model'=>$model)); ?>
</div>
<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
$this->pageTitle = 'Prijava nestale osobe';
?>

<h1>Prijavite nestalu osobu</h1>

    <p>
        U cilju brzog pronalaženja i evidentiranja nestalih osoba, napravljena je ova stranica,
        kako bismo u što kraćem roku izašli u susret svima koji brinu za svoje najbliže.
        Neophodno je da popunite sva dole navedena polja sa što preciznijim podacima.
    </p>

    <ul>
        <li>Upišite ime i prezime nestale osobe.</li>
        <li>Upišite grad iz kog nestala osoba dolazi.</li>
        <li>Upišite lokaciju na kojoj je osoba poslednji put viđena ili sa koje vas je poslednji put kontaktirala.</li>
        <li>Upišite datum kada Vas je nestala osoba poslednji put kontaktirala.</li>
        <li>Upišite sve dodatne informacije koje bi mogle pomoći pri pronalaženju osobe (datum ili godina rođenja, fizičke karakteristike ili bilo koja druga korisna informacija)</li>
        <li>Dodajte sliku nestale osobe da bi ste olakšali prepoznavanje i pronalazak</li>
        <li>Upišite podatke osobe koju treba kontaktirati u slučaju bilo kakvih informacija o nestaloj osobi</li>
    </ul>
<p>
    Nakon što popunite sve potrebne podatke kliknite na "Prijavi nestalu osobu" da bi ste te podatke upisali u bazu nestalih osoba.
</p>
<div class="form form-prijava">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'profile-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		'htmlOptions'=>array(
			'enctype' => 'multipart/form-data',
		),

	)); ?>

	<p class="note">Polja označena sa <span class="required">*</span> su obavezna.</p>

	<?php echo $form->errorSummary($profileModel, array('class'=>'alert alert-danger')); ?>

	<div class="col-md-3">
		<?php echo $form->labelEx($profileModel,'name_surname'); ?>
		<?php echo $form->textField($profileModel,'name_surname',array('size'=>60,'maxlength'=>120, 'class'=>'form-control', 'placeholder'=> 'Ime i prezime nestale osobe', 'required' => true)); ?>
		<?php echo $form->error($profileModel,'name_surname'); ?>
	</div>

    <div class="col-md-2">
        <?php echo $form->labelEx($profileModel,'city_ptt'); ?>
        <?php
        $list = CHtml::listData(City::model()->findAll(), 'ptt', 'name');
        echo CHtml::dropDownList('Profile[city_ptt]', $profileModel, $list, array('class'=>'form-control'));
        ?>
        <?php echo $form->error($profileModel,'city_ptt'); ?>
    </div>

    <div class="col-md-5">
        <?php echo $form->labelEx($profileModel,'last_seen_destination'); ?>
        <?php echo $form->textField($profileModel,'last_seen_destination',array('size'=>60,'maxlength'=>120, 'class'=>'form-control', 'placeholder'=> 'Poslednja poznata lokacija (do 120 karaktera)', 'required' => true)); ?>
        <?php echo $form->error($profileModel,'last_seen_destination'); ?>
    </div>

    <div class="col-md-2">
        <?php echo $form->labelEx($profileModel,'last_seen_date');
        $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'name'=>'Profile[last_seen_date]',
            'id'=>'Profile_last_seen_date',
            // additional javascript options for the date picker plugin
            'options'=>array(
                'showAnim'=>'fade',
                'dayNamesMin'=> array('Ned' ,'Pon', 'Uto', 'Sre', 'Čet', 'Pet', 'Sub'),
                'dateFormat'=>"dd.mm.yy",
                'firstDay'=>1,
                'monthNames'=>array('Januar', 'Februar', 'Mart', 'April', 'Maj', 'Juni', 'Juli', 'August', 'Septembar', 'Oktobar', 'Novembar', 'Decembar'),
                'monthNamesShort'=>array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'),
                'changeMonth'=>true,
                'changeYear'=>true
            ),
            'htmlOptions'=>array(
                'required' =>'required',
                'class' => 'form-control',
                'placeholder'=> 'Poslednji kontakt'
            ),
        ));
        ?>
        <?php echo $form->error($profileModel,'last_seen_date'); ?>
    </div>

	<div class="col-md-8">
		<?php echo $form->labelEx($profileModel,'description'); ?>
		<?php echo $form->textarea($profileModel,'description',array('maxlength'=>255, 'class'=>'form-control', 'placeholder'=> 'Dodatne informacije koje mogu pomoći u pronalaženju... (do 250 karaktera)')); ?>
		<?php echo $form->error($profileModel,'description'); ?>
	</div>
    <div class="col-md-4">
        <?php echo $form->labelEx($profileModel,'image'); ?>
        <?php echo CHtml::fileField('photo','', array('class' => 'form-control', 'id' => 'image-input', 'style' => 'display:none'));  ?>
            <div class="input-append input-group">
                <input id="photoCover" class="form-control" type="text" name="file">
                <span class="input-group-btn">
                    <a class="btn btn-default" onclick="$('input[id=image-input]').click();">Pronađi</a>
                </span>
            </div>

        <?php echo $form->error($profileModel,'image'); ?>
    </div>
    <div class="col-md-12">
        <hr/>
    </div>
	<div class="col-md-4">
		<?php echo $form->labelEx($contactModel,'name'); ?>
		<?php echo $form->textField($contactModel,'name',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'placeholder'=> 'Unesite ime kontakt osobe', 'required' => true)); ?>
		<?php echo $form->error($contactModel,'name'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($contactModel,'email'); ?>
		<?php echo $form->textField($contactModel,'email',array('size'=>60,'maxlength'=>120, 'class'=>'form-control', 'placeholder'=> 'Email adresa kontakt osobe')); ?>
		<?php echo $form->error($contactModel,'email'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($contactModel,'phone'); ?>
		<?php echo $form->textField($contactModel,'phone',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'placeholder'=> 'Kontakt telefon', 'required' => true)); ?>
		<?php echo $form->error($contactModel,'phone'); ?>
	</div>

	<div class="col-md-12 buttons">
        <div class="col-md-2 col-md-push-5">
            <?php echo CHtml::submitButton($profileModel->isNewRecord ? 'Prijavi nestalu osobu' : 'Prijavi nestalu osobu', array('class'=>'form-control btn btn-primary')); ?>
        </div>
		</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->

<?php if($isEmpty): ?>
    <div class="col-md-12 search-footer text-center">
        Nije pronađena ni jedna osoba. Potražite u
        <?php echo CHtml::link('listi evakuisanih osoba', array('site/evakuisani'));?>
        ili
        <?php echo CHtml::link('prijavite nestalu osobu', array('site/prijava'));?>
    </div>
<?php else: ?>
    <div class="col-md-12 search-footer text-center">
        Ako niste našli osobu koju ste tražili potražite u
        <?php echo CHtml::link('listi evakuisanih osoba', array('site/evakuisani'));?>
        ili
        <?php echo CHtml::link('prijavite nestalu osobu', array('site/prijava'));?>
    </div>
<?php endif; ?>
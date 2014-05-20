<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nestali | Baza nestalih lica u Republici Srpskoj</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.min.css"/>
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>-->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/main-frontend.css">
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="container">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="<?php echo Yii::app()->getBaseUrl(true); ?>">Registar nestalih lica</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class' => "nav navbar-nav navbar-right",),
                    'items'=>array(
                        array('label'=>'Prijavite nestalu osobu', 'url'=>array('/site/prijava')),
                        array('label'=>'Pronađeni', 'url'=>array('/site/pronadjeni')),
                        array('label'=>'Nisu pronađeni', 'url'=>array('/site/nisu_pronadjeni')),
                        array('label'=>'Evakuisani', 'url'=>array('/site/evakuisani')),
	                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                        ),
                )); ?>
            </div>
        </div>
    </nav>

    <div class="row">
        <?php echo $content; ?>
    </div>

    <div class="row">
        <footer class="col-md-12">
            <p class="copyright text-center">Created by <a href="http://evolution.rs.ba" target="_blank">Evolution Web Studio</a> &copy;2014</p>
        </footer>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo Yii::app()->baseUrl; ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/masonry.pkgd.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/plugins.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/main.js"></script>


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51134507-1', 'nestali.rs.ba');
    ga('send', 'pageview');
</script>
</body>
</html>

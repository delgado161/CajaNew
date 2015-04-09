<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />


        <!-- JS -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery_1.4.2.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqueryui.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/easing.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/tooltip/jquery.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/filterable.pack.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/chirp.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.tabs/jquery.tabs.pack.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
        <!-- ENDS JS -->

        <!-- Cufon -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon-yui.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/fonts/bebas-neue_400.font.js" type="text/javascript"></script>
        <!-- /Cufon -->

        <!-- superfish -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/css/superfish-custom.css" /> 
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-1.4.8/js/hoverIntent.js"></script> 
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish-1.4.8/js/superfish.js"></script> 
        <!-- ENDS superfish -->

        <!-- tabs -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.tabs.css" type="text/css" media="print, projection, screen" />








        <!--	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="en">

blueprint CSS framework 
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
<![endif]

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

<title><?php echo CHtml::encode($this->pageTitle); ?></title>-->
    </head>

    <body>

        <!-- HEADER   -->
        <?php $this->renderPartial('header', array('')); ?>
        
        <!-- CONTENIDO   -->
        <?php echo $content; ?>

        <!-- FOOTER   -->
        <?php $this->renderPartial('footer', array('')); ?>


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!--
        <div class="container" id="page">
        
                <div id="header">
                        <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
                </div> header 
        
                <div id="mainmenu">
        <?php
        $this->widget('zii.widgets.CMenu', array(
            'items' => array(
                array('label' => 'Home', 'url' => array('/site/index')),
                array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                array('label' => 'Contact', 'url' => array('/site/contact')),
                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
        ));
        ?>
                </div> mainmenu 
        <?php //if(isset($this->breadcrumbs)):?>
        <?php
        //$this->widget('zii.widgets.CBreadcrumbs', array(
        //'links'=>$this->breadcrumbs,
        //)); 
        ?> breadcrumbs 
        <?php //endif ?>
        
       
        
                <div class="clear"></div>
        
                <div id="footer">
                        Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
                </div> footer 
        
        </div> page -->

    </body>
</html>

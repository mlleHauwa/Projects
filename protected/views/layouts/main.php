<?php /* @var $this Controller */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	<!-- linking javascript and jQuery -->
	<?php 	$baseUrl = Yii::app()->baseUrl; 
			$cs = Yii::app()->getClientScript();
			$cs->registerScriptFile($baseUrl.'/js/index.js');
			
			$cs = Yii::app()->clientScript;
			$cs->scriptMap = array(
			'jquery.js' => Yii::app()->request->baseUrl.'/js/jquery.js',
			'jquery.yii.js' => Yii::app()->request->baseUrl.'/js/jquery.min.js',
			);
			$cs->registerCoreScript('jquery');
			$cs->registerCoreScript('jquery.ui');
	?>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<!--<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
	
	<!-- navigation bar -->
	<div id="mainmenu">
		
		<!-- movehut logo link to homepage -->
		<a href="http://localhost/project/index.php">
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\logo2.png", "logo", array("id"=>"movehutLogo"));?>
		</a>
		
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Search Result', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Search Result: Grid', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Property View', 'url'=>array('/site/contact')),
				array('label'=>'Property Locations', 'url'=>array('/site/propertyLocations')),
				array('label'=>'Property Categories', 'url'=>array('/site/propertyCategories')),
				array('label'=>'Property Guides', 'url'=>array('/site/propertyGuides')),
				array('label'=>'News', 'url'=>array('/site/news')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<!-- facebook and twitter links-->
		<a href="https://plus.google.com/105402276992721824132/posts" target="_blank"><?php echo CHtml::image(Yii::App()->request->baseURL."\images\GooglePlus.png","Logo", array("class"=>"socialLogo"));?></a>
		<a href="http://gb.pinterest.com/movehut/" target="_blank"><?php echo CHtml::image(Yii::App()->request->baseURL."\images\pinterest.jpg","Logo", array("class"=>"socialLogo"));?></a>
		<a href="http://www.linkedin.com/company/movehut" target="_blank"><?php echo CHtml::image(Yii::App()->request->baseURL."\images\linkedin.png","Logo", array("class"=>"socialLogo"));?></a>
		<a href="https://twitter.com/Movehut" target="_blank"><?php echo CHtml::image(Yii::App()->request->baseURL."\images/twitter.jpg","Logo", array("class"=>"socialLogo"));?></a>
		<a href="http://www.facebook.com/movehut" target="_blank"><?php echo CHtml::image(Yii::App()->request->baseURL."\images/facebook.jpg","Logo", array("class"=>"socialLogo"));?></a>
		
		Copyright &copy Movehut <?php echo date('Y'); ?><br/>
		<strong><a class="footerLinks" href="">About</a></strong>
		<strong><a class="footerLinks" href="http://www.movehut.co.uk/site/contact/">Contact Us</a></strong>
		<strong><a class="footerLinks" href="http://www.movehut.co.uk/sitemap/">Sitemap</a></strong>
        <strong><a class="footerLinks" href="http://www.movehut.co.uk/terms/">Terms and Privacy</a></strong>
        <strong><a class="footerLinks" href="http://www.movehut.co.uk/cookies/">How we use Cookies</a></strong>
	</div><!-- footer note -->

</div><!-- page -->

</body>
</html>

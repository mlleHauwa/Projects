<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Property View';
?>

<!-- website header -->
<p class="pageTitle">Shop for Rent - 237 Chillingham Road, Heaton, Newcastle under-Lyme</p>

<div id="enquiryHeader">
	<!-- breadcrumb to search results -->
	<p><< Back to Search Results</p>
	
	<!-- enquiry details -->
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\header.png","Building");?>
</div>

<!-- property image display and slideshow -->
<div id="imageShow">
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\pic2.jpg","Building");?>
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\slider.jpg","Slider for Scrolling", array("id"=>"slider"));?>
	
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\pic2.jpg","Building", array("class"=>"slideImage"));?>
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\pic2.jpg","Building", array("class"=>"slideImage"));?>
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\pic2.jpg","Building", array("class"=>"slideImage"));?>
	
	<!-- agent phone number -->
	<p>Interested? Call 01782917867</p>
</div>

<!-- enquiry form -->
<div class="searchBar2">
	<form class="searchForm">
		Name <input type="text"><br>
		Email <input type="text">
		Telephone <input type="text">
		Comment <input type="text"><br>
		<input type="checkbox" value="Bike">Receive Relevant Property details<br>
	</form>
	
	<div class="button">Submit</div>
</div>

<!-- agent details -->
<?php echo CHtml::image(Yii::App()->request->baseURL."\images\agent.png","Property agent details", array("id"=>"agentDesc"));?>

<!-- asides -->
<div class="aside2">
	<p class="titles">Areas within Newcastle under-Lyme</p>
	<p class="links">
		Audley<br>
		Keele<br>
		Kidsgrove<br>
		Silverdale
	</p>
	
	<p class="titles">Areas near Newcastle under-Lyme</p>
	<p class="links">
		Burslem<br>
		Festival Park<br>
		Penkhull<br>
		Stoke-On-Trent<br>
		Trentham
	</p>

	<p class="titles">Give <strong class="blackText">MOVE</strong>
	<strong class="redText">HUT</strong> your Feedback
	</p>
	<strong class="blackText">MOVE</strong><strong class="redText">HUT</strong>
	is more than happy to hear any feedback you have. We are always open to suggestions.
</div>

<!-- image representing property details -->
<div>
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\desc.png","Property description");?>
</div>


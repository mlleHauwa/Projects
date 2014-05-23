<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Property Guides';
?>

<!-- website header -->
<p class="pageTitle">Commercial Property Guides: "How to" Guides and Advice</p>

<!-- header text and register bar -->
<div class="headerSection">
	<!-- register bar  -->
	<div class="newsAside">
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images/register.png","register bar");?>
	</div>

	<div class="headerText">
		Read our in depth guides on commercial property at <strong class="blackText">MOVE
		</strong><strong class="redText">HUT</strong>, from selling your commercial 
		property to finding the right property to buy. If you're a landlord looking
		to let a commercial property, then we have a guide for that too, or maybe 
		you're a tenant looking for the right advice before purchasing or renting 
		a commercial property. All our guides feature unique and detailed information
		on every aspect of commercial property. Discover all the facts you need to know right here.
	
		<p>Our information guides on all aspects of commercial property are detailed and written
		with the user in mind. The goal of our Commercial Property Guides is to make every aspect
		of a commercial property transaction easier. We have information on planning permission 
		and the use classifications for properties. We also have easy to read help guides on how 
		to make an offer on a commercial property.</p>
	</div>
</div>

<!-- property Guides -->
<div class="mainSection3">
	<div class="category">
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\guide.jpg","property guide");?>
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\guide2.jpg","property guide");?>
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\guide3.jpg","property guide");?>
	</div>
	
	<!-- articles -->
	<div class="article2">
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\guidePic2.jpg","News picture", array("class"=>"newsPic"));?>
		
		<p class="titles">Serviced Office Guide</p>
		
		Read our serviced office guide if you're searching for a serviced office
		to rent, or simply wanting more information on what a serviced office can
		offer you. Our simple but detailed guide on every aspect of serviced offices,
		can make it easy for you to get relevant information pertaining to every detail.
	</div>
	
	<div class="article2">
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\guidePic.jpg","News picture", array("class"=>"newsPic"));?>
		
		<p class="titles">Guide to Maximising Your Marketing Opportunities With <strong class="blackText">MOVE
		</strong><strong class="redText">HUT</strong></p>
		
		When it comes to buying a commercial property of your chosen category,
		you might find it’s much harder to make a decision than it would be 
		if renting. Typically, the commitment of buying can be a much larger
		investment, and we have therefore provided lots of relevant commercial
		property category information regardless of which type of commercial 
		property you’re interesting in.
	</div>

	<div class="article2">
		<p class="titles">Let <strong class="blackText">MOVE</strong><strong class="redText">HUT</strong> Make Commercial Property Easier with Our Guides</p>
		
		You might be concerned about potential hidden costs associated with commercial property?
		Well we have a great selection of guides covering that too, along with handy information
		on business rates and capital allowances that may have an impact on the type of 
		commercial property you’re looking to buy or rent.

		<p>So whether you are looking for your first commercial property to buy or rent, or you are
		a landlord looking for information on how to successfully let your commercial property,
		the <strong class="blackText">MOVE</strong><strong class="redText">HUT</strong> Commercial
		Property Guides are going to help you break down the task and make the process much more transparent.</p>
	</div>
</div>

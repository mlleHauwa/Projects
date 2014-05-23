<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Search Result: Grid';
?>

<!-- website header -->
<p class="pageTitle">Leisure Property in Newcastle under-Lyme to let - Rent Leisure Property</p>

<!-- refine search side bar -->
<div class="searchBar">
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\search.png","Search icon", array("class"=>"icon"));?>
		
	<p class="title">Refine your Search</p>
	
	<form class="searchForm">
		Location <input type="text">
		Radius <input type="text">
		Property Type <input type="text">
	</form>
	
	<!-- buttons -->
	<div class="button">Search</div>	
	<div class="button">Advance Search</div>
</div>

<!-- search options -->
<div class="searchViewOptions">
	<p class="searchOptions">Page 1 of 10</p>
	
	<p class="searchOptions">Print</p>
	
	Show: <select><optgroup label="Listing per Page">
			<option>10</option>
			<option>25</option>
			<option>50</option>
		</optgroup></select>
		
	Sort: <select><optgroup>
			<option>Highest Price</option>
			<option>Lowest Price</option>
			<option>Date Added</option>
		</optgroup></select>
		
	View: <select><optgroup>
			<option>List</option>
			<option>Grid</option>
		</optgroup></select>
</div>

<!-- search results display -->
<div class="searchResults">
	<div class="resultGrid">
		<!-- property image -->
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\img.jpg","Building", array("class"=>"propertyImage2"));?>
			
		<div class="desc">
			<p class="titles">Shop for Rent - The Black Garter, 32 Clayton Street, Newcastle under-Lyme</p>
		
			<!-- agent logo -->
			<?php echo CHtml::image(Yii::App()->request->baseURL."\images\martinLogo.png","Logo", array("class"=>"agentLogo"));?>
		
			<p>Rent: £15,000 Per Annum</p>
			<p>Size: 1827 sq ft</p>
		</div>
	</div>
		
	<div class="resultGrid">
		<!-- property image -->
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\img3.jpg","Building", array("class"=>"propertyImage2"));?>
			
		<div class="desc">
			<p class="titles">Shop for Rent - 14 Blandford Square, Newcastle under-Lyme</p>
			
			<!-- agent logo -->
			<?php echo CHtml::image(Yii::App()->request->baseURL."\images\harrisLogo.png","Logo", array("class"=>"agentLogo"));?>
		
			<p>Rent: £13,500 Per Annum</p>
			<p>Size: 8646 sq ft</p>
		</div>
	</div>
		
	<div class="resultGrid">
		<!-- property image -->
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\pic2.jpg","Building", array("class"=>"propertyImage2"));?>
			
		<div class="desc">
			<p class="titles">Shop for Rent - 237 Chillingham Road, Heaton, Newcastle under-Lyme</p>
			
			<!-- agent logo -->
			<?php echo CHtml::image(Yii::App()->request->baseURL."\images\bridgfordLogo.png","Logo", array("class"=>"agentLogo"));?>
		
			<p>Rent: £19,500 Per Annum</p>
			<p>Size: 1490 sq ft</p>
		</div>
	</div>
		
	<div class="resultGrid">
		<!-- property image -->
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\pic.jpg","Building", array("class"=>"propertyImage2"));?>
			
		<div class="desc">
			<p class="titles">Shop for Rent - 271 / 291 Two Ball Lonnen, Fenham, Newcastle under-Lyme</p>
			
			<!-- agent logo -->
			<?php echo CHtml::image(Yii::App()->request->baseURL."\images\martinLogo.png","Logo", array("class"=>"agentLogo"));?>
		
			<p>Rent: £20,000 Per Annum</p>
			<p>Size: 3427 sq ft</p>
		</div>
	</div>
	
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\scroll.png","Scroll Navigator", array("id"=>"scrollNavigator"));?>
</div>

<!-- refine search side bar 
<div class="searchBar">
	?php echo CHtml::image(Yii::App()->request->baseURL."\images\search.png","Search icon", array("class"=>"icon"));?>
		
	<p class="title">Refine your Search</p>
	
	<form class="searchForm">
		Location <input type="text">
		Radius <input type="text">
		Property Type <input type="text">
	</form>
	
	<!-- buttons 
	<div class="button">Search</div>	
	<div class="button">Advance Search</div>
</div>


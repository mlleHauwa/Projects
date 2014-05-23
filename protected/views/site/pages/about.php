<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Search Result';
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
	<div class="result">
		<!-- property image -->
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\img.jpg","Building", array("class"=>"propertyImage"));?>
			
		<div class="desc">
			<p class="titles">Shop for Rent - The Black Garter, 32 Clayton Street, Newcastle under-Lyme</p>
		
			<!-- agent logo -->
			<?php echo CHtml::image(Yii::App()->request->baseURL."\images\martinLogo.png","Logo", array("class"=>"agentLogo"));?>
		
			<p>Rent: £15,000 Per Annum</p>
			<p>Size: 1827 sq ft</p>
			
			<p>£15,000.00 PCM 32 Clayton Terrace, Newcastle under-Lyme. Location The property
			is located on The Black Garter close to its junction with Richardson Road, and being
			a 10 minute walk north of Newcastle City Centre. Communication links are ex...</p>
			
			<p class="links">More Info | Arrange a Viewing | Feature this Property</p>
		</div>
	</div>
		
	<div class="result">
		<!-- property image -->
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\img3.jpg","Building", array("class"=>"propertyImage"));?>
		
		<div class="desc">
			<p class="titles">Shop for Rent - 14 Blandford Square, Newcastle under-Lyme</p>
		
			<!-- agent logo -->
			<?php echo CHtml::image(Yii::App()->request->baseURL."\images\harrisLogo.png","Logo", array("class"=>"agentLogo"));?>
		
			<p>Rent: £13,500 Per Annum</p>
			<p>Size: 8646 sq ft</p>
			
			<p>LOCATION The premises are located on Blandford Square, just off St James
			Boulevard, one of the main arterial routes into Newcastle city centre from
			the A1. Occupiers in the surrounding area are a mixture of retail, commercial 
			and restaurant uses and ...</p>
			
			<p class="links">More Info | Arrange a Viewing | Feature this Property</p>
		</div>
	</div>
		
	<div class="result">
		<!-- property image -->
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\pic2.jpg","Building", array("class"=>"propertyImage"));?>
			
		<div class="desc">
			<p class="titles">Shop for Rent - 237 Chillingham Road, Heaton, Newcastle under-Lyme</p>
		
			<!-- agent logo -->
			<?php echo CHtml::image(Yii::App()->request->baseURL."\images\bridgfordLogo.png","Logo", array("class"=>"agentLogo"));?>
		
			<p>Rent: £19,500 Per Annum</p>
			<p>Size: 1490 sq ft</p>
			
			<p>The property comprises ground floor shop, formally a display shop it has
			tiled flooring, suspended ceiling and spot lighting with a small office.
			The rear of the property provides storage and WC facilities...</p>
			
			<p class="links">More Info | Arrange a Viewing | Feature this Property</p>
		</div>
	</div>
		
	<div class="result">
		<!-- property image -->
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\pic.jpg","Building", array("class"=>"propertyImage"));?>
			
		<div class="desc">
			<p class="titles">Shop for Rent - 271 / 291 Two Ball Lonnen, Fenham, Newcastle under-Lyme</p>
		
			<!-- agent logo -->
			<?php echo CHtml::image(Yii::App()->request->baseURL."\images\martinLogo.png","Logo", array("class"=>"agentLogo"));?>
		
			<p>Rent: £20,000 Per Annum</p>
			<p>Size: 3427 sq ft</p>
			
			<p>DESCRIPTION Retail shop with first floor office. Prominent location, close to 
			local amenities. SIZE NIA 123.92sqm (1,334 sq ft). TENURE New Full Repairing and 
			Insuring Lease. Rent £20,000 p.a. 271 / 291 Two Ball Lonnen, Fenham, Newcast...</p>
			
			<p class="links">More Info | Arrange a Viewing | Feature this Property</p>
		</div>
	</div>
	
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\scroll.png","Scroll Navigator", array("id"=>"scrollNavigator"));?>
</div>





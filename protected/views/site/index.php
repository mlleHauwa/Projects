<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- responsive slideshow -->
<div id="slideshow">
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\building.jpg","Commercial Building", array("id"=>"picture"));?>
</div>

<!-- website header over slideshow -->
<p id="websiteTitle"><em class="redText">The</em> Commercial Property <strong class="greyText">Website</strong></p>

<!-- links to rent, buy, auction or investment -->
<div id="mainSection">
	<!-- normal display -->
	<a href="http://www.movehut.co.uk/rent/" target="_blank"><div id="rent" class="innerSection">
		<p class="title">Rent</p>
	</div></a>
	
	<a href="http://www.movehut.co.uk/buy/" target="_blank"><div id="buy" class="innerSection">
		<p class="title">Buy</p>
	</div></a>
	
	<a href="http://www.movehut.co.uk/auctions/" target="_blank"><div id="auction" class="innerSection">
		<p class="title">Auction</p>
	</div></a>
	
	<a href="http://www.movehut.co.uk/investment/" target="_blank"><div id="invest" class="innerSection">
		<p class="title">Investment</p>
	</div></a>
</div>

<!-- articles -->
<div id="mainSection2">
	<div id="socialAside">
	<p class="title"><strong class="blackText">MOVE</strong><strong class="redText">HUT</strong> Social Media<p>
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\media.png","Commercial Building");?>
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\media2.png","Commercial Building");?>
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\media3.png","Commercial Building");?>
	</div>
	
	<div class="article">
		<p class="titles">Location based commercial property from London to Manchester 
		to buy or to rent in the UK
		</p>
		
		Finding a commercial property locally in your area is made easy by using 
		<strong class="blackText">MOVE</strong><strong class="redText">HUT</strong>.
		Commercial property results are refined, which allows you to find the right 
		premises for you. We make it easy for you to search our diverse and varied mix
		of commercial properties regardless of whether you need a location in Edinburgh 
		or in Birmingham.
		By simply choosing your ideal commercial property location using our search 
		function, you can quickly and effectively discover the most suitable commercial
		property for you and your business. So if you need a commercial warehouse 
		in London, or your need a retail store in Suffolk we can match you up with 
		the ideal commercial property.
		To discover your perfect commercial property today, just use our search 
		function to narrow down your location and property needs, and we will 
		provide you with the results to make your choice on the right commercial
		property in your location.
	</div>
	
	<div class="article">
		<p class="titles">Commercial property services all across the UK from
		<strong class="blackText">MOVE</strong><strong class="redText">HUT</strong>
		</p>
	
		Discover your perfect commercial property to rent or for sale in the UK. We can 
		offer a wide range of commercial buildings and spaces to suit your needs,
		regardless of your requirements.
		Commercial properties come in many different types: offices, serviced offices,
		shops / retail, warehouses, land, automotive, industrial, leisure and healthcare.
		There is no need to register or subscribe to our easy to use website.
		The search facility offers you the ability to search for your ideal commercial 
		property within a specific radius, size, property type, buy / rent price range.
		We list commercial properties from some of the largest international and
		independent letting and estate agents, with no annoying advertisements or 
		pop-up’s to hinder your search.
	</div>
	
	<div class="article">
		<p class="titles">Find commercial property in your market from warehouses to 
		leisure properties in the UK
		</p>
		<strong class="blackText">MOVE</strong><strong class="redText">HUT</strong>
		makes it possible for you to easily search for a specialist range of commercial
		properties, for sale or to rent. By specifying the type of commercial property 
		that you desire on our search engine, it enables you to refine the right commercial
		properties to match your business and property needs.
		The range of commercial property categories that <strong class="blackText">MOVE</strong>
		<strong class="redText">HUT</strong> can offer includes; retail shops, offices,
		serviced offices, meeting rooms, land, warehouses, leisure properties including,
		pubs and restaurants, along with premises for investment, healthcare and automotive.
		Whether you are looking for a retail unit to lease, a service office to license or a 
		land investment opportunity to develop, <strong class="blackText">MOVE</strong>
		<strong class="redText">HUT</strong> can help by providing you with a comprehensive list.
		Begin your commercial property search now using our easy to use search facility.
	</div>
	
	<div class="article">
		<p class="titles">Let <strong class="blackText">MOVE</strong>
		<strong class="redText">HUT</strong> match you with the perfect commercial property 
		space in the UK
		</p>
		We understand that finding the right commercial property is critical for you as a 
		business owner or investor. Here at <strong class="blackText">MOVE</strong>
		<strong class="redText">HUT</strong>.co.uk, we make this process as easy as possible,
		by providing you with the most up to date and relevant commercial properties 
		in your chosen area. So find a personalised and free solution to your commercial property
		needs by using the features of <strong class="blackText">MOVE</strong>
		<strong class="redText">HUT</strong>.co.uk. We will match you and your business 
		with a winning commercial property perfect for your needs.
	</div>

	<div id="lastArticle">
		<p class="titles">Find the right commercial property for sale or to rent 
		in the UK with the services <strong class="blackText">MOVE</strong>
		<strong class="redText">HUT</strong> provide
		</p>
		Find your perfect commercial property to rent in the location you need in the UK.
		We list properties in all areas across the UK from London to Manchester,
		and we can match you up with the most suitable commercial property in your local area.
		If you are searching for a commercial property to buy in the UK, rather than renting,
		then we can help with this too. Our listings in the location of your choice, make it 
		easy to find the ideal commercial property for sale, whether it is a commercial retail
		premise or a business warehouse.
	</div>
</div>

<!-- video -->
<div id="videoWrapper">
	<iframe width="620" height="360" src="//www.youtube.com/embed/eb8xv8bCt74?rel=0" frameborder="0" allowfullscreen></iframe>
	
	<div id="aside">
		<p class="titles"><strong class="blackText">MOVE</strong><strong class="redText">HUT</strong> on TV</p>
		<strong class="blackText">MOVE</strong><strong class="redText">HUT</strong> is now advertising on mainstream UK TV stations.
		Our media partners include Sky News, Sky Sports and Bloomberg
	</div>
</div>

<!-- popular commercial property locations -->
<div id="footerImage">
	<p class="title">Popular Commercial Property Locations<p>
	
	<div class="footerLocation">
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\london.jpg","Building", array("class"=>"propertyImage2"));?>
	<p class="footerCaption">London - England</p>
	</div>
	
	<div class="footerLocation">
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\glasgow.jpg","Building", array("class"=>"propertyImage2"));?>
	<p class="footerCaption">Glasgow - Scotland</p>
	</div>
	
	<div class="footerLocation">
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\cardiff.jpg","Building", array("class"=>"propertyImage2"));?>
	<p class="footerCaption">Cardiff - Wales</p>
	</div>
	
	<div class="footerLocation">
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\manchester.jpg","Building", array("class"=>"propertyImage2"));?>
	<p class="footerCaption">Manchester - England</p>
	</div>
</div>


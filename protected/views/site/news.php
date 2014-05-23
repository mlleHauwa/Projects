<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - News';
?>

<!-- website header -->
<p class="pageTitle">News</p>

<!-- header text and search bar -->
<div class="headerSection">
	<!-- search box -->
	<div class="searchBar2">
		<form id="searchForm2">
			<input type="text">
		</form>
	
		<div class="button">Search</div>
	</div>

	<div class="headerText">
		Welcome to <strong class="blackText">MOVE</strong><strong class="redText">HUT</strong>
		News. Here you will find the latest commercial property news.
		We cover anything from recent administrations to new developments in your area.
		We list our commercial property news in easy to find sections to help you find
		the articles that you want to read. You can filter our articles by categories,
		recent post, archives, tags, and authors.
	</div>
	
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images\option.png","News options");?>
</div>

<!-- news section -->
<div class="mainSection3">
	<!-- asides -->
	<div class="newsAside">
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\side.png","side bars");?>

		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\side2.png","side bars");?>

		<?php echo CHtml::image(Yii::App()->request->baseURL."\images\side3.png","side bars");?>
	
		<div class="innerAside">
			<p class="titles">Learn more about our commercial property news</p>
			<strong class="blackText">MOVE</strong><strong class="redText">HUT</strong>
			commercial property news is designed to give you the reader, the latest 
			breaking news in the commercial property market. We welcome comments and 
			opinions on our news articles which can be added at the bottom of any article.
		</div>
		
		<div class="innerAside">
			<p class="titles">Authors of the <strong class="blackText">MOVE</strong><strong class="redText">HUT</strong> News</p>
			If you would like to find out what the authors of the <strong class="blackText">
			MOVE</strong><strong class="redText">HUT</strong> News section look like, 
			or what they enjoy doing in their spare time, please visit the author pages.
			Here you can view their profile and also see a list of their most recent articles.
		</div>
		
		<div class="innerAside">
			<p class="titles">News Categories</p>
			Our categories are split into eight sections. These include:
			Business News, Commercial Developments, Commercial Sales, 
			Economy News, Industry News, Top Properties, Wacky News and 
			Worldwide News.
		</div>
		
		<div class="innerAside">
			<p class="titles">Finding Articles</p>
			The recent post section lists articles in date and time order,
			so if you are looking for the most recent commercial property news, 
			please check this section regularly. Alternatively, if you are searching
			for past commercial property articles please visit the archives section.
			Here you will find all our previously published articles, dating back to
			January 2011.

			To find articles using particular keywords, you may find it easier to use
			the tag cloud. Here you can click on a particular word to find articles
			related to that subject.
		</div>
	</div>
	
	<!-- news articles -->
	<div class="newsArticle">
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images/home.jpg","News picture", array("class"=>"newsPic"));?>
	
		<p class="titles">Solihull FORE development takes off with Aerospace let</p>
		
		<strong class="redText">Posted on May 16, 2014 1:15 pm by Cliff Goodwin under Commercial Developments</strong><br>  
		American-based UTC Aerospace Systems has signed a ten year lease on offices at
		Solihull’s prestigious FORE business park. The 25,652sq ft letting for the entire
		FORE One building is thought to be the largest transaction for office space in
		the West Midlands town and the M42 corridor for two years. Solihull’s previous 
		landmark deal... <strong class="links">Read More</strong>
	</div>
	
	<div class="newsArticle">
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images/building2.jpg","News picture", array("class"=>"newsPic"));?>
	
		<p class="titles">Redevelopment moves a step closer after Government rejects Euston Station listing bid</p>
	
		<strong class="redText">Posted on May 16, 2014 1:15 pm by Cliff Goodwin under 
		Commercial Developments</strong><br> 
		American-based UTC Aerospace Systems has signed a ten year lease on offices at
		Solihull’s prestigious FORE business park. The 25,652sq ft letting for the entire
		FORE One building is thought to be the largest transaction for office space in
		the West Midlands town and the M42 corridor for two years. Solihull’s previous 
		landmark deal... <strong class="links">Read More</strong>
	</div>
	
	<div class="newsArticle">
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images/home2.jpg","News picture", array("class"=>"newsPic"));?>
	
		<p class="titles">Work on ‘Walkie-Scorchie’ Sun Shades to begin this Month</p>
		
		<strong class="redText">Posted on May 16, 2014 1:15 pm by Cliff Goodwin under 
		Commercial Developments</strong><br> 
		American-based UTC Aerospace Systems has signed a ten year lease on offices at
		Solihull’s prestigious FORE business park. The 25,652sq ft letting for the entire
		FORE One building is thought to be the largest transaction for office space in
		the West Midlands town and the M42 corridor for two years. Solihull’s previous 
		landmark deal... <strong class="links">Read More</strong>
	</div>
	
	<div class="newsArticle">
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images/home4.jpg","News picture", array("class"=>"newsPic"));?>
	
		<p class="titles">Shopping Centre Investment hits Six Year High</p>
	
		<strong class="redText">Posted on May 16, 2014 1:15 pm by Cliff Goodwin under
		Commercial Developments</strong><br> 
		American-based UTC Aerospace Systems has signed a ten year lease on offices at
		Solihull’s prestigious FORE business park. The 25,652sq ft letting for the entire
		FORE One building is thought to be the largest transaction for office space in
		the West Midlands town and the M42 corridor for two years. Solihull’s previous 
		landmark deal... <strong class="links">Read More</strong>
	</div>
	
	<div class="newsArticle">
		<?php echo CHtml::image(Yii::App()->request->baseURL."\images/home3.jpg","News picture", array("class"=>"newsPic"));?>
	
		<p class="titles">Record number in work as Unemployment Rate falls to 6.8 per cent</p>
	
		<strong class="redText">Posted on May 16, 2014 1:15 pm by Cliff Goodwin under
		Commercial Developments</strong><br> 
		American-based UTC Aerospace Systems has signed a ten year lease on offices at
		Solihull’s prestigious FORE business park. The 25,652sq ft letting for the entire
		FORE One building is thought to be the largest transaction for office space in
		the West Midlands town and the M42 corridor for two years. Solihull’s previous 
		landmark deal... <strong class="links">Read More</strong>
	</div>
	
	<?php echo CHtml::image(Yii::App()->request->baseURL."\images/footerNews.png","News page footer");?>
</div>
	

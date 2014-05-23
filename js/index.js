// image slider to display homepage pictures
window.onload = slider;
var count=0;
var pictures = new Array("/project/images/home2.jpg","/project/images/home4.jpg",
						"/project/images/home.jpg","/project/images/building.jpg",
						"/project/images/building2.jpg","/project/images/home3.jpg");

function slider(){
 count = Math.floor((Math.random()*pictures.length));	//choose random image from array
 document.getElementById("picture").src = pictures[count];	
 rotate();	//rotate images at specified time.
}

//rotating images at a specified time.
function rotate(){
	count++;
	if(count == pictures.length){
	count=0;	//restart if every image is shown.
} 

document.getElementById("picture").src = pictures[count];
setTimeout(rotate, 6*500);
}

//animating elements
$(document).ready(function(e){
	//change css styling for rent on hover, remove for others
	$('#rent').hover(function(){	
	    $('#rent').addClass('innerSection2');	
		$('#buy').removeClass('innerSection2');
		$('#auction').removeClass('innerSection2');
		$('#invest').removeClass('innerSection2');
	});	
	
	//change css styling for buy on hover, remove for others
	$('#buy').hover(function(){	
	    $('#buy').addClass('innerSection2');	
		$('#rent').removeClass('innerSection2');
		$('#auction').removeClass('innerSection2');
		$('#invest').removeClass('innerSection2');
	});	
	
	//change css styling for auction on hover, remove for others
	$('#auction').hover(function(){	
	    $('#auction').addClass('innerSection2');	
		$('#rent').removeClass('innerSection2');
		$('#buy').removeClass('innerSection2');
		$('#invest').removeClass('innerSection2');
	});	
	
	//change css styling for invest on hover, remove for others
	$('#invest').hover(function(){	
	    $('#invest').addClass('innerSection2');	
		$('#rent').removeClass('innerSection2');
		$('#buy').removeClass('innerSection2');
		$('#auction').removeClass('innerSection2');
	});	
	
	//remove css styling for all elements when mouse leaves the section
	$('#mainSection').mouseleave(function(){	
		$('#buy').removeClass('innerSection2');	
		$('#rent').removeClass('innerSection2');
		$('#auction').removeClass('innerSection2');
		$('#invest').removeClass('innerSection2');
	});
	
	//reduce image opacity when text is hovered
	$('#websiteTitle').mouseover(function(){	
		$('#picture').addClass('pictureHover');	
	});
	
	//restore image opacity
	$('#websiteTitle').mouseleave(function(){	
		$('#picture').removeClass('pictureHover');	
	});
});	

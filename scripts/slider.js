// -------------------------------
//  START - HOMEPAGE IMAGE SLIDER
// -------------------------------
$(document).ready(function() {
	
	//Show the paging and activate its first link
	
	$(".slider-paging a:first").addClass("active");
	

	//Get size of the image, how many images there are, then determin the size of the image reel.
	var imageWidth = $(".slider-holder").width();
	var imageSum = $(".image-reel img").size();
	var imageReelWidth = imageWidth * imageSum;

	//Adjust the image reel to its new size
	$(".image-reel").css({'width' : imageReelWidth});
	
	//Paging  and Slider Function
	rotate = function(){
	    var triggerID = $active.attr("rel") - 1; //Get number of times to slide
	    var image_reelPosition = triggerID * imageWidth; //Determines the distance the image reel needs to slide

	    $(".slider-paging a").removeClass('active'); //Remove all active class
	    $active.addClass('active'); //Add active class (the $active is declared in the rotateSwitch function)

	    //Slider Animation
	    $(".image-reel").animate({
	        left: -image_reelPosition
	    }, 500 );

	}; 

	//Rotation  and Timing Event
	rotateSwitch = function(){
	    play = setInterval(function(){ //Set timer - this will repeat itself every 7 seconds
	        $active = $('.slider-paging a.active').next(); //Move to the next paging
	        if ( $active.length === 0) { //If paging reaches the end...
	            $active = $('.slider-paging a:first'); //go back to first
	        }
	        rotate(); //Trigger the paging and slider function
	    }, 2000); //Timer speed in milliseconds (2 seconds)
	};

	rotateSwitch(); //Run function on launch
	
	//On Hover
	$(".image-reel a").hover(function() {
	    clearInterval(play); //Stop the rotation
	}, function() {
	    rotateSwitch(); //Resume rotation timer
	});	

	//On Click
	$(".slider-paging a").click(function() {
	    $active = $(this); //Activate the clicked paging
	    //Reset Timer
	    clearInterval(play); //Stop the rotation
	    rotate(); //Trigger rotation immediately
	    rotateSwitch(); // Resume rotation timer
	    return false; //Prevent browser jump to link anchor
	});
});
//-------------------------------
// END - HOMEPAGE IMAGE SLIDER
//-------------------------------
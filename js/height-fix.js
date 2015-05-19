jQuery(document).on('ready', heightFix);
jQuery(document).on('ready', squareUp);
jQuery(window).on('resize', heightFixAgain);
jQuery(window).on('resize', squareUp);

function heightFix(){
    // Get Height Fix Containers
    var heightFixContainer = jQuery('.height-fix');
    // Process Each Height Fix Container
    for (i = 0; i < heightFixContainer.length; i++){
        // Get Height Fix Items
        var heightFixItems = jQuery(heightFixContainer[i]).find('.height-fix-item');
        // Create Array for Item Heights
        var itemHeights = [];
        // Find the Height Of Each Item
        for (ia = 0; ia < heightFixItems.length; ia++){
			// Gets CSS Height Value with Padding and Border included
            itemHeights[ia] = jQuery(heightFixItems[ia]).css("height");
			// Makes sure the CSS Return is set to a String
            itemHeights[ia] = String(itemHeights[ia]);
			// Removes CSS "px" in String to prep it to be a number
            itemHeights[ia] = itemHeights[ia].replace("px", "");
			// Makes sure there is no white space in the string
            itemHeights[ia] = itemHeights[ia].trim();
			// Sets the Height to a Number
            itemHeights[ia] = Number(itemHeights[ia]);
        }
        // Reorder Array so Highest Height is First
        itemHeights = itemHeights.sort(function(a, b){return b-a});
        // Get First Key in maxHeight Array and convert to string for CSS
        for (ib = 0; ib < heightFixItems.length; ib++){
            heightFixItems[ib].style.height = itemHeights[0] + "px";
			if (jQuery('.height-fix-bottom',heightFixItems[ib])){
				jQuery('.height-fix-bottom',heightFixItems[ib]).css("position", "absolute");
				jQuery('.height-fix-bottom',heightFixItems[ib]).css("bottom", "0px");
			}
        }
    }
}

function defaultHeights(){
	// Finds all Height Fix Items for all Containers
	var itemHeights = jQuery('.height-fix-item');
	for(i = 0; i < itemHeights.length; i++){
		// Resets Heights to Initial Values
		itemHeights[i].style.height = "initial";
	}
}

function heightFixAgain(){
	// Clears the Height Fix
	defaultHeights();
	// Reruns the Height Fix to recaluclate new heights
	heightFix();
}

function squareUp(){
	var makeSquare = jQuery('.aspect-square');
	makeSquare.each(function() {
        var getWidth = this.width();
		var makeHeight = getWidth;
		this.height(makeHeight);
    });
}
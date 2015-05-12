jQuery(document).ready(heightFix);
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
			heightFixItems[ib].style.display = "flex";
        }
		jQuery('.height-fix-bottom').css("align-self", "flex-bottom");
    }
}
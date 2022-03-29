// HIDING AND REVEALING CONTENT WITH JAVASCRIPT
// create a variable for the preference (how many element to keep) 
var elNum = 5;
// select all the element of main
var allMain = document.querySelectorAll('main > *');

// PART 1 - creating the link
// manipulate the DOM tree
var link = document.createElement('a'); // create the <a> element

link.setAttribute('href', '#'); // add the href attribute to the <a>
link.setAttribute('class', 'more-link'); // add a class to the <a>
link.textContent = 'Read More'; // add the read more text (can use innerHTML as well)

// target and append the element
allMain[elNum-1].appendChild(link);


// PART 2 - selecting the content and hide it on page load
// return a number of number of node list
// using variable for more flexibility
for (var i = elNum; i < allMain.length; i++) {
	allMain[i].style.display = 'none';
}

// PART 3 - a function to toggle content visibility
//add an event listener 
link.addEventListener('click', visibility);

// create a function for toggle the "show more"
// grab the text "read more" to determind is the content hidden or not
function visibility(e) {
	e.preventDefault(); // prevent the default link function

	// decision making 
	if (link.firstChild.nodeValue === 'Read More'){
		// remove the style attribute
		for (var i = elNum; i < allMain.length; i++) {
			allMain[i].removeAttribute('style');
		}
		link.firstChild.nodeValue = 'Read Less';
	} else {
		// add the display none
		for (var i = elNum; i < allMain.length; i++) {
			allMain[i].style.display = 'none';
		}
		
		link.firstChild.nodeValue = 'Read More';
	}
}
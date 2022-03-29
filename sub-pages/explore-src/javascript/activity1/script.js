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

	var linkText = link.firstChild.nodeValue; // text node is the first child node for any link
	// create a variable for check is it hidden
	var elDisplay;

	// decision making 
	if (linkText === 'Read More'){
		elDisplay = 'block';
		linkText = 'Read Less';
	} else {
		elDisplay = 'none';
		linkText = 'Read More';
	}

	// change the bit according to the if statement
	for (var i = elNum; i < allMain.length; i++) {
		allMain[i].style.display = elDisplay;
	}

	// update the link text
	link.textContent = linkText;
}
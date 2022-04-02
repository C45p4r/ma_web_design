// HIDING AND REVEALING CONTENT WITH JAVASCRIPT
// create a variable for the preference (how many element to keep) 
var elNum = 2;
// select all the element of main
var allText = document.querySelectorAll('div.text-wrap-more > *');
// PART 1 - creating the link
// manipulate the DOM tree
var link = document.createElement('a'); // create the <a> element

link.setAttribute('href', '#'); // add the href attribute to the <a>
link.setAttribute('class', 'more-link'); // add a class to the <a>
link.textContent = 'Read More'; // add the read more text (can use innerHTML as well)

// target and append the element
allText[elNum-1].appendChild(link);

// PART 2 - selecting the content and hide it on page load
// return a number of number of node list
// using variable for more flexibility
for (var i = elNum; i < allText.length; i++) {
	allText[i].style.display = 'none';
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
		for (var i = elNum; i < allText.length; i++) {
			allText[i].removeAttribute('style');
		}
		link.firstChild.nodeValue = 'Read Less';
	} else {
		// add the display none
		for (var i = elNum; i < allText.length; i++) {
			allText[i].style.display = 'none';
		}
		link.firstChild.nodeValue = 'Read More';
	}
}

//greeting
var dateTime = new Date();
var n = dateTime.getDay();
var weekday = new Array(7);
weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturady";
var hours = dateTime.getHours();
var greeting;
var opening;
var action;
var msg;
// print something accorrding to weekday or weekend
if(weekday[n] === "Saturady" || weekday[n] === "Sunday"){
	if (hours > 17) {
		greeting = "evening";
		opening = "closed";
		action = "do visit us tomorrow";
	} else if (hours > 12) {
		greeting = "afternoon";
		opening = "open";
		action = "come before 5pm for the best cut";
	} else if (hours > 10){
		greeting = "morning";
		opening = "open";
		action = "come and choose the best cut";
	} else {
		greeting = "morning";
		opening = "closed";
		action = "visit us today after 10am";
	}	
}else{
	if (hours > 18) {
		greeting = "evening";
		opening = "closed";
		action = "do visit us tomorrow";
	} else if (hours > 12) {
		greeting = "afternoon";
		opening = "open";
		action = "come before 6pm for the best cut";
	} else if (hours > 8){
		greeting = "morning";
		opening = "open";
		action = "come and choose the best cut";
	} else {
		greeting = "morning";
		opening = "closed";
		action = "visit us today after 8am";
	}
}

var sub = document.getElementById('sub');
msg = "Good " + greeting + ", we are now " + opening + " please " + action;
sub.innerHTML = msg;

// document.getElementById('sub').innerHTML = "I have changed!";
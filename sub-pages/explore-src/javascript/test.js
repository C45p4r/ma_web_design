/* /ᐠ.ꞈ.ᐟ\\\\\ / ===================================

		simple functions 

================================================= */
var result = document.getElementById('container');

// 1. simple getTime function re: 19Jan morning section
function dateTime1(){
	var dateTime = new Date();
	var hours = dateTime.getHours();
	var minutes = dateTime.getMinutes();
	var msg = "The time is: " + hours + ":" + minutes;
	result.innerHTML = msg;
}

// 2. get day of the week
function dateTime2(){

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

	// print something different on Wednesday
	var msg;
	if(weekday[n] === "Wednesday"){
		msg = "<p>YAY! Today is " + weekday[n] + ", it's a Greenwich day.</p>";
	}else{
		msg = "<p>Today is " + weekday[n] + ", just an ordinary day.</p>";
	}
	result.innerHTML = msg;
}

// 3. 
function dateTime3(){
	var dateTime = new Date(); // creating a new date object & assign to a new variable
	var day = dateTime.getDay(); // using the getDate method to find the number of day
	var msg; // creating a variable for future use
	if (day < 3) {
		msg = "Wednesday is " + (3 - day) + " day(s) away.";
	}else if (day == 3) {
		msg = "It's Wednesday";
	}else {
		msg = "You will have to wait" + (10 - day) + "for next Wednesday.";
	}
	result.innerHTML = msg;
}

function addElement1(){
	result.innerHTML = "appended an ul";
	var ul = document.createElement('ul');	// create new ul element
	result.appendChild(ul);	//append the element
	ul.id = "testul";

	// adding test js functions names as array variable
	var test = [
		"array1",
		"array2",
		"array3",
		"array4"
	];

	// creating for loop to display all the names in the array as <li>
	for (i = 0; i < test.length; i++) {
		var li = document.createElement('li');	// create new li element
		li.innerHTML = test[i];	// assigning text to li using array value
		ul.appendChild(li);	// append array li to ul
	}

	// disabled the onclick trigger 
	document.getElementById('addElement1').onclick = null;
}

function addEvent(){
	result.innerHTML = "add class";
	result.addEventListener('click', addClass);
}

function addClass(){
	result.className = "highlight";
}

/* /ᐠ.ꞈ.ᐟ\\\\\ / ===================================

		Other functions 

================================================= */

function swapClass(){
	if (element.hasAttribute('class')){
		element.removeAttribute('class');
	}
	element.className = 'highlight';
}

/* /ᐠ.ꞈ.ᐟ\\\\\ / ===================================

		Individual declaration 

================================================= */

/*

1. different ways assigning elements to variables

select by tag name 
var paragraph = document.getElementsByTagName('p')[0]; // [0] = first <p>

//select by the unique id
var time = document.getElementById('time');

// accept all CSS selector type
var body = document.querySelector('body'); // can use CSS selectors 


// 2. manipulating HTML elements

// innerHTML
var newText = document.getElementsByTagName('p')[1];
newText.innerHTML = "This is new content";

// set attribute to element
var body = document.querySelector('body');
body.setAttribute('class', 'newAttribute');

// 3. simple heelo world
document.write("<p>Hello World!</p>");

*/
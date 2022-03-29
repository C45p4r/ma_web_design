/* /ᐠ.ꞈ.ᐟ\\\\\ / ===================================

		add content to the empty page 

================================================= */
var ul = document.createElement('ul');	// create new ul element
var parent = document.getElementById('container');	// select parent element
parent.appendChild(ul);	//append the element
ul.id = "testFucs";

// adding test js functions names as array variable
var test = [
	"testing",
	"dateTime1",
	"dateTime2",
	"dateTime3"
];

// creating for loop to display all the names in the array as <li>
for (i = 0; i < test.length; i++) {
	var li = document.createElement('li');	// create new li element
	li.innerHTML = test[i];	// assigning text to li using array value
	ul.appendChild(li);	// append array li to ul
}


/* /ᐠ.ꞈ.ᐟ\\\\\ / ===================================

		simple functions 

================================================= */

function testing(){
	document.querySelector('h1').innerHTML = "successful!";
}

// 1. simple getTime function re: 19Jan morning section
function dateTime1(){
	var dateTime = new Date();
	var hours = dateTime.getHours();
	var minutes = dateTime.getMinutes();
	var msg = "The time is: " + hours + ":" + minutes;
	var el = document.getElementById('time1');
	el.innerHTML = msg;
}

// 2. get day of the week
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
if(weekday[n] === "Wednesday"){
	document.write("<p>YAY! Today is " + weekday[n] + ", it's a Greenwich day.</p>");
}else{
	document.write("<p>Today is " + weekday[n] + ", just an ordinary day.</p>");
}


// 3. 

var dateTime = new Date(); // creating a new date object & assign to a new variable
var day = dateTime.getDay(); // using the getDate method to find the number of day
var el = document.getElementById('message'); // select the element with id of 'message'
var msg; // creating a variable for future use
if (day < 3) {
	msg = "Wednesday is " + (3 - day) + " day(s) away.";
}else if (day == 3) {
	msg = "It's Wednesday";
}else {
	msg = "You will have to wait" + (10 - day) + "for next Wednesday.";
}
el.innerHTML = msg;


/* /ᐠ.ꞈ.ᐟ\\\\\ / ===================================

		Individual declaration 

================================================= */

// 1. different ways assigning elements to variables

// select by tag name 
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
// ORIGINAL SCRIPT TO GIVE CONTEXTUAL WELCOME MESSAGE
// body as an global variable
var body = document.querySelector ('body');

// run only if there is a element with the id "welcome"
if (document.getElementById('welcome') !== null) {
	var el = document.getElementById('welcome');
	var dateTime = new Date();
	var hours = dateTime.getHours();
	var greeting;
	if (hours > 16) {
		greeting = "evening";
	}else if (hours > 11) {
		greeting = "afternoon";
	}else{
		greeting = "morning";
	}
	greeting = "Good " + greeting + ", welcome to the tutorial";
	el.innerHTML = greeting;
}
// SETTING THE BACKGROUND COLOUR
// PART 1: ADD THE HTML WE NEED
// Add an unordered list and give it the id = background
var ul = document.createElement('ul');
var position = document.getElementsByTagName('main')[0];
position.prepend(ul);
ul.id = 'background';

// Create and append five list items to the list
var i = 0;
do {
	var li = document.createElement('li');
	ul.appendChild(li);
	i += 1;
} while (i < 5);

// Select the 5th <li> and add some text
var note = document.querySelector('#background li:nth-child(5)');
note.innerHTML = "Select a background colour:";

// PART 2: ADD EVENT LISTENERS TO THE FIRST FOUR LIST ITEMS
// In each case, select the element and define the fuction to run
var purple = document.querySelector('#background li:nth-child(4)');
purple.onclick = purpleBackground;

var blue = document.querySelector('#background li:nth-child(3)');
blue.onclick = blueBackground;

var mustard = document.querySelector('#background li:nth-child(2)');
mustard.onclick = mustardBackground;

var rust = document.querySelector('#background li:nth-child(1)');
rust.onclick = rustBackground;

// PART 3: BUILD THE FUNCTIONS TO RUN ONCLICK
function purpleBackground(){
	if (body.hasAttribute('class')) {
		body.removeAttribute('class');
	}
	body.className = 'purple';
	localStorage.setItem('background','purple');
}

function blueBackground(){
	if (body.hasAttribute('class')) {
		body.removeAttribute('class');
	}
	body.className = 'blue';
	localStorage.setItem('background','blue');
}

function mustardBackground(){
	if (body.hasAttribute('class')) {
		body.removeAttribute('class');
	}
	body.className = 'mustard';
	localStorage.setItem('background','mustard');
}

function rustBackground(){
	if (body.hasAttribute('class')) {
		body.removeAttribute('class');
	}
	localStorage.removeItem('background');
}

// PART 4: GET BACKGROUND VALUE FORM LOCAL STORAGE AND SET CLASS ACCORDINGLY
// check if there is a key and value pair in the local storage
// it only works if it's online, because of how local storage works
if (localStorage.getItem('background') !== null) {
	body.removeAttribute('class');
	var colour = localStorage.getItem('background');
	body.className = colour;
}
// ORIGINAL SCRIPT: BODY CLASS CHANGE COMMENTED OUT
var dateTime = new Date();
var hours = dateTime.getHours();
var greeting;
var body = document.querySelector ('body');
var el = document.getElementById('welcome');
if (hours > 16) {
	greeting = "evening";
}else if (hours > 11) {
	greeting = "afternoon";
}else{
	greeting = "morning";
}
// body.setAttribute ('class', greeting);
greeting = "Good " + greeting + ", welcome to the tutorial";
el.innerHTML = greeting;


// PROGRESSIVE ENHANCEMENT
// PART 1: ADD THE HTML WE NEED
// Add an unordered list and give it a id = backgrgound

// create the element
var ul = document.createElement('ul');

// insert the element into the DOM
// defind the location
// the getElementByTagName method will create a nod list there for [0] is needed
var position = document.getElementsByTagName('main')[0]; // there will only be one <main>

// add the ul to the main element
position.prepend(ul);

// add the id to the ul (this method will replace/add)
ul.id = "background";

// create and append 5 li to the ul
// append to the ul as the last child (can use append* as well but it doesn't support older browser)
// do while loop
var i = 0;
do {
	var li = document.createElement('li');
	ul.appendChild(li);
	i++; // or i += 1;
} while (i < 5);

// select the 5th li (the most left) and add the text
var note = document.querySelector('#background li:nth-child(5)');

//add the text to the note as innerHTML
note.innerHTML = "Select a bacjground colour:";


// PART 2: ADD EVENT HANDLER TO THE FIRST 4 LIST ITEMS
// In this case, select the element and define the function to run on click

//select all the li by colour
var purple 	= document.querySelector('#background li:nth-child(4)');
var blue 	= document.querySelector('#background li:nth-child(3)');
var mustard = document.querySelector('#background li:nth-child(2)');
var rust 	= document.querySelector('#background li:nth-child(1)');

// create the onclick event for each color
purple.onclick 	= purpleBackground;
blue.onclick 	= blueBackground;
mustard.onclick = mustardBackground;
rust.onclick 	= rustBackground;

// PART 3: BUILD THE FUNCTION TO RUN ON CLICK
function purpleBackground(){
	/*
	if (body.hasAttribute('class')) {
		body.removeAttribute('class');
	}
	body.className = 'purple';
	*/
	body.setAttribute('class', 'purple');
}
function blueBackground(){
	body.setAttribute('class', 'blue');
}
function mustardBackground(){
	body.setAttribute('class', 'mustard');
}
function rustBackground(){
	body.setAttribute('class', 'rust');
}
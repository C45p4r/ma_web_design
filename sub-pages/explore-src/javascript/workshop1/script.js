// A SCRIPT TO CHANGE A CIRCLE TO A SQUARE

// select all the elements that will be used 
// asign them to a variables for future use 
var div = document.querySelector('div:first-of-type'); // node reference for the div element
var buttons = document.querySelectorAll('button'); // select all the buttons as node list

// add event listener to both buttons
buttons[0].addEventListener('click', square);
buttons[1].addEventListener('click', circle);

// create functions
function square() {
	div.setAttribute('class', 'square');
}
function circle() {
	div.setAttribute('class', 'circle');
}
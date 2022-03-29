// =======================================
// A SCRIPT TO CHANGE A CIRCLE TO A SQUARE

// Select all the elements that will be used 
// asign them to a variables for future use 
var div = document.querySelector('div:first-of-type'); // node reference for the div element
var buttons = document.querySelectorAll('button'); // select all the buttons as node list

// Add event listener to both buttons
buttons[0].addEventListener('click', square);
buttons[1].addEventListener('click', circle);

// Create functions
function square() {
	div.setAttribute('class', 'square');
}
function circle() {
	div.setAttribute('class', 'circle');
}

// =======================================
// GRACEFUL DEGRADATION 

/*
// Adding an warning message to help user understand what's the situation (HTML)
// Remove the warning that JavaScript is unavailable
var body = document.querySelector('body'); // select the parent element for the removeChild method
var warning = document.querySelector('div:first-of-type + p'); // select the warning message

body.removeChild(warning); // Target and remove the message
*/

// Using html to achieve the same goal by using the <noscript> tag

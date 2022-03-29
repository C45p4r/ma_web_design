// A SCRIPT TO HIGHLIGHT TODAY'S OPENING TIMES

// GET THE DAY NUMBER
// get the day number from a new date object
// assign to a variable
var today = new Date().getDay();

// MATCH DAY NUMBER WITH NODE LIST INDEX
// Sunday is the first JavaScript day but it's
// the last day in our list so change 0 to 6
// and decrement all other day numbers so they
// match with the node list indexes
if (today === 0){
	today = 6;
}else{
	today--;
}

// SELECT ALL DTs & DDs
// select all the definition term elements
// assign to a variable
var dts = document.querySelectorAll('dt');
// select all the definition data elements
// assign to a variable
var dds = document.querySelectorAll('dd');

// ADD A CLASS TO TODAYS DT & DD
// use the day number (today variable) to add
// a class to the appropriate dt and dd elements
// so they can be styled in CSS (.today)
dts[today].className = 'today';
dds[today].className = 'today';
// node lists begin at 0, so day 1 in our list
// (Monday) will be node 0
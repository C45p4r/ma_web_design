// all the parts needed for the work
var dateTime = new Date();
var hours = dateTime.getHours();
var greeting;
var body = document.querySelector ('body');
var el = document.getElementById('welcome');


// decision making part
if (hours > 16) {
	greeting = "evening";
}else if (hours > 11) {
	greeting = "afternoon";
}else{
	greeting = "morning";
}


// achieving our goal

// change bg-color by chaning attribute
body.setAttribute ('class', greeting);

// greeting text
greeting = "Good " + greeting + ", welcome to the tutorial";
el.innerHTML = greeting;
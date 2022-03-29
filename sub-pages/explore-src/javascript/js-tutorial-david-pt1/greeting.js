var dateTime = new Date();
var hours = dateTime.getHours();
var greeting;
if (hours > 16) {
	greeting = "evening";
} else if (hours > 11) {
	greeting = "afternoon";
} else {
	greeting = "morning";
}
var el = document.getElementById ('welcome');
greeting = "Good " + greeting + ", welcome to the tutorial";
el.innerHTML = greeting;
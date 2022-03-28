function checkTime1(){
	var dateTime = new Date();
	var hours = dateTime.getHours();
	var minutes = dateTime.getMinutes();
	var msg = "The time is: " + hours + ":" + minutes;
	var el = document.getElementById('time');
	el.innerHTML = msg;
}
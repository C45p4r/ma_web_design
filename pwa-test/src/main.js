if ("serviceWorker" in navigator) {
	navigator.serviceWorker.register("sw.js").then(registration => {
		console.log("SW Registrered :)");
		console.log(registration);
	}).catch(error => {
		console.log("SW Registration failed Xd");
		console.log(error);
	});
} 
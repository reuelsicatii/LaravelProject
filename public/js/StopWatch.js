// Object -- Time
// ================================
let time = {
	start : 0,
	stop : 0,
	duration : 0
};

// Class -- Watch
// ================================
function Watch() {

	// Start method
	this.start = function() {
		time.start = new Date();
		console.log("Starting STOPWATCH at " + time.start.getTime());
		console.log("Starting STOPWATCH at MONTH: " + time.start.getMonth());
		console.log("Starting STOPWATCH at DATE: " + time.start.getDate());
		console.log("Starting STOPWATCH at YEAR: " + time.start.getFullYear());

		var month = time.start.getMonth();
		var day = time.start.getDate();
		var year = time.start.getFullYear();
		return month + "/" + day + "/" + year;
	};

	// Stop method
	this.stop = function() {
		time.stop = new Date();
		console.log("Stoping STOPWATCH at " + time.stop.getTime());
		console.log("Stoping STOPWATCH at MONTH: " + time.stop.getMonth());
		console.log("Stoping STOPWATCH at DATE: " + time.stop.getDate());
		console.log("Stoping STOPWATCH at YEAR: " + time.stop.getFullYear());

		var month = time.stop.getMonth();
		var day = time.stop.getDate();
		var year = time.stop.getFullYear();
		return month + "/" + day + "/" + year;
	};

	// Duration method
	this.duration = function() {
		time.duration = time.duration + ((time.stop - time.start) / 1000);
		console.log("Duration: " + time.duration);
		return time.duration + " seconds";
	};

	// Reset method
	this.reset = function() {
		console.log("Resetting STOPWATCH");
		time.start = 0;
		time.stop = 0;
		time.duration = 0;
		
		return "Reseting to 0.00 seconds";
	};
}

$(document).ready(function() {
	$('#button2').click(function() {
		alert('External jQuery Tutorial')
	});
});

// Displaying StopWatch on Alert

let StopWatch = new Watch();

$(document).ready(function() {
	$('#Start').click(function() {
		alert(StopWatch.start())
	});
});

$(document).ready(function() {
	$('#Stop').click(function() {
		alert(StopWatch.stop())
	});
});

$(document).ready(function() {
	$('#Reset').click(function() {
		alert(StopWatch.duration())
	});
});

$(document).ready(function() {
	$('#Duration').click(function() {
		alert(StopWatch.duration())
	});
});

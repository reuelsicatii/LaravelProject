<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JS/jQ Tutorial - StopWatch</title>

<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="http://app.laravel/js/jquery-3.4.1.js"></script>


</head>

<body>

	<div class="container">
		<div class="row d-flex justify-content-center text-center my-5">
			<h1 style="width: 100%">JQUERY SOURCE SCRIPT</h1>
			<br /> <input type="button" id="button1" class="btn btn-primary mx-5"
				name="InlineJQuery" value="INLINE JQUERY"></input> <input
				type="button" id="button2" class="btn btn-danger mx-5"
				name="ExternalJQuery" value="EXTERNAL JQUERY"></input>
		</div>

		<div class="row d-flex justify-content-center text-center my-5">
			<h1 style="width: 100%">STOP WATCH</h1>
			<input type="button" id="Start" class="btn btn-success mx-2"
				name="Start" value="Start"></input> 				
			<input type="button" id="Stop" class="btn btn-danger mx-2" 
				name="Stop" value="Stop"></input> 			
			<input type="button" id="Reset" class="btn btn-secondary mx-2" 
				name="Reset" value="Reset"></input> 
			<input type="button" id="Duration" class="btn btn-primary mx-2" 
				name="Duration" value="Duration"></input>
		</div>
	</div>




	<!--   Inline Script -->
	<script type="text/javascript">
    $(document).ready(function() {
      $('#button1').click(function() {
        alert('Inline jQuery Tutorial')
      });
    });
  </script>




	<script src="http://app.laravel/js/StopWatch.js"></script>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>


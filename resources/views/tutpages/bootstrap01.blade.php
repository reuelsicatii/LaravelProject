<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CSS Tutorial - Bootstrap01</title>
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="http://app.laravel/css/bootstrap_xx.css" rel="stylesheet">


</head>

<body>

	<div class="container">
		<canvas class="my-4 chartjs-render-monitor" id="myChart" width="762"
			height="321" style="display: block; height: 257px; width: 610px;"></canvas>
	</div>
	<div class="container-fluid"></div>


	<div class="container">
		<!--Row with two equal columns-->
		<div class="row">
			<div class="col-sm-10">
				Column one - A

				<div class="row">
					<div class="col">Column - List Header 1</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="col">
							Order 01
							<ul>
								<li>Sample 01</li>
								<li>Sample 01</li>
								<li>Sample 01</li>
							</ul>
						</div>
						<div class="col">Order 01</div>
						<div class="col">Order 01</div>
					</div>
				</div>
				<div class="col">
					Column one - B
					<div class="col d-flex justify-content-around">
						Row - List Header 2
						<div class="row">
							Order 01
							<ul>
								<li>Sample 01</li>
								<li>Sample 01</li>
								<li>Sample 01</li>
							</ul>
						</div>
						<div class="row">Order 01</div>
						<div class="row">Order 01</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2">Column two</div>
		</div>

		<!--Row with three equal columns-->
		<div class="row">
			<div class="col">Column one</div>
			<div class="col">Column two</div>
			<div class="col">Column three</div>
		</div>
	</div>

	<div class="container">
		<div class="card-deck mb-3 text-center">
			<div class="card mb-4 box-shadow">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal">Free</h4>
				</div>
				<div class="card-body">
					<h1 class="card-title pricing-card-title">
						$0 <small class="text-muted">/ mo</small>
					</h1>
					<ul class="list-unstyled mt-3 mb-4">
						<li>10 users included</li>
						<li>2 GB of storage</li>
						<li>Email support</li>
						<li>Help center access</li>
					</ul>
					<button type="button"
						class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
				</div>
			</div>
			<div class="card mb-4 box-shadow">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal">Pro</h4>
				</div>
				<div class="card-body">
					<h1 class="card-title pricing-card-title">
						$15 <small class="text-muted">/ mo</small>
					</h1>
					<ul class="list-unstyled mt-3 mb-4">
						<li>20 users included</li>
						<li>10 GB of storage</li>
						<li>Priority email support</li>
						<li>Help center access</li>
					</ul>
					<button type="button" class="btn btn-lg btn-block btn-primary">Get
						started</button>
				</div>
			</div>
			<div class="card mb-4 box-shadow">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal">Enterprise</h4>
				</div>
				<div class="card-body">
					<h1 class="card-title pricing-card-title">
						$29 <small class="text-muted">/ mo</small>
					</h1>
					<ul class="list-unstyled mt-3 mb-4">
						<li>30 users included</li>
						<li>15 GB of storage</li>
						<li>Phone and email support</li>
						<li>Help center access</li>
					</ul>
					<button type="button" class="btn btn-lg btn-block btn-primary">Contact
						us</button>
				</div>
			</div>
		</div>
	</div>

	<div class="feature-row feature-row">
		<div class="feature-row">
			<div class="feature-row__item">

				<svg class="placeholder-svg" xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 525.5 525.5">
					<path
						d="M324.5 212.7H203c-1.6 0-2.8 1.3-2.8 2.8V308c0 1.6 1.3 2.8 2.8 2.8h121.6c1.6 0 2.8-1.3 2.8-2.8v-92.5c0-1.6-1.3-2.8-2.9-2.8zm1.1 95.3c0 .6-.5 1.1-1.1 1.1H203c-.6 0-1.1-.5-1.1-1.1v-92.5c0-.6.5-1.1 1.1-1.1h121.6c.6 0 1.1.5 1.1 1.1V308z"></path>
					<path
						d="M210.4 299.5H240v.1s.1 0 .2-.1h75.2v-76.2h-105v76.2zm1.8-7.2l20-20c1.6-1.6 3.8-2.5 6.1-2.5s4.5.9 6.1 2.5l1.5 1.5 16.8 16.8c-12.9 3.3-20.7 6.3-22.8 7.2h-27.7v-5.5zm101.5-10.1c-20.1 1.7-36.7 4.8-49.1 7.9l-16.9-16.9 26.3-26.3c1.6-1.6 3.8-2.5 6.1-2.5s4.5.9 6.1 2.5l27.5 27.5v7.8zm-68.9 15.5c9.7-3.5 33.9-10.9 68.9-13.8v13.8h-68.9zm68.9-72.7v46.8l-26.2-26.2c-1.9-1.9-4.5-3-7.3-3s-5.4 1.1-7.3 3l-26.3 26.3-.9-.9c-1.9-1.9-4.5-3-7.3-3s-5.4 1.1-7.3 3l-18.8 18.8V225h101.4z"></path>
					<path
						d="M232.8 254c4.6 0 8.3-3.7 8.3-8.3s-3.7-8.3-8.3-8.3-8.3 3.7-8.3 8.3 3.7 8.3 8.3 8.3zm0-14.9c3.6 0 6.6 2.9 6.6 6.6s-2.9 6.6-6.6 6.6-6.6-2.9-6.6-6.6 3-6.6 6.6-6.6z"></path></svg>

			</div>



			<div
				class="feature-row__item feature-row__text feature-row__text--left">

				<h2>Image with text</h2>
				<div class="rte featured-row__subtext">
					<p>Pair large text with an image to give focus to your chosen
						product, collection, or blog post. Add details on availability,
						style, or even provide a review.</p>
				</div>


			</div>


		</div>
	</div>






	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>


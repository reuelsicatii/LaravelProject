<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Checkout Form - Page</title>

<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-light">

	<div class="container">

		<!-- Bootstrap Icon - Centered -->
		<div class="row d-flex justify-content-center">
			<img class="my-5 rounded"
				src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg"
				alt="" width="200" height="200">
		</div>

		<!-- Content - Centered -->
		<div class="row d-flex justify-content-center text-center">
			<h2>Checkout form</h2>
			<p class="px-5">Below is an example form built entirely with
				Bootstrap's form controls. Each required form group has a validation
				state that can be triggered by attempting to submit the form without
				completing it.</p>
		</div>

		<!-- Main - Centered -->
		<div class="row">

			<div class="col-8">
				<form>
					<!-- Form Group - Row00 -->
					<div class="row">
						<h4>Billing address</h4>
					</div>

					<!-- Form Group - Row01 -->
					<div class="row flex-wrap">
						<div class="col pl-0">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp"> <small id="emailHelp"
									class="form-text text-muted">Please type your FirstName here.</small>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="exampleInputEmail1">Last Name</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp"> <small id="emailHelp"
									class="form-text text-muted">Please type your LastName here.</small>
							</div>
						</div>
					</div>

					<!-- Form Group - Row02 -->
					<div class="row">
						<div class="col pl-0">
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text">@</span>
								</div>
								<input type="text" class="form-control" id="username"
									placeholder="Username" required="">
								<div class="invalid-feedback" style="width: 100%;">Your username
									is required.</div>
							</div>
						</div>
					</div>


					<!-- Form Group - Row03 -->
					<div class="row">
						<div class="col pl-0">
							<div class="form-group">
								<label for="exampleInputEmail1">Email Address</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="you@axample.com"> <small
									id="emailHelp" class="form-text text-muted">Please type your
									Email Address here.</small>
							</div>
						</div>
					</div>

					<!-- Form Group - Row04 -->
					<div class="row">
						<div class="col pl-0">
							<div class="form-group">
								<label for="exampleInputEmail1">Address</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="1234 Main St"> <small
									id="emailHelp" class="form-text text-muted">Please type your
									Address here.</small>
							</div>
						</div>
					</div>

					<!-- Form Group - Row05 -->
					<div class="row">
						<div class="col pl-0">
							<div class="form-group">
								<label for="exampleInputEmail1">Address 2 (Optional)</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="Apartment or Suite">
								<small id="emailHelp" class="form-text text-muted">Please type
									your Address 2 here.</small>
							</div>
						</div>
					</div>

					<!-- Form Group - Row06 -->
					<div class="row flex-wrap">

						<div class="col pl-0">
							<div class="form-group">
								<label for="exampleInputEmail1">Country</label> <select
									class="custom-select d-block w-100" id="country" required="">
									<option value="">Choose...</option>
									<option>United States</option>
									<option>Philippines</option>
								</select> <small id="emailHelp" class="form-text text-muted">Please
									type your Country here.</small>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="exampleInputEmail1">State</label> <select
									class="custom-select d-block w-100" id="country" required="">
									<option value="">Choose...</option>
									<option>California</option>
									<option>Makati</option>
								</select> <small id="emailHelp" class="form-text text-muted">Please
									type your State here.</small>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="exampleInputEmail1">Zip Code</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp"> <small id="emailHelp"
									class="form-text text-muted">Please type your Zip Code here.</small>
							</div>
						</div>
					</div>

					<!-- Form Group - Row07 -->
					<div class="row border-top border-bottom pt-2">
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input"
								id="exampleCheck1"> <label class="form-check-label"
								for="exampleCheck1">Shipping address is the same as my billing
								address</label> <br /> <input type="checkbox"
								class="form-check-input" id="exampleCheck1"> <label
								class="form-check-label" for="exampleCheck1">Save this
								information for next time</label>
						</div>
					</div>

					<!-- Form Group - Row08 -->
					<div class="row pt-3">
						<h4>Payment</h4>
					</div>

					<!-- Form Group - Row09 -->
					<div class="row">
						<div class="form-group form-check pl-0">
							<input type="radio"
								aria-label="Radio button for following text input"> <label
								class="form-check-label" for="exampleCheck1">Credit card</label>
							<br /> <input type="radio"
								aria-label="Radio button for following text input"> <label
								class="form-check-label" for="exampleCheck1">Debit card</label>
							<br /> <input type="radio"
								aria-label="Radio button for following text input"> <label
								class="form-check-label" for="exampleCheck1">Paypal</label>
						</div>
					</div>

					<!-- Form Group - Row10 -->
					<div class="row">
						<div class="col pl-0">
							<div class="form-group">
								<label for="exampleInputEmail1">Name of Card</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp"> <small id="emailHelp"
									class="form-text text-muted">Full name as displayed on card.</small>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="exampleInputEmail1">Credit card number</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp">
							</div>
						</div>
					</div>

					<!-- Form Group - Row11 -->
					<div class="row">
						<div class="col-5 pl-0">
							<div class="form-group">
								<label for="exampleInputEmail1">Expiration</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="MM/YYYY">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group">
								<label for="exampleInputEmail1">CVV</label> <input type="email"
									class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="123">
							</div>
						</div>
					</div>

					<!-- Form Group - Row12 -->
					<div class="row border-top pt-4">
						<button type="submit" class="btn btn-primary btn-lg btn-block">Continue
							to checkout</button>
					</div>

				</form>
			</div>


			<div class="col-4">

				<!-- Cart Group - Row00 -->
				<div class="row d-flex justify-content-between">
					<h4>
						<span class="text-muted">Your cart</span>
					</h4>
					<h4>
						<span class="badge badge-secondary badge-pill">3</span>
					</h4>
				</div>

				<!-- Cart Group - Row01 -->
				<div class="row">
					<div class="col px-0">
						<ul class="list-group mb-3">
							<li
								class="list-group-item d-flex justify-content-between lh-condensed">
								<div>
									<h6 class="my-0">Product name</h6>
									<small class="text-muted">Brief description</small>
								</div> 
								<span class="text-muted">$12</span>
							</li>
							<li
								class="list-group-item d-flex justify-content-between lh-condensed">
								<div>
									<h6 class="my-0">Second product</h6>
									<small class="text-muted">Brief description</small>
								</div> <span class="text-muted">$8</span>
							</li>
							<li
								class="list-group-item d-flex justify-content-between lh-condensed">
								<div>
									<h6 class="my-0">Third item</h6>
									<small class="text-muted">Brief description</small>
								</div> <span class="text-muted">$5</span>
							</li>
							<li
								class="list-group-item d-flex justify-content-between bg-light">
								<div class="text-success">
									<h6 class="my-0">Promo code</h6>
									<small>EXAMPLECODE</small>
								</div> <span class="text-success">-$5</span>
							</li>
							<li class="list-group-item d-flex justify-content-between"><span>Total
									(USD)</span> <strong>$20</strong></li>
						</ul>

						<form class="card p-2">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Promo code">
								<div class="input-group-append">
									<button type="submit" class="btn btn-secondary">Redeem</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer - Centered -->
		<div class="row d-flex justify-content-center text-center">
			<footer class="my-5 pt-5 text-muted text-center text-small">
				<p class="mb-1">© 2017-2018 Company Name</p>
				<ul class="list-inline">
					<li class="list-inline-item"><a href="#">Privacy</a></li>
					<li class="list-inline-item"><a href="#">Terms</a></li>
					<li class="list-inline-item"><a href="#">Support</a></li>
				</ul>
			</footer>
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
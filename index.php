<?php include 'header.php' ?>
<section class="Banner">
	<div id="demo" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<!-- <ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul> -->

		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/images/banner1.jpg" alt="Banner Image" />
			</div>
			<!-- <div class="carousel-item">
				<img src="assets/images/banner2.jpg" alt="Banner Image" />
			</div> -->
			<div class="OnBannerText">
				<div class="container">
					<div class="BannerText">
						<h3>Lorem ipsum dolor sit amet consectetur </h3>
						<div class="row">
							<div class="col-md-4">
								<div class="BannerSingleBox">
									<h2>1</h2>
									<h4>ENTER DEBTS</h4>
									<p>We'll calculate how long it would take to pay off and the interest you would pay.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="BannerSingleBox">
									<h2>2</h2>
									<h4>RUN THE ILLUSTRATION</h4>
									<p>We will calculate when you can re-finance the debt using the policy chosen, then show you if there is a savings in interest and time.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="BannerSingleBox">
									<h2>3</h2>
									<h4>Review With Clients</h4>
									<p>You   can   show   the   information   on  the screen as a presentation, email, or print the illustration along with the supporting documents from the policy.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Left and right controls -->
		<!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a> -->

	</div>
</section>


<section class="Debt">
	<div class="container">
		<div class="Heading">
			<h4>Enter Each Debt</h4>
			<div class="Angle">
				<img src="assets/images/down-arrow.png" alt="Angle" />
			</div>
		</div>
		<div class="DebtSearch">
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="usr">Debt Type</label>
						<input type="text" class="form-control" placeholder="Debt Type" />
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="usr">Company</label>
						<input type="text" class="form-control" placeholder="Company" />
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="usr">Min Payment</label>
						<input type="text" class="form-control" placeholder="Min Payment" />
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="usr">Interest Rate</label>
						<input type="text" class="form-control" placeholder="Interest Rate" />
					</div>
				</div>
				<div class="col-md-12 text-center">
					<button type="button" class="btn">Add New</button>
					<a href="run-iul.php"><button type="button" class="btn">Run Illustration</button></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="Details">
	<div class="container">
		<div class="Heading">
			<h4>Details</h4>
			<div class="Angle">
				<img src="assets/images/down-arrow.png" alt="Angle" />
			</div>
		</div>
		<div class="Table">			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Debt Category</th>
						<th>Company</th>
						<th>Balance</th>
						<th>Interest Rate</th>
						<th>Min Payment</th>
						<th>Year   Funds Available for Payoff</th>
						<th>Years to Pay off</th>
						<th>Interest Saved</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Consumer Loan</td>
						<td>Chase</td>
						<td>$8,000.00</td>
						<td>22.00%</td>
						<td>$95.00</td>
						<td>1</td>
						<td>4.23</td>
						<td>$(2,505.57)</td>
					</tr>
					<tr>
						<td>Consumer Loan</td>
						<td>Chase</td>
						<td>$8,000.00</td>
						<td>22.00%</td>
						<td>$95.00</td>
						<td>1</td>
						<td>4.23</td>
						<td>$(2,505.57)</td>
					</tr>
					<tr>
						<td>Consumer Loan</td>
						<td>Chase</td>
						<td>$8,000.00</td>
						<td>22.00%</td>
						<td>$95.00</td>
						<td>1</td>
						<td>4.23</td>
						<td>$(2,505.57)</td>
					</tr>
					<tr>
						<td>Consumer Loan</td>
						<td>Chase</td>
						<td>$8,000.00</td>
						<td>22.00%</td>
						<td>$95.00</td>
						<td>1</td>
						<td>4.23</td>
						<td>$(2,505.57)</td>
					</tr>
					<tr>
						<td>Consumer Loan</td>
						<td>Chase</td>
						<td>$8,000.00</td>
						<td>22.00%</td>
						<td>$95.00</td>
						<td>1</td>
						<td>4.23</td>
						<td>$(2,505.57)</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
<?php include 'footer.php' ?>
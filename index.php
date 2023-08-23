<head>
	<link rel="stylesheet" href="dist/css1/card.css">
</head>

<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body>
	<div class="">
		<?php include 'includes/navbar.php'; ?>
		<div class="">
			<div class="">
				<!-- Main content -->
				<section class="">
					<div class="row">
						<?php
						if (isset($_SESSION['error'])) {
							echo "
	        					<div class='alert alert-danger'>
	        						" . $_SESSION['error'] . "
	        					</div>
	        				";
							unset($_SESSION['error']);
						}
						?>
						<!-- slideshow -->
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
								<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img src="Images1/18007751.png" alt="First slide">
								</div>
								<div class="item">
									<img src="Images1/banner.png" alt="Second slide">
								</div>
								<div class="item">
									<img src="Images1/sale.png" alt="Third slide">
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="fa fa-angle-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<span class="fa fa-angle-right"></span>
							</a>
						</div>
						<!-- slideshow -->
					</div>
				</section>
			</div>
		</div>

		<!-- products start -->
		<section>
			<div class="cardtitle1">
				<h2>Products</h2>
				<span class="text-decoration"></span>
			</div>
			<div class="container11">

				<div class="pcard1">
					<div class="pcardimage">
						<img src="Images1/products/dell.jpg" alt="">
						<div class="hearticon">
							<i class="fas fa-heart"></i>
						</div>
					</div>
					<div class="pcard-details">
						<span class="pcard_name">Dell Inspiron 3511</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, nemo?!</p>
						<div class="stars">
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star check"></span>
							<span class="fas fa-star check"></span>
						</div>
						<div class="pricecont">
							<button class="cardbtn btn">Add To Cart</button>
							<span class="price_num">₹65,100</span>
						</div>
					</div>
				</div>

				<div class="pcard1">
					<div class="pcardimage">
						<img src="Images1/products/boat.png" alt="">
						<div class="hearticon">
							<i class="fas fa-heart"></i>
						</div>
					</div>
					<div class="pcard-details">
						<span class="pcard_name">boAt Rockerz 450R</span>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, voluptas.!</p>
						<div class="stars">
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star check"></span>
							<span class="fas fa-star check"></span>
						</div>
						<div class="pricecont">
							<button class="cardbtn btn">Add To Cart</button>
							<span class="price_num">₹899</span>
						</div>
					</div>
				</div>

				<div class="pcard1">
					<div class="pcardimage">
						<img src="Images1/products/headphone1.png" alt="">
						<div class="hearticon">
							<i class="fas fa-heart"></i>
						</div>
					</div>
					<div class="pcard-details">
						<span class="pcard_name">Headphone Rockerz</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, nemo?!</p>
						<div class="stars">
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star check"></span>
							<span class="fas fa-star check"></span>
						</div>
						<div class="pricecont">
							<button class="cardbtn btn">Add To Cart</button>
							<span class="price_num">₹1299</span>
						</div>
					</div>
				</div>

				<div class="pcard1">
					<div class="pcardimage">
						<img src="Images1/products/wired-headphone6.png" alt="">
						<div class="hearticon">
							<i class="fas fa-heart"></i>
						</div>
					</div>
					<div class="pcard-details">
						<span class="pcard_name">Xiaomi Necklace</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, nemo?!</p>
						<div class="stars">
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star check"></span>
							<span class="fas fa-star check"></span>
						</div>
						<div class="pricecont">
							<button class="cardbtn btn">Add To Cart</button>
							<span class="price_num">₹2999</span>
						</div>
					</div>
				</div>

			</div>
			<div class="container11">

				<div class="pcard1">
					<div class="pcardimage">
						<img src="Images1/products/headphone3.png" alt="">
						<div class="hearticon">
							<i class="fas fa-heart"></i>
						</div>
					</div>
					<div class="pcard-details">
						<span class="pcard_name">Headphone wireless</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, nemo?!</p>
						<div class="stars">
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star check"></span>
							<span class="fas fa-star check"></span>
						</div>
						<div class="pricecont">
							<button class="cardbtn btn">Add To Cart</button>
							<span class="price_num">₹2199</span>
						</div>
					</div>
				</div>

				<div class="pcard1">
					<div class="pcardimage">
						<img src="Images1/products//wired-headphone.png" alt="">
						<div class="hearticon">
							<i class="fas fa-heart"></i>
						</div>
					</div>
					<div class="pcard-details">
						<span class="pcard_name">Boat Audio Probass</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, nemo?!</p>
						<div class="stars">
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star check"></span>
							<span class="fas fa-star check"></span>
						</div>
						<div class="pricecont">
							<button class="cardbtn btn">Add To Cart</button>
							<span class="price_num">₹1499</span>
						</div>
					</div>
				</div>

				<div class="pcard1">
					<div class="pcardimage">
						<img src="Images1/products/wired-headphone1.png" alt="">
						<div class="hearticon">
							<i class="fas fa-heart"></i>
						</div>
					</div>
					<div class="pcard-details">
						<span class="pcard_name">boAt Rockerz 255</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, nemo?!</p>
						<div class="stars">
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star check"></span>
							<span class="fas fa-star check"></span>
						</div>
						<div class="pricecont">
							<button class="cardbtn btn">Add To Cart</button>
							<span class="price_num">₹2999</span>
						</div>
					</div>
				</div>

				<div class="pcard1">
					<div class="pcardimage">
						<img src="Images1/products/wired-headphone5.png" alt="">
						<div class="hearticon">
							<i class="fas fa-heart"></i>
						</div>
					</div>
					<div class="pcard-details">
						<span class="pcard_name">boAt Rockerz 410</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, nemo?!</p>
						<div class="stars">
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star"></span>
							<span class="fas fa-star check"></span>
							<span class="fas fa-star check"></span>
						</div>
						<div class="pricecont">
							<button class="cardbtn btn">Add To Cart</button>
							<span class="price_num">₹1599</span>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- products End -->

		<?php include 'includes/footer.php'; ?>
	</div>

	<?php include 'includes/scripts.php'; ?>
</body>

</html>
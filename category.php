<head>
	<link rel="stylesheet" href="dist/css1/style1.css">
	<style>
		/* card */
		.pcard {
			margin: 20px;
			width: 100%;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
			height: 36rem;
		}

		.pcardimage {
			height: 19rem;
			border-radius: 10px;
		}

		.pcardimage img {
			width: 100%;
			height: 100%;
			mix-blend-mode: darken;
		}

		.pcardimage .hearticon {
			position: relative;
			margin: 10px;
			color: #DB2763;
			float: right;
			display: inline;
		}

		.pcard-details {
			margin-top: 10px;
		}

		.stars {
			margin: 10px;
			color: #FFD700;
		}

		.stars .check {
			color: #635959;
		}

		.pricecont {
			padding: 14px 5px;
			display: flex;
			justify-content: space-between;
		}

		.pricecont button {
			margin: 0;
			border-radius: 20px;
			background-color: #e5e5e5;
			color: green;
		}

		.pricecont button:hover {
			font-weight: bold;
			color: white;
			background-color: green;
		}

		.price_num {
			font-size: 25px;
			font-weight: 600;
			color: #707070;
		}
		.content{
			margin-left: 0;
		}
		.product-container {
			margin: 0 0 0 120px;
		}
	</style>
</head>

<?php include 'includes/session.php'; ?>
<?php
$slug = $_GET['category'];

$conn = $pdo->open();

try {
	$stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :slug");
	$stmt->execute(['slug' => $slug]);
	$cat = $stmt->fetch();
	$catid = $cat['id'];
} catch (PDOException $e) {
	echo "There is some problem in connection: " . $e->getMessage();
}

$pdo->close();

?>
<?php include 'includes/header.php'; ?>

<body class="layout-top-nav">
	<?php include 'includes/navbar.php'; ?>

	<!-- Page Title -->
	<section class="page-title">
		<div class="auto-container">
			<div class="content-box">
				<div class="title">
					<h1>Products</h1>
				</div>
				<ul class="bread-crumb ">
					<li><a href="index.php">Home</a></li>
					<i class='fas fa-angle-right'></i>
					<li>Products category</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- Page Title -->

	<div class="">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="product-container  col-sm-10">
					<h1 class="page-header"><?php echo $cat['name']; ?></h1>
					<?php
					$conn = $pdo->open();
					try {
						$inc = 3;
						$stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
						$stmt->execute(['catid' => $catid]);
						foreach ($stmt as $row) {
							$image = (!empty($row['photo'])) ? 'images/' . $row['photo'] : 'images/noimage.jpg';
							$inc = ($inc == 3) ? 1 : $inc + 1;
							if ($inc == 1) echo "<div class=''>";
							echo "
	       							<div class='col-sm-4'>
	       								<div class='pcard box-solid'>
		       								<div class='box-body prod-body'>
											   <div class='pcardimage'>
											   <img src='" . $image . "' width='100%' height='230px' class='thumbnail'>
											   <div class='hearticon'>
												   <i class='fas fa-heart'></i>
											   </div>
										   </div>
		       									<h5><a href='product.php?product=" . $row['slug'] . "'>" . $row['name'] . "</a></h5>
												   <div class='stars'>
														<span class='fas fa-star'></span>
														<span class='fas fa-star'></span>
														<span class='fas fa-star'></span>
														<span class='fas fa-star check'></span>
														<span class='fas fa-star check'></span>
												  </div>
												  <div class='pricecont'>
												  <a href='product.php?product=" . $row['slug'] . "'>
												  <button class='btn btn-primary btn-lg btn-flat'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
												  </a>
												  <span class='price_num'><b>₹ " . number_format($row['price'], 2) . "</b></span>
											  </div>
		       								</div>
	       								</div>
	       							</div>
	       						";
							if ($inc == 3) echo "</div>";
						}
						if ($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>";
						if ($inc == 2) echo "<div class='col-sm-4'></div></div>";
					} catch (PDOException $e) {
						echo "There is some problem in connection: " . $e->getMessage();
					}

					$pdo->close();

					?>
				</div>
			</div>
		</section>
	</div>
	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/scripts.php'; ?>
</body>

</html>
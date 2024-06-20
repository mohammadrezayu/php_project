<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script><meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Responsive Product Design</title>
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body{
	font-size: 1.7rem;
	font-family: 'Merriweather Sans', sans-serif;
    background-image: url('i.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
	color: #ececec;
	padding: 4rem;
}

h2{
	text-align: center;
	margin-bottom: 5rem;
	font-size: 4rem;
}

.all-products{
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
}

.product{
	overflow: hidden;
	background: #ffffff;
	color: #21201e;
	text-align: center;
	width: 240px;
	height: 400px;
	padding: 2rem;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	border-radius: 1.2rem;
	margin: 2rem;
}

.product .product-title, .product .product-price{
	font-size: 18px;
}

.product:hover img{
	scale:  1.1;
}

.product:hover {
	box-shadow: 5px 15px 25px #eeeeee;
}

.product img {
	height: 200px;
	margin: 1rem;
	transition: all 0.3s;
}

.product a:link, .product a:visited{
	color: #ececec;
	display: inline-block;
	text-decoration: none;
	background-color: #2c3e50;
	padding: 1.2rem 3rem;
	border-radius: 1rem;
	margin-top: 1rem;
	font-size: 14px;
	transition: all 0.2s;
}

.product a:hover{
	transform: scale(1.1);
}


    </style>
</head>
<body>
<script>
Swal.fire({
  position: "top-center",
  icon: "success",
  title: "خوش آمدید",
  showConfirmButton: false,
  timer: 1500
});
</script>
	<section class="products">
		<h2>Our Products</h2>
		<div class="all-products">
			<div class="product">
				<img src="AirPod 2nd Gen.jpg">
				<div class="product-info">
					<h4 class="product-title">AirPod 2nd Gen
					</h4>
					<p class="product-price">$129</p>
					<a class="product-btn" href="#">Buy Now</a>

				</div>
			</div>
			<div class="product">
				<img src="apple-watch-pcq.jpg">
				<div class="product-info">
					<h4 class="product-title">Apple Watch
					</h4>
					<p class="product-price">$299</p>
					<a class="product-btn" href="#">Buy Now</a>

				</div>
			</div>
			<div class="product">
				<img src="iPhone-14.jpg">
				<div class="product-info">
					<h4 class="product-title">iPhone 14
					</h4>
					<p class="product-price">$999</p>
					<a class="product-btn" href="#">Buy Now</a>

				</div>
			</div>
			<div class="product">
				<img src="ipad-pro.jpg">
				<div class="product-info">
					<h4 class="product-title">iPan Pro
						</h4>
					<p class="product-price">$629</p>
					<a class="product-btn" href="#">Buy Now</a>

				</div>
			</div>
		</div>
	</section>

</body>
</html>
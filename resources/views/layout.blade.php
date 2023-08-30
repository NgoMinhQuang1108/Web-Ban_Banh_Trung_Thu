<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('public/Fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/Fontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/Fontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/Fontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/Fontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/Fontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/Fontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('public/Fontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +098989898</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@banhtrungthu.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook btn1"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter btn1"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin btn1"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble btn1"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus btn1"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Việt Nam
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Dollar</a></li>
									
                                    <li><a href="#">BTC</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    VND
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">USD</a></li>
									<li><a href="#">BITCOIN</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user btn1"></i> Tài khoản</a></li>
								<li><a href="#"><i class="fa fa-star btn1"></i> Danh sách yêu thích</a></li>
								<li><a href="#"><i class="fa fa-crosshairs btn1"></i> Thanh Toán</a></li>
								<li><a href="#"><i class="fa fa-shopping-cart btn1"></i> Mua Sắm</a></li>
								<li><a href="login.html"><i class="fa fa-lock btn1"></i> Đăng Nhập</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang Chủ</a></li>
								<li class="dropdown"><a href="#">Cửa Hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Các sản phẩm</a></li>
										<li><a href="product-details.html">Thông tin chi tiết sản phẩm</a></li> 
										<li><a href="checkout.html">Thủ tục thanh toán</a></li> 
										<li><a href="cart.html">Mua Sắm</a></li> 
										<li><a href="login.html">Đăng Nhập</a></li> 
                                    </ul>
                                </li> 
								
								
								<li><a href="contact-us.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Tìm Kiếm"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Moon</span>-Cake</h1>
									<h2>BÁNH TRUNG THU KINH ĐÔ</h2>
									<p>Tết trung thu là câu chuyện của kể nên bởi những chiếc bánh trung thu được chế biến kỳ công; bởi hộp bánh sang trọng vừa tôn vinh giá trị truyền thống vừa mang sắc màu tươi mới; bởi lời chúc ý nghĩa gói trọn trong món quà thu trao tay cho tình thân thêm vẹn tròn. Toàn bộ tinh hoa thể hiện qua tuyệt tác MỸ - VỊ - TÌNH.</p>
									<button type="button" class="btn btn-default get">Lấy nó ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/Fontend/images/Bánh3.jpg')}}" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Moon</span>-Cake</h1>
									<h2>100% Bánh Trung Thu Chính Hãng</h2>
									<p>Bánh trung thu Kinh Đô được phân phối trực tiếp từ Mondelez, chiết khấu cho khách lên tới 25%, hoa hồng cho đơn sỉ.</p>
									<button type="button" class="btn btn-default get">Lấy nó ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/Fontend/images/Bánh2.jpg')}}" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Moon</span>-Cake</h1>
									<h2>GIAO HÀNG TẬN NƠI</h2>
									<p>Chính sách giao hàng linh hoạt cho cả đơn sỉ và lẻ, miễn phí giao hàng với đơn trên 5 hộp nội thành.</p>
									<button type="button" class="btn btn-default get">Lấy nó ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/Fontend/images/Bánh1.jpg')}}" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Loại</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Các Loại Bánh Trung Thu
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Bánh Truyền Thống </a></li>
											<li><a href="#">Bánh Trăng Vàng </a></li>
											<li><a href="#">Bánh Gách Tân </a></li>
											<li><a href="#">Bánh Chay</a></li>
										
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											BÁNH TRUNG THU KINH ĐÔ
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Đậu Đỏ</a></li>
											<li><a href="#">Đậu Xanh</a></li>
											<li><a href="#">Đậu Đen</a></li>
											<li><a href="#">Khoai Môn</a></li>
											<li><a href="#">Bí Ngô</a></li>
											<li><a href="#">Thập Cẩm</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kinh Đô</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bán Chạy</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Khuyến Mãi</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Giảm Giá</a></h4>
								</div>
							</div>
												
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Nhãn hiệu</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Kinh Đô</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span> Như Lan</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Givral</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Bảo Phương</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span> Đông Phương</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Brodard</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Bảo Ngọc</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Lựa Chọn Giá Mua</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">100.000vnd</b> <b class="pull-right">900.000vnd</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
			
					@yield('content')
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Moon</span>-Cake</h2>
							<p>Bạn có thể tìm mua bánh nướng nhân mè đen ngay tại siêu thị, các cửa hàng bán bánh, cửa hàng tạp hóa lớn hoặc đặt mua trực tuyến trên các trang thương mại điện tử.</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{('public/Fontend/images/Bánh1.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Giám đốc</p>
								<h2>24 Thg 5 2023</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{('public/Fontend/images/Bánh4.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{('public/Fontend/images/Bánh2.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{('public/Fontend/images/Bánh3.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{('public/Fontend/images/map.png')}}" alt="" />
							<p>Mặt hàng có toàn Việt Nam</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Dịch vụ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hỗ trợ trực tuyến</a></li>
								<li><a href="#">Liên hệ chúng tôi</a></li>
								<li><a href="#">Tình trạng đặt hàng</a></li>
								<li><a href="#">Thay đổi địa điểm</a></li>
								<li><a href="#">Câu hỏi thường gặp</a></li>
							</ul>
						</div>
					</div>
					
					
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Giới thiệu về người mua hàng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông tin công ty</a></li>
								<li><a href="#">Nghề nghiệp</a></li>
								<li><a href="#">Vị trí cửa hàng</a></li>
								<li><a href="#">Chương trình liên kết</a></li>
								<li><a href="#">Bản quyền</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Giới thiệu về người mua hàng</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Địa chỉ email của bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Nhận thông tin cập nhật mới nhất từ<br />trang web của chúng tôi và được cập nhật tự của bạn...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2023 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="#">MOON-CAKE</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/Fontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/Fontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/Fontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/Fontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/Fontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/Fontend/js/main.js')}}"></script>
</body>
</html>
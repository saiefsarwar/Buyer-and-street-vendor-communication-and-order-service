@extends('layouts.default')

@section('content')
<div class="info-section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="product-categories">
					<div class="card">
							<div class="all-product-categories">
								<i class="fas fa-bars"></i><span class="mx-3">All Categories</span>
								<i class="fas fa-angle-down"></i>
							</div>
						<div class="category-option">
							<ul>
								<li><a href="#">Fresh Meat</a></li>
								<li><a href="#">Fresh Berries</a></li>
								<li><a href="#">Fresh Onion</a></li>
								<li><a href="#">Fresh Bananas</a></li>
								<li><a href="#">Vegetables</a></li>
								<li><a href="#">Ocean Foods</a></li>
								<li><a href="#">Fruit & Nut Gifts</a></li>
								<li><a href="#">Fastfood</a></li>
								<li><a href="#">Papayaya & Crisps</a></li>
								<li><a href="#">Oatmeal</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="product-search">
					<div class="row">
						<div class="col-md-9">
							<div class="info-search">
								<div class="info-search-form">
									<form action="">
										<div class="search-categories"><p>All Categories</p><span ><i class="fas fa-angle-down"></i></span></div>
										<div class="search-box">
											<input type="text" name="search" placeholder="type your product name">
											<button type="submit" class="btn btn-primary">search</button>
										</div>
									</form>
							    </div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="info-contact">
								<div class="contact-icon"><i class="fa fa-phone"></i></div>
								<div class="contact-number">
									<p>+95867957</p><span>24/7 support</span>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="info-slide" style="background: url('{{asset('images/hero/banner.jpg')}}');">
                    <div class="slide-content">
                        <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('images/categories/cat-1.jpg')}}">
                            <h5><a href="#">Fresh Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('images/categories/cat-2.jpg')}}">
                            <h5><a href="#">Dried Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('images/categories/cat-3.jpg')}}">
                            <h5><a href="#">Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('images/categories/cat-4.jpg')}}">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('images/categories/cat-5.jpg')}}">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('images/banner/banner-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('images/banner/banner-2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
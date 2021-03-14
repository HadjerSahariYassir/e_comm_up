<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<div class="super_container">
    <!-- Header -->
    <header class="header">
	  <!-- Top Bar -->
	  <div class="top_bar">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-row">
					<div class="top_bar_contact_item">
						<div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt=""></div>+213 795 47 36 30
					</div>
					<div class="top_bar_contact_item">
						<div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918597/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">sahari_hadjer@yahoo.com</a>
					</div>
					<div class="top_bar_content ml-auto">
						<div class="top_bar_menu">
							<ul class="standard_dropdown top_bar_dropdown">
								<li> <a href="#">FRANCAIS<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li><a href="#">ANGLAIS</a></li>
										
									</ul>
								</li>
								<li> <a href="#">DA<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li><a href="#">EUR EURO</a></li>
										
									</ul>
								</li>
							</ul>
						</div>
						<div class="top_bar_user">
							<ul class="standard_dropdown top_bar_dropdown">
								<div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
								@if(Session::has('user'))
								<li> <a href="/login">{{  Session::get('user')['name']}}<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li><a href="/logout">SE DECONNECTER</a></li>
										
									</ul>
								</li>
								@else
								<li> <a href="/login">SE CONNECTER</a> </li>
                                <li> <a href="/register">S'INSCRIRE</a> </li>
								@endif
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div> <!-- Header Main -->
	<div class="header_main">
		<div class="container">
			<div class="row">
				<!-- Logo -->
				<div class="col-lg-2 col-sm-3 col-3 order-1">
					<div class="logo_container">
						<div class="logo"><a href="/">HCOMM</a></div>
					</div>
				</div> <!-- Search -->
				<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
					<div class="header_search">
						<div class="header_search_content">
							<div class="header_search_form_container">
								<form action="#" class="header_search_form clearfix"> <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
									<div class="custom_dropdown" style="display: none;">
										<div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
											<ul class="custom_list clc">
												<li><a class="clc" href="#">All Categories</a></li>
												<li><a class="clc" href="#">Computers</a></li>
												<li><a class="clc" href="#">Laptops</a></li>
												<li><a class="clc" href="#">Cameras</a></li> 
												<li><a class="clc" href="#">Hardware</a></li>
												<li><a class="clc" href="#">Smartphones</a></li>
											</ul>
										</div>
									</div> <button type="submit" class="header_search_button trans_300" value="Submit"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
								</form>
							</div>
						</div>
					</div>
				</div> <!-- Wishlist -->
				<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
					<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
						<div class="wishlist d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918681/heart.png" alt=""></div>
							<div class="wishlist_content">
								<div class="wishlist_text"><a href="#">MES FAVORIES</a></div>
								<div class="wishlist_count">10</div>
							</div>
						</div> <!-- Cart -->
						<div class="cart">
							<div class="cart_container d-flex flex-row align-items-center justify-content-end">
								<div class="cart_icon"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
									<div class="cart_count"><span>3</span></div>
								</div>
								<div class="cart_content">
									<div class="cart_text"><a href="#">MON PANNIER</a></div>
									<div class="cart_price">3000DA</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- Main Navigation -->
	<nav class="main_nav">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="main_nav_content d-flex flex-row">
						<!-- Categories Menu -->
						<!-- Main Nav Menu -->
						<div class="main_nav_menu">
							<ul class="standard_dropdown main_nav_dropdown">
								<li><a href="/">ACCEUIL<i class="fas fa-chevron-down"></i></a></li>
								<li class="hassubs"> <a href="#">CHAUSSURES<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li> <a href="#">BASKETS<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">NIKE<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">PUMA<i class="fas fa-chevron-down"></i></a></li>
												
											</ul>
										</li>
										<li><a href="#">BOUTES<i class="fas fa-chevron-down"></i></a></li>
										
									</ul>
								</li>
							    <li class="hassubs"> <a href="#">VETEMENTS<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li> <a href="#">JILLETS<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">NIKE<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">PUMA<i class="fas fa-chevron-down"></i></a></li>
												
											</ul>
										</li>
										<li><a href="#">TRIICOT<i class="fas fa-chevron-down"></i></a></li>
										
									</ul>
								</li>
							
								<li class="hassubs"> <a href="#">PAGES<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li><a href="shop.html">SHOP<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="product.html">PRODUIT<i class="fas fa-chevron-down"></i></a></li>
										
										<li><a href="cart.html">PANNIER<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="contact.html">CONTACT<i class="fas fa-chevron-down"></i></a></li>
									</ul>
								</li>
							
								<li><a href="contact.html">CONTACT<i class="fas fa-chevron-down"></i></a></li>
							</ul>
						</div> <!-- Menu Trigger -->
						<div class="menu_trigger_container ml-auto">
							<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
								<div class="menu_burger">
									<div class="menu_trigger_text">menu</div>
									<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav> <!-- Menu -->
	
</header>
<div style="height: 700px"> </div>
</div>
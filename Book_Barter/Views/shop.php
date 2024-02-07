<!-- banner -->
<div class="banner-bg-inner"></div>
<!-- //banner -->
<!-- breadcrumbs -->
<div class="crumbs text-center">
	<div class="container">
		<div class="row">
			<ul class="btn-group btn-breadcrumb bc-list">
				<li class="btn btn1">
					<a href="home">
						<i class="glyphicon glyphicon-home"></i>
					</a>
				</li>
				<li class="btn btn2">
					<a href="product">product catalogue</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!--//breadcrumbs ends here-->
<!-- Shop -->
<div class="innerf-pages section">
	<div class="container-cart">
		<!-- product left -->
		<div class="side-bar col-md-3">
			<h3>Filter by</h3>
			<form action="" method="post" name="filterby" id="filterby">
				<!--preference -->
				<div class="left-side">
					<h3 class="shopf-sear-headits-sear-head">
						Categories</h3>
					<ul>
						<li>
							<input type="checkbox" checked name="category[]" value="Biographies" id="Biographies" class="checked">
							<span class="span">Biographies</span>
						</li>
						<li>
							<input type="checkbox" checked name="category[]" value="Technologies" id="Technologies" class="checked">
							<span class="span">Technologies</span>
						</li>
						<li>
							<input type="checkbox" checked name="category[]" value="History" id="History" class="checked">
							<span class="span">History</span>
						</li>
						<li>
							<input type="checkbox" checked name="category[]" value="Business" id="Business" class="checked">
							<span class="span">Business</span>
						</li>
					</ul>
				</div>
				<!-- price range -->
				<div class="range">
					<h3 class="shopf-sear-headits-sear-head">
						<span>Price</span> range
					</h3>
					<ul class="dropdown-menu6">
						<li>
							<div id="slider-range"></div>
							<input type="text" name="amount" id="amount"
								style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
				</div>
				<!-- //price range -->
				<!-- language -->
				<div class="left-side">
					<h3 class="shopf-sear-headits-sear-head">Language</h3>
					<ul>
						<li>
							<input type="checkbox" checked name="language[]" value="English" id="English" class="checked">
							<span class="span">English</span>
						</li>
						<li>
							<input type="checkbox" checked name="language[]" value="Hindi" id="Hindi" class="checked">
							<span class="span">Hindi</span>
						</li>
						<li>
							<input type="checkbox" checked name="language[]" value="Gujarati" id="Gujarati" class="checked">
							<span class="span">Gujarati</span>
						</li>
					</ul>
				</div>
				<!-- //language -->
				<!-- Binding -->
				<div class="left-side">
					<h3 class="shopf-sear-headits-sear-head">Format</h3>
					<ul>
						<li>
							<input type="checkbox" checked name="format[]" value="Hardcover" id="Hardcover" class="checked">
							<span class="span">Hardcover</span>
						</li>
						<li>
							<input type="checkbox" checked name="format[]" value="PDFFormat" id="PDFFormat" class="checked">
							<span class="span">PDF Format</span>
						</li>
						<li>
							<input type="checkbox" checked name="format[]" value="AudioBook" id="AudioBook" class="checked">
							<span class="span">Audio Book</span>
						</li>
					</ul>
				</div>
				<!-- //Binding -->
				<!-- discounts -->
				<div class="left-side">
					<h3 class="shopf-sear-headits-sear-head">Discount</h3>
					<ul>
						<li>
							<input type="checkbox" checked name="discount[]" value="30" id="30" class="checked">
							<span class="span">5% - 30%</span>
						</li>
						<li>
							<input type="checkbox" checked name="discount[]" value="60" id="60" class="checked">
							<span class="span">30% - 60%</span>
						</li>
						<li>
							<input type="checkbox" checked name="discount[]" value="60m" id="60m" class="checked">
							<span class="span">60% or more</span>
						</li>
					</ul>
				</div>
				<!-- //discounts -->
				<!-- reviews -->
				<div class="customer-rev left-side">
					<h3 class="shopf-sear-headits-sear-head">Customer Review</h3>
					<ul>
						<li>
							<div>
								<input type="checkbox" checked name="rating[]" value="5" id="5" class="checked">&nbsp;
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<span>5.0</span>
							</div>
						</li>
						<li>
							<div>
								<input type="checkbox" checked name="rating[]" value="4" id="4" class="checked">&nbsp;
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-regular fa-star" aria-hidden="true"></i>
								<span>4.0</span>
							</div>
						</li>
						<li>
							<div>
								<input type="checkbox" checked name="rating[]" value="3" id="3" class="checked">&nbsp;
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-regular fa-star" aria-hidden="true"></i>
								<i class="fa fa-regular fa-star" aria-hidden="true"></i>
								<span>3.0</span>
							</div>
						</li>
						<li>
							<div>
								<input type="checkbox" checked name="rating[]" value="2" id="2" class="checked">&nbsp;
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-regular fa-star" aria-hidden="true"></i>
								<i class="fa fa-regular fa-star" aria-hidden="true"></i>
								<i class="fa fa-regular fa-star" aria-hidden="true"></i>
								<span>2.0</span>
							</div>
						</li>
					</ul>
				</div>
				<!-- //reviews -->
				<div>
					<input type="submit" value="Filter" name="filtering" id="filtering" class="filtering">
				</div>
			</form>
		</div>
		<!-- //product left -->
		<!-- product right -->
		<div class="left-ads-display col-md-9">
			<div class="wrapper_top_shop">
				<!-- product-sec1 -->
				<div class="product-sec1">
					<!-- row1-->
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib8.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>be creative</h4>
								<p>Clayton Barton</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 100.00</li>
										<li>
											$200.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib7.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>marketing</h4>
								<p>Niel Fontine</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 200.00</li>
										<li>
											$250.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib3.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>work from home</h4>
								<p>Jose portilla</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 80.00</li>
										<li>
											$100.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib6.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>online business</h4>
								<p>Clayton Barton</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 120.00</li>
										<li>
											$130.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<!-- //row1 -->
					<!-- row2 -->
					<div class="col-md-3 product-men women_two">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib6.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>e-commerce</h4>
								<p>Chris Haroun</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 125.00</li>
										<li>
											$165.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men women_two">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib2.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>kids</h4>
								<p>Alex Even</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 70.00</li>
										<li>
											$100.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men women_two">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib5.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>media</h4>
								<p>Alex Even</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 220.00</li>
										<li>
											$300.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men women_two">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib4.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>membership</h4>
								<p>Hadilen de</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 210.00</li>
										<li>
											$300.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<!-- //row2 -->
					<!-- row3 -->
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib7.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>marketing</h4>
								<p>Scott Harris</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 180.00</li>
										<li>
											$220.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib1.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>online business</h4>
								<p>Scott Harris</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 330.00</li>
										<li>
											$560.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib2.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>kids</h4>
								<p>Cordebard</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 280.00</li>
										<li>
											$500.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product">
									<img src="<?php echo $this->assets_url; ?>/Assets/images/lib3.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>work from home</h4>
								<p>Cordebard</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 140.00</li>
										<li>
											$200.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<a href="#">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
								</a>
							</div>
						</div>
					</div>
					<!-- //row3 -->
					<div class="clearfix"></div>

				</div>

				<!-- //product-sec1 -->
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>

	</div>
</div>
<!--// Shop -->
</div>
<!-- //home -->
<!-- js -->
<!-- Common js -->
<script src="<?php echo $this->assets_url; ?>/Assets/js/jquery-2.2.3.min.js"></script>
<!--// Common js -->
<!-- price range (top products) -->
<script src="<?php echo $this->assets_url; ?>/Assets/js/jquery-ui.js"></script>
<script>
	//<![CDATA[ 
	$(window).load(function () {
		$("#slider-range").slider({
			range: true,
			min: 0,
			max: 5000,
			values: [50, 3000],
			slide: function (event, ui) {
				$("#amount").val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
			}
		});
		$("#amount").val("₹" + $("#slider-range").slider("values", 0) + " - ₹" + $("#slider-range").slider("values", 1));

	}); //]]>
</script>
<!-- //price range (top products) -->
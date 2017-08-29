<!DOCTYPE html>
<html lang="fr">
<?php require "header.php"; ?>
		<!-- content -->
		<div id="content">

			<div class="product-page container">
				
				<div class="row">
					<div class="col-md-6">
						<div class="single-img">
							<div class="sp-wrap">
								<a href="<?php echo HOST.FOLDER ?>images/1.jpg"><img src="<?php echo $itemHome[0]["url"]; ?>" alt=""></a>
								<a href="<?php echo HOST.FOLDER ?>images/2.jpg"><img src="images/2_tb.jpg" alt=""></a>
								<a href="<?php echo HOST.FOLDER ?>images/3.jpg"><img src="images/3_tb.jpg" alt=""></a>
								<a href="<?php echo HOST.FOLDER ?>images/4.jpg"><img src="images/4_tb.jpg" alt=""></a>
								<a href="<?php echo HOST.FOLDER ?>images/5.jpg"><img src="images/5_tb.jpg" alt=""></a>
								<a href="<?php echo HOST.FOLDER ?>images/6.jpg"><img src="images/6_tb.jpg" alt=""></a>
							</div>
							<div id="test"></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-desc">
							<div class="top-single">
								<span>Shop  /  Men  /  Jackets  /  Black Leather Jacket</span>
								<div class="right-arrows">
									<a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-angle-left"></i></a>
									<a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-angle-right"></i></a>
								</div>
							    <div class="clear"></div>
							</div>

							<div class="middle-single">
								
								<h1><?php echo $itemHome[0]["libelle"]; ?></h1>

								<img src="upload/stars.png" alt="">

								<div class="reviews">
									<a href="<?php echo HOST.FOLDER ?>#" id="elem-reviews">0 Rewiew(s)</a>  /  
									<a href="<?php echo HOST.FOLDER ?>#">Add a Review</a>
								</div>
							    <div class="clear"></div>

							</div>
												
							<div class="single-price">
							   <ul>
									<li><span class="low-price">$<?php echo $itemHome[0]["price"];?></span></li>
								</ul>
						    </div>

						    <div class="single-infos">
						    	<p><span>Category:</span> <?php echo $itemHome[0]["categorie"];?> </p>
						    	<p><span>Product Code:</span> <?php echo $itemHome[0]["code_item"];?> </p>
						    	<p><span>Availability:</span><?php echo ($itemHome[0]["availabity"]==1)? "En stock" : "Rupture de Stock";?> </p>	
						    </div>

							<!-- <div class="single-inputs row">
								<div class="col-md-6">
									<select class="select">
										<option value="Select Size">Select Size</option>
										<option value="S">S</option>
										<option value="M">M</option>
										<option value="L">L</option>
										<option value="XL">XL</option>
										<option value="XXL">XXL</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="select">
										<option value="Select Color">Select Color</option>
										<option value="White">White</option>
										<option value="Black">Black</option>
										<option value="Red">Red</option>
										<option value="Blue">Blue</option>
										<option value="Green">Green</option>
									</select>
								</div>
							</div> -->
						    

								
							<div class="prod-end">
								<a href="<?php echo HOST.FOLDER ?>#" class="medium-button button-red add-cart">Add to Cart</a>
								<input type="text" placeholder="1">
								<ul>
									<li><a href="<?php echo HOST.FOLDER ?>#" class="wishlist"><i class="fa fa-heart"></i> Add to Wishlist</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#" class="compare"><i class="fa fa-retweet"></i>Add to Compare</a></li>
								</ul>
								<div class="clear"></div>
																		
							</div>

							<div class="single-descript">
								<p><?php echo $itemHome[0]["description"];?></p>
							</div>

							<div class="share">
								<span>Share</span>
								<ul>
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-envelope"></i></a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>

			</div>
			<!-- End Product Single -->

			<div class="tabs-single">
				<div class="container">

					<div id="tabs">
					  <ul>
					    <li class="active"><a href="<?php echo HOST.FOLDER ?>#tabs-1">Description</a></li>
					    <li><a href="<?php echo HOST.FOLDER ?>#tabs-2">ADDITIONAL INFORMATION</a></li>
					    <li><a href="<?php echo HOST.FOLDER ?>#tabs-3">REVIEWS</a></li>
					  </ul>
					  <div class="tab-border"></div>
					  <div id="tabs-1">
					    <p>We possess within us two minds. So far I have written only of the conscious mind.. Our subconscious mind contains such power and complexity that it literally staggers the imagination. We know that this subconscious mind controls and orchestrates our bodily functions, from pumping blood to all parts of our body. We possess within us two minds. So far I have written only of the conscious mind.. Our subconscious mind contains such power and complexity that it literally staggers the imagination. We know that this subconscious mind controls and orchestrates our bodily functions, from pumping blood to all parts of our body.</p>
					  </div>
					  <div id="tabs-2">
					    <p>We possess within us two minds. So far I have written only of the conscious mind.. Our subconscious mind contains such power and complexity that it literally staggers the imagination. We know that this subconscious mind controls and orchestrates our bodily functions, from pumping blood to all parts of our body. We possess within us two minds. So far I have written only of the conscious mind.. Our subconscious mind contains such power and complexity that it literally staggers the imagination. We know that this subconscious mind controls and orchestrates our bodily functions, from pumping blood to all parts of our body.</p>
					  </div>
					  <div id="tabs-3">
					  
					  </div>
					</div>
					<!-- End First Tabs -->



				</div>
			</div>		
			<!-- End tab Signle -->	


			<div class="feat-items mb30">
				<div class="container">
					<h1>RELATED ITEMS</h1>
					<div class="list_carousel1 responsive">
						<ul id="foo1">
							<?php 
								$i = 0;
								foreach($itemsHome as $item): 
							?>
						</ul>
						<div class="clearfix"></div>
						<div class="arrows">
							<a id="prev1" class="prev1" href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-angle-left"></i></a>
							<a id="next1" class="next1" href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
					<!-- End List Carousel -->
				</div>
			</div>
			<!-- feat-items -->

			<div class="partners">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<a href="<?php echo HOST.FOLDER ?>#"><img src="upload/partners1.png" alt=""></a>
						</div>
						<div class="col-sm-2">
							<a href="<?php echo HOST.FOLDER ?>#"><img src="upload/partners2.png" alt=""></a>
						</div>
						<div class="col-sm-2">
							<a href="<?php echo HOST.FOLDER ?>#"><img src="upload/partners3.png" alt=""></a>
						</div>
						<div class="col-sm-2">
							<a href="<?php echo HOST.FOLDER ?>#"><img src="upload/partners4.png" alt=""></a>
						</div>
						<div class="col-sm-2">
							<a href="<?php echo HOST.FOLDER ?>#"><img src="upload/partners5.png" alt=""></a>
						</div>
						<div class="col-sm-2">
							<a href="<?php echo HOST.FOLDER ?>#"><img src="upload/partners6.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- End content -->

		<!-- footer 
			================================================== -->
		<footer>
			<div class="inner-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="f-about">
								<h1>ABOUT SHOP</h1>
								<p class="mb20">We possess within us two minds. So far I have written only of the conscious mind.We further know that the subconscious has recorded every event. This is just perfect theme.</p>
								<h1>NEWSLETTER</h1>
								<form action="#">
									<input type="text" placeholder="Your e-mail">
									<input type="submit" value="">
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<div class="infos">
								<h1>Information</h1>
								<ul>
									<li><a href="<?php echo HOST.FOLDER ?>#">• Our Stores</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• Delivery Information</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• About Us</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• Terms and Conditions</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• Privacy Policy</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• Contact Us</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• Returns</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="account">
								<h1>My Account</h1>
								<ul>
									<li><a href="<?php echo HOST.FOLDER ?>#">• My Account</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• Order History</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• My Wishlist</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• Specials</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• Track Order</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• Gift Vouchers</a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#">• My Credit Slips</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="gettouch">
								<h1>Get in Touch with us</h1>
								<p><i class="fa fa-home"></i> Philippines, PO Box 6200 Talay st. 65, SweetPick inc.</p>
								<p><i class="fa fa-phone"></i> +63 918 4084 694</p>
								<p class="mb20"><i class="fa fa-envelope"></i> samokhinteam@gmail.com</p>
								<h1>FIND US ON</h1>
								<ul class="footer-socials">
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="<?php echo HOST.FOLDER ?>#"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<div id="back-to-top">
	          <a href="<?php echo HOST.FOLDER ?>#top">Back to Top</a>
	        </div>
			</div>
			<!-- end contanir & inner-footer -->
			<div class="container">
				<div class="last-div">
					<div class="row">
						<div class="copyright">
							© 2014 SweetPick Elegant Shop  |  <a href="<?php echo HOST.FOLDER ?>#">Designed by Alexander Samokhin</a>
						</div>
						<div class="payment">
							<a href="<?php echo HOST.FOLDER ?>#"><img src="upload/payments.png" alt=""></a>
						</div>
						<div class="clear"></div>
					</div>

				</div>
			</div>



	        
		</footer>
		<!-- End footer -->



        <!-- Style Switch -->

		<!-- Style Switch -->

		</div>

	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery-ui.js"></script>
	<script>
	    $( "#tabs" ).tabs();
	    $( "#accordion" ).accordion();
	</script>
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/smoothproducts.min.js"></script>
	<script type="text/javascript">
                /* wait for images to load */
                $(window).load( function() {
                    $('.sp-wrap').smoothproducts();
                });
        </script>
	
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.superfish.js"></script>
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.bxslider.js"></script>

	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/plugins-scroll.js"></script>
  	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.appear.js"></script>
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.countTo.js"></script>
	<script src="js/jquery.parallax.js"></script>
     <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/script.js"></script>

 	<!-- include jQuery + carouFredSel plugin -->
    <script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.carouFredSel.js"></script>

    <!-- optionally include helper plugins -->
    <script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="<?php echo HOST.FOLDER ?>js/jquery.touchSwipe.min.js"></script>
	<script src="<?php echo HOST.FOLDER ?>js/Mike.js"></script>
	
</body>
</html>